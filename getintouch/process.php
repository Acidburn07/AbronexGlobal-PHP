<?php
include 'db.php';
include '../includes/header.php'; // Optional: if you want your navbar to show here
?>

<div class="container mt-5">
    <h2>Admin Dashboard: Student Inquiries</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        <?php
        // 1. Ask the database for all the records
        $sql = "SELECT * FROM getintouch";
        $result = $conn->query($sql);

        // 2. Check if we have any rows in the database
        if ($result->num_rows > 0) {
            
            // 3. Loop through each row and print it inside an HTML table row (<tr>)
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
                
                // This is the magic link that sends the specific ID to your update.php page!
                echo "<td><a href='update.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit / Delete</a></td>";
                echo "</tr>";
            }
        } else {
            // If the database is empty, show this message
            echo "<tr><td colspan='5'>No inquiries found in the database.</td></tr>";
        }

        // Close the connection
        $conn->close();
        ?>

        </tbody>
    </table>
</div>
