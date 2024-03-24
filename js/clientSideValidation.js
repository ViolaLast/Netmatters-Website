$(document).ready(function() {
    // Bind input event listeners to perform validation as the user types
    $("#name, #email, #telephone, #message").on("input", function() {
        validateInput($(this));
    });

    // Validate input field
    function validateInput(input) {
        // Reset error style
        input.removeClass("error");

        // Perform validation based on input field ID
        switch (input.attr("id")) {
            case "name":
                if (!input.val()) {
                    input.addClass("error");
                    return false; // Return false if validation fails
                }
                break;
            case "email":
                if (!input.val() || !isValidEmailAddress(input.val())) {
                    input.addClass("error");
                    return false; // Return false if validation fails
                }
                break;
            case "telephone":
                if (!input.val() || input.val().length > 11 || !isValidTelephone(input.val())) {
                    input.addClass("error");
                    return false; // Return false if validation fails
                }
                break;
            case "message":
                if (!input.val()) {
                    input.addClass("error");
                    return false; // Return false if validation fails
                } else if (input.val().length < 5) {
                    input.addClass("error");
                    return false; // Return false if message is too short
                } else if (input.val().length > 255) {
                    input.addClass("error");
                    return false; // Return false if message is too long
                }
                break;
        }
        return true; // Return true if validation passes
    }

    // Function to validate email format
    function isValidEmailAddress(email) {
        var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return emailRegex.test(email);
    }

    // Function to validate telephone format
    function isValidTelephone(telephone) {
        var telephoneRegex = /^(?:(?:\+?44\s?(?:(\d{1,5})|\d{1,5})|\d{4}|\d{5})\s?\d{3}\s?\d{3}\s?)$/;
        return telephoneRegex.test(telephone);
    }
});
