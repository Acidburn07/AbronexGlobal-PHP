
<form action="#" method="post">

  <h2>Getting Started </h2>

  <!-- Full Name -->
  <label for="name">Full Name:</label><br>
  <input type="text" id="name" name="name" required><br><br>

  <!-- Email -->
  <label for="email">Email Address:</label><br>
  <input type="email" id="email" name="email" required><br><br>

  <!-- Phone -->
  <label for="phone">Phone Number:</label><br>
  <input type="tel" id="phone" name="phone" required><br><br>
   
  <label for="study_destination">Select Your Target Destination:</label><br>
  <select name="study_destination" required>
        <option value="Canada">Canada</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        <option value="Australia">Australia</option>
        <option value="Other">Other</option>
      </select> <br> <br>
 
  <label for="program_type">Select Your Desired Program:</label><br>
      <select name="program_type" required>
        <option value="Undergraduate">Undergraduate</option>
        <option value="Post Graduate">Post Graduate</option>
        <option value="Master Degree">Masters</option>
        <option value="Test Preparation">Test Preparation</option>
        <option value="Career Counseling">Career Counseling</option>
      </select> <br><br>


  <!-- Message -->
  <label for="message">Message:</label><br>
  <textarea id="message" name="message"></textarea><br><br>

  <!-- Submit -->
  <button type="submit">Submit</button>

</form>

