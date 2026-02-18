
document.getElementById('quickContactForm').addEventListener('submit', function(event) {
    let isValid = true;
    if (document.getElementById('contact_name').value.trim() === "") { document.getElementById('contactNameError').classList.remove('hidden'); isValid = false; } else { document.getElementById('contactNameError').classList.add('hidden'); }
    const email = document.getElementById('contact_email').value;
    if (email.indexOf('@') === -1 || email.indexOf('.') === -1) { document.getElementById('contactEmailError').classList.remove('hidden'); isValid = false; } else { document.getElementById('contactEmailError').classList.add('hidden'); }
    if (document.getElementById('contact_message').value.trim() === "") { document.getElementById('contactMessageError').classList.remove('hidden'); isValid = false; } else { document.getElementById('contactMessageError').classList.add('hidden'); }
    if (!isValid) event.preventDefault(); 
});