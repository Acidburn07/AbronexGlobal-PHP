<?php
include 'db.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM getintouch WHERE id= '$id'");
$row = mysqli_fetch_array($result);
?>

<h2> Update Student Inquiry: </h2>

<form name="form1" method="post" action="">
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Full Name" name="contact_name" required value="<?php echo $row['name']; ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Email Address" name="contact_email" required value="<?php echo $row['email']; ?>">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Message" name="contact_message" required value="<?php echo $row['message']; ?>">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col"><button type="submit" class="btn btn-primary" name="submit">Update Information</button></div>
    <div class="col"><button type="submit" class="btn btn-danger" name="delete">Delete Information</button></div>
  </div>
</form>

<?php 
/* The isset() function is used to check if a variable is set and not NULL.
In this case, it's checking if the $_POST['submit'] value is set and not NULL. 
If the form has been submitted, the value of $_POST['submit'] will be set,
and the code inside the if block will be executed.
*/
if (isset($_POST['submit'])){
    $update_id = $_POST['id'];
    $name = $_POST['contact_name'];
    $email = $_POST['contact_email'];
    $message = $_POST['contact_message'];

    $query = mysqli_query($conn, "UPDATE getintouch SET name='$name', email='$email', message='$message' WHERE id='$update_id'");
    
    if($query){
        echo "<h2>Your information is updated Successfully</h2>";
    } else { 
        echo "Record Not modified";
    }
}

if (isset($_POST['delete'])){
    $delete_id = $_POST['id'];
    
    $query = mysqli_query($conn, "DELETE FROM getintouch WHERE id='$delete_id'");
    
    if($query){
        echo "Record Deleted with id: $delete_id <br>";
    } else { 
        echo "Record Not Deleted";
    }
}

$conn->close();
?>