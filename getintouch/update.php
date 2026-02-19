<?php
// Include database connection
include 'db.php';

// Get the ID from URL - Logic: Fetching the specific record to edit
$id = $_GET['id'];

// Fetch the record from the database
$result = mysqli_query($conn, "SELECT * FROM getintouch WHERE id='$id'");
$row = mysqli_fetch_array($result);

// Error handling if record doesn't exist
if (!$row) {
    die("Record not found.");
}
?>

<h2>Update Your Application</h2>

<form method="post" action="process.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <div class="row">
        <div class="col">
            <label>Full Name</label>
            <input type="text" class="form-control" name="contact_name" required value="<?php echo $row['name']; ?>">
        </div>
        <div class="col">
            <label>Email Address</label>
            <input type="email" class="form-control" name="contact_email" required value="<?php echo $row['email']; ?>">
        </div>
    </div>
    <br>
    <div>
        <label>Message</label>
        <textarea class="form-control" name="contact_message" rows="5"><?php echo $row['message']; ?></textarea>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary" name="submit" style="background-color: #00C4B4; border: none;">Update Inquiry</button>
        </div>
        <div class="col">
            <button type="submit" class="btn btn-danger" name="delete">Delete Inquiry</button>
        </div>
    </div>
</form>

<?php
// UPDATE LOGIC
if(isset($_POST['submit'])){
    $update_id = $_POST['id']; 
    // Best Practice: Sanitize inputs to prevent SQL errors
    $name = mysqli_real_escape_string($conn, $_POST['contact_name']);
    $email = mysqli_real_escape_string($conn, $_POST['contact_email']);
    $message = mysqli_real_escape_string($conn, $_POST['contact_message']);

    $query = mysqli_query($conn, "UPDATE getintouch 
        SET name='$name', email='$email', message='$message' 
        WHERE id='$update_id'");

    if($query){
        echo "<h2 style='color: green;'>Inquiry updated successfully</h2>";
    } else {
        echo "Record not updated: " . mysqli_error($conn);
    }
}

// DELETE LOGIC
if(isset($_POST['delete'])){
    $delete_id = $_POST['id']; 
    $query = mysqli_query($conn, "DELETE FROM getintouch WHERE id='$delete_id'");
    
    if($query){
        echo "<h2 style='color: red;'>Inquiry deleted successfully</h2>";
        // Optional: Redirect back to a view-all page after deletion
        // header("Location: view_messages.php");
    } else {
        echo "Record not deleted: " . mysqli_error($conn);
    }
}

$conn->close();
?>