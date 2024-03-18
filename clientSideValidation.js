function validateForm() {
    var errors = {};

    var name = document.getElementById("name").value.trim();
    if (name === "") {
        errors['name'] = "First Name is required";
        document.getElementById("nameError").innerHTML = "First Name is required";
        document.getElementById("name").classList.add("error");
    } else {
        document.getElementById("nameError").innerHTML = "";
        document.getElementById("name").classList.remove("error");
    }

    // Other validation checks for other fields

    // If there are errors, prevent form submission
    if (Object.keys(errors).length > 0) {
        return;
    }

    // If no errors, submit the form
    document.getElementById("contactForm").submit();
}