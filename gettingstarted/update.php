<?php
// Include database connection
include 'db.php';

// Get the ID from URL
$id = $_GET['id'];

// Fetch the record from the database
$result = mysqli_query($conn, "SELECT * FROM student_preferences WHERE id='$id'");
$row = mysqli_fetch_array($result);
?>

<h2>Update Your Application</h2>

<form method="post" action="process.php">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="name" required placeholder="Full Name" value="<?php echo $row['name']; ?>">
    </div>
    <div class="col">
      <input type="email" class="form-control" name="email" required placeholder="Email Address" value="<?php echo $row['email']; ?>">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="tel" class="form-control" name="phone" required placeholder="Phone Number" value="<?php echo $row['phone']; ?>">
    </div>
    <div class="col">
      <select class="form-control" name="study_destination" required>
        <option value="Canada" <?php if($row['study_destination']=='Canada') echo 'selected'; ?>>Canada</option>
        <option value="USA" <?php if($row['study_destination']=='USA') echo 'selected'; ?>>USA</option>
        <option value="UK" <?php if($row['study_destination']=='UK') echo 'selected'; ?>>UK</option>
        <option value="Australia" <?php if($row['study_destination']=='Australia') echo 'selected'; ?>>Australia</option>
        <option value="Other" <?php if($row['study_destination']=='Other') echo 'selected'; ?>>Other</option>
      </select>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <select class="form-control" name="program_type" required>
        <option value="Undergraduate" <?php if($row['program_type']=='Undergraduate') echo 'selected'; ?>>Undergraduate</option>
        <option value="Bachelor" <?php if($row['program_type']=='Bachelor') echo 'selected'; ?>>Bachelor</option>
        <option value="Post Graduate" <?php if($row['program_type']=='Post Graduate') echo 'selected'; ?>>Post Graduate</option>
        <option value="Masters" <?php if($row['program_type']=='Masters') echo 'selected'; ?>>Masters</option>
      </select>
    </div>
    <div class="col">
      <select class="form-control" name="college_type" required>
        <option value="Public University" <?php if($row['college_type']=='Public University') echo 'selected'; ?>>Public University</option>
        <option value="Private University" <?php if($row['college_type']=='Private University') echo 'selected'; ?>>Private University</option>
        <option value="Community College" <?php if($row['college_type']=='Community College') echo 'selected'; ?>>Community College</option>
        <option value="Technical / Vocational" <?php if($row['college_type']=='Technical / Vocational') echo 'selected'; ?>>Technical / Vocational</option>
      </select>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <select class="form-control" name="budget_range" required>
        <option value="Under $10,000" <?php if($row['budget_range']=='Under $10,000') echo 'selected'; ?>>Under $10,000</option>
        <option value="$10,000 - $25,000" <?php if($row['budget_range']=='$10,000 - $25,000') echo 'selected'; ?>>$10,000 - $25,000</option>
        <option value="Above $25,000" <?php if($row['budget_range']=='Above $25,000') echo 'selected'; ?>>Above $25,000</option>
      </select>
    </div>
    <div class="col">
      <select class="form-control" name="notify_via" required>
        <option value="Email" <?php if($row['notify_via']=='Email') echo 'selected'; ?>>Email</option>
        <option value="Phone" <?php if($row['notify_via']=='Phone') echo 'selected'; ?>>Phone</option>
      </select>
    </div>
  </div>
  <br>
  <div>
    <textarea class="form-control" name="message" placeholder="Message"><?php echo $row['message']; ?></textarea>
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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $destination = $_POST['desired_destination'];
    $program = $_POST['program_type'];
    $college = $_POST['college_type'];
    $budget = $_POST['budget_range'];
    $notify = $_POST['notify_via'];
    $message = $_POST['message'];

    $query = mysqli_query($conn, "UPDATE student_preferences
        SET name='$name', email='$email', phone='$phone', desired_destination='$destination', 
            program_type='$program', college_type='$college', budget_range='$budget', 
            notify_via='$notify', message='$message'
        WHERE id='$id'");

    if($query){
        echo "<h2>Your application has been updated successfully</h2>";
    } else {
        echo "Record not updated: " . mysqli_error($conn);
    }
}

if(isset($_POST['delete'])){
    $query = mysqli_query($conn, "DELETE FROM student_preferences WHERE id='$id'");
    if($query){
        echo "<h2>Application deleted successfully</h2>";
    } else {
        echo "Record not deleted: " . mysqli_error($conn);
    }
}

$conn->close();
?>
