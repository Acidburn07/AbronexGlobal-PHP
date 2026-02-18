<?php
// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {
    
    // Retrieve data from the form and store it in variables
    $name = $_POST['fullname'];
    $email = $_POST['contact_email'];
    $message = $_POST['message'];

    // Include the database connection file
    include 'getintouch/db.php';

     // Define an SQL query to insert data into the 'student_preferences' table
    $sql = "INSERT INTO student_preferences
    (name, email, message)
    VALUES 
    ('$name', '$email', '$message')";


    // Execute the SQL query using the database connection
    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        echo "New record added";
    } else {
        // If there was an error in the query, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
