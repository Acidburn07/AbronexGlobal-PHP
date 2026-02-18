<?php
// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {
    
    // Retrieve data from the form and store it in variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $destination = $_POST['study_destination'];
    $program = $_POST['program_type'];
    $college = $_POST['college_type'];
    $budget = $_POST['budget_range'];
    $notify = $_POST['Notify_via'];
    $message = $_POST['message'];

    // Include the database connection file
    include 'db.php';

     // Define an SQL query to insert data into the 'student_preferences' table
    $sql = "INSERT INTO student_preferences
    (name, email, phone, study_destination, program_type, college_type, budget_range, notify_via, message)
    VALUES 
    ('$name', '$email', '$phone', '$destination', '$program', '$college', '$budget', '$notify', '$message')";


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
