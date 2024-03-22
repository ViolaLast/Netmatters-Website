<?php 
// Database connection logic
include "createMysqlDB.php";

// success and error messages
$errorMessage = "";
$successMessage= "";

// Array to store validation errors
$errors = [];

// Establish the database connection
$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//================================================================FORM VALIDATION=======================================================//

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form fields
    if (empty($_POST["name"])) {
        $errors['name'] = "First Name is required";
    }

    if (empty($_POST["email"])) {
        $errors['email'] = "Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Please enter a valid email address.";
    } elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $_POST["email"])) {
        $errors['email'] = "Invalid email format";
    }

    if (empty($_POST["telephone"]) || strlen($_POST["telephone"]) > 11) {
        $errors['telephone'] = "Telephone is required, max 11 characters";
    } elseif (!preg_match("/^(?:(?:\+?44\s?(?:(\d{1,5})|\d{1,5})|\d{4}|\d{5})\s?\d{3}\s?\d{3}\s?)$/", $_POST["telephone"])) {
        $errors['telephone'] = "The telephone format is incorrect.";
    }

    if (empty($_POST["message"])) {
        $errors['message'] = "Message is required";
    } elseif (strlen($_POST["message"]) < 5) {
        $errors['message'] = "Message must be at least 5 characters.";
    }

    // Proceed with database insertion if there are no validation errors
    if (empty($errors)) {
        // Extract form data
        $name = $_POST["name"];
        $company = $_POST["company"];
        $email = $_POST["email"];
        $telephone = $_POST["telephone"];
        $message = $_POST["message"];
        $preference = isset($_POST["preference"]) ? $_POST["preference"] : 0;

        // Insert form data into the database
        $stmt = $conn->prepare("INSERT INTO contactform (name, company, email, telephone, message, preference) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $name, $company, $email, $telephone, $message, $preference);
        if ($stmt->execute()) {
            // Clear form fields after successful submission
            $_POST["name"] = "";
            $_POST["company"] = "";
            $_POST["email"] = "";
            $_POST["telephone"] = "";
            $_POST["message"] = "";

            // Output JavaScript code to scroll to the contact form
            echo '<script>window.location = "#contactForm";</script>';

            // success message
            $successMessage = "Your message has been sent!";
        } else {
            // Handle database errors
            $errorMessage = "Error saving data to the database: " . $conn->error;
            echo $errorMessage;
        }
        $stmt->close();
    }
}

