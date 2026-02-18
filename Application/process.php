<?php
// Include database connection
include 'db.php';

// Check if the form submit button was clicked
if (isset($_POST['submit'])) {

    // Get form data
    $fullname          = $_POST['fullname'];
    $academic_profile  = $_POST['academic_profile'];
    $language_test     = $_POST['language_test'];
    $preferred_country = $_POST['preferred_country'];
    $nearest_branch    = $_POST['nearest_branch'];
    $consent           = isset($_POST['consent']) ? 1 : 0;

    // Insert into database
    $sql = "INSERT INTO student_application 
        (fullname, academic_profile, language_test, preferred_country, nearest_branch, consent)
        VALUES
        ('$fullname', '$academic_profile', '$language_test', '$preferred_country', '$nearest_branch', '$consent')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>Application submitted successfully!</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }

    $conn->close();
}
?>
