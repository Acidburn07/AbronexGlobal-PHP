function validateForm() {
  
  // 1. Get values using document.forms (your preferred style)
  let name = document.forms["getintouchform"]["contact_name"].value;
  let email = document.forms["getintouchform"]["contact_email"].value;
  let message = document.forms["getintouchform"]["contact_message"].value;

  // 2. Name Validation
  if (name.trim() == "") {
    // Show the red error text
    document.getElementById("contactNameError").classList.remove("hidden");
    alert("Please enter your Full Name");
    return false;
  }

  // 3. Email Validation
  if (email.trim() == "" || email.indexOf('@') == -1) {
    // Show the red error text
    document.getElementById("contactEmailError").classList.remove("hidden");
    alert("Please enter a valid email address");
    return false;
  }

  // 4. Message Validation
  if (message.trim() == "") {
    // Show the red error text
    document.getElementById("contactMessageError").classList.remove("hidden");
    alert("Please enter your message");
    return false;
  }

  // If all checks pass, the form will submit
}