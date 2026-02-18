<?php
// Include database connection
include 'db.php';

// Get the ID from URL
$id = $_GET['id'];

// Fetch existing record
$result = mysqli_query($conn, "SELECT * FROM student_application WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
?>

<h2>Update Application</h2>

<form method="POST">

  <label>Full Name:</label><br>
  <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>" required><br><br>

  <label>Academic Profile:</label><br>
  <input type="text" name="academic_profile" value="<?php echo $row['academic_profile']; ?>" required><br><br>

  <label>Language Test:</label><br>
  <input type="radio" name="language_test" value="IELTS" <?php if($row['language_test']=='IELTS') echo 'checked'; ?>> IELTS
  <input type="radio" name="language_test" value="PTE" <?php if($row['language_test']=='PTE') echo 'checked'; ?>> PTE
  <input type="radio" name="language_test" value="None" <?php if($row['language_test']=='None') echo 'checked'; ?>> None
  <br><br>

  <label>Preferred Country:</label><br>
  <select name="preferred_country" required>
    <option value="Australia" <?php if($row['preferred_country']=='Australia') echo 'selected'; ?>>Australia</option>
    <option value="USA" <?php if($row['preferred_country']=='USA') echo 'selected'; ?>>USA</option>
    <option value="UK" <?php if($row['preferred_country']=='UK') echo 'selected'; ?>>UK</option>
  </select><br><br>

  <label>Nearest Branch:</label><br>
  <select name="nearest_branch" required>
    <option value="Putalisadak" <?php if($row['nearest_branch']=='Putalisadak') echo 'selected'; ?>>Putalisadak</option>
    <option value="Butwal" <?php if($row['nearest_branch']=='Butwal') echo 'selected'; ?>>Butwal</option>
    <option value="Chitwan" <?php if($row['nearest_branch']=='Chitwan') echo 'selected'; ?>>Chitwan</option>
    <option value="Pokhara" <?php if($row['nearest_branch']=='Pokhara') echo 'selected'; ?>>Pokhara</option>
  </select><br><br>

  <input type="checkbox" name="consent" value="1" <?php if($row['consent']==1) echo 'checked'; ?> required>
  I agree to Terms & Conditions<br><br>

  <button type="submit" name="update">Update Application</button>
  <button type="submit" name="delete" style="background:red;color:white;">Delete Application</button>
</form>

<?php
// UPDATE
if (isset($_POST['update'])) {

    $fullname          = $_POST['fullname'];
    $academic_profile  = $_POST['academic_profile'];
    $language_test     = $_POST['language_test'];
    $preferred_country = $_POST['preferred_country'];
    $nearest_branch    = $_POST['nearest_branch'];
    $consent           = isset($_POST['consent']) ? 1 : 0;

    $query = mysqli_query($conn, "UPDATE student_application SET
        fullname='$fullname',
        academic_profile='$academic_profile',
        language_test='$language_test',
        preferred_country='$preferred_country',
        nearest_branch='$nearest_branch',
        consent='$consent'
        WHERE id='$id'
    ");

    if($query){
        echo "<p style='color:green;'>Application updated successfully.</p>";
    } else {
        echo "<p style='color:red;'>Update failed: " . mysqli_error($conn) . "</p>";
    }
}

// DELETE
if (isset($_POST['delete'])) {
    $query = mysqli_query($conn, "DELETE FROM student_application WHERE id='$id'");

    if($query){
        echo "<p style='color:red;'>Application deleted successfully.</p>";
    } else {
        echo "<p style='color:red;'>Delete failed: " . mysqli_error($conn) . "</p>";
    }
}

$conn->close();
?>
