<?php
// Include database connection
include 'db.php';

// Get the ID from URL
$id = $_GET['id'];

// Fetch the record from the database
$result = mysqli_query($conn, "SELECT * FROM getintouch WHERE id='$id'");
$row = mysqli_fetch_array($result);
?>

<h2>Update Your Application</h2>

<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $id; ?>">

  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="contact_name" required placeholder="Full Name" value="<?php echo $row['name']; ?>">
    </div>
    <div class="col">
      <input type="email" class="form-control" name="contact_email" required placeholder="Email Address" value="<?php echo $row['email']; ?>">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="tel" class="form-control" name="phone" placeholder="Phone Number" value="<?php echo isset($row['phone']) ? $row['phone'] : ''; ?>">
    </div>
    <div class="col">
      <select class="form-control" name="study_destination">
        <option value="Canada" <?php if(isset($row['study_destination']) && $row['study_destination']=='Canada') echo 'selected'; ?>>Canada</option>
        <option value="USA" <?php if(isset($row['study_destination']) && $row['study_destination']=='USA') echo 'selected'; ?>>USA</option>
      </select>
    </div>
  </div>
  <br>
  <div>
    <textarea class="form-control" name="contact_message" placeholder="Message"><?php echo $row['message']; ?></textarea>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <button type="submit" class="btn btn-primary" name="submit">Update Application</button>
    </div>
    <div class="col">
      <button type="submit" class="btn btn-danger" name="delete">Delete Application</button>
    </div>
  </div>
</form>

<?php
if(isset($_POST['submit'])){
    $update_id = $_POST['id']; 
    $name = $_POST['contact_name'];
    $email = $_POST['contact_email'];
    $message = $_POST['contact_message'];

    // Updating the getintouch table using our field names
    $query = mysqli_query($conn, "UPDATE getintouch
        SET name='$name', email='$email', message='$message'
        WHERE id='$update_id'");

    if($query){
        echo "<h2>Your application has been updated successfully</h2>";
    } else {
        echo "Record not updated: " . mysqli_error($conn);
    }
}

if(isset($_POST['delete'])){
    $delete_id = $_POST['id']; 
    $query = mysqli_query($conn, "DELETE FROM getintouch WHERE id='$delete_id'");
    if($query){
        echo "<h2>Application deleted successfully</h2>";
    } else {
        echo "Record not deleted: " . mysqli_error($conn);
    }
}

$conn->close();
?>