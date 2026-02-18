function validateForm() {
    // 1. Get values using the forms["formName"]["inputName"] format
    let name = document.forms["quickContactForm"]["contact_name"].value;
    let email = document.forms["quickContactForm"]["contact_email"].value;
    let message = document.forms["quickContactForm"]["contact_message"].value;

    // 2. Alert Validation for Name
    if (name.trim() == "") {
        alert("Please enter your Full Name");
        return false;
    }

    // 3. Alert Validation for Email
    if (email == "" || email.indexOf('@') == -1) {
        alert("Please enter a valid Email Address");
        return false;
    }

    // 4. Alert Validation for Message
    if (message.trim() == "") {
        alert("Please enter your Message");
        return false;
    }

    // If everything is fine, the form submits
    return true;
}