<?php
// Error reporting and display settings
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection logic
include "createMysqlDB.php";

// Initialize error and success message variables
$errorMessage = "";
$successMessage = "";

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
        $errorMessage .= "<div class='error-message'>First Name is required</div>";
    } elseif (strlen($_POST["name"]) > 60) {
        $errorMessage .= "<div class='error-message'>Name is too long (maximum 60 characters allowed)</div>";
    }

    if (empty($_POST["email"])) {
        $errorMessage .= "<div class='error-message'>Email is required</div>";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errorMessage .= "<div class='error-message'>Please enter a valid email address.</div>";
    } elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $_POST["email"])) {
        $errorMessage .= "<div class='error-message'>Invalid email format</div>";
    }

    if (empty($_POST["telephone"]) || strlen($_POST["telephone"]) > 11) {
        $errorMessage .= "<div class='error-message'>Telephone is required, max 11 characters</div>";
    } elseif (!preg_match("/^(?:(?:\+?44\s?(?:(\d{1,5})|\d{1,5})|\d{4}|\d{5})\s?\d{3}\s?\d{3}\s?)$/", $_POST["telephone"])) {
        $errorMessage .= "<div class='error-message'>The telephone format is incorrect.</div>";
    }

    if (empty($_POST["message"])) {
        $errorMessage .= "<div class='error-message'>Message is required</div>";
    } elseif (strlen($_POST["message"]) < 5) {
        $errorMessage .= "<div class='error-message'>Message must be at least 5 characters.</div>";
    } elseif (strlen($_POST["message"]) > 255) {
        $errorMessage .= "<div class='error-message'>Message is too long, must be less than 255 characters.</div>";
    }

    // Proceed with database insertion if there are no validation errors
    if (empty($errorMessage)) {
        // Extract form data
        $name = $_POST["name"];
        $company = $_POST["company"] ?? "";
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
            $successMessage = "<div class='success-message'>Your message has been sent!</div>";
        } else {
            // Handle database errors
            $errorMessage .= "<div class='error-message'>Error saving data to the database: " . $conn->error . "</div>";
        }
        $stmt->close();
    }
}
