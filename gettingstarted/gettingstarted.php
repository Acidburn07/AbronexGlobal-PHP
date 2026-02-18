<?php
// Added the universal header
include '../includes/header.php';

?>


<section class="bg-blue-70 py-16 px-4">

  <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-xl p-10 border border-blue-100">

    <p class="text-center text-blue-900 mb-10">
      Tell us your preferences and we will notify you when we find the perfect college for you.
    </p>
   
   <form name="myForm" action="process.php" method="post" onsubmit="return validateForm()" class="space-y-6">

      <!-- Full Name -->
      <div>
        <label class="block font-semibold text-blue-500">Full Name:</label>
        <input type="text" name="name" required
        class="w-full mt-2 p-3 border border-blue-200 rounded-lg ">
      </div>

      <!-- Email -->
      <div>
        <label class="block font-semibold text-blue-500">Email Address:</label>
        <input type="email" name="email" required
        class="w-full mt-2 p-3 border border-blue-200 rounded-lg ">
      </div>

      <!-- Phone -->
      <div>
        <label class="block font-semibold text-blue-500">Phone Number:</label>
        <input type="tel" name="phone" required
        class="w-full mt-2 p-3 border border-blue-200 rounded-lg ">
      </div>

      <!-- Target Destination -->
      <div>
        <label class="block font-semibold text-blue-500">Target Destination:</label>
        <select name="study_destination" required
        class="w-full mt-2 p-3 border border-blue-200 rounded-lg ">
        <option>Select an option</option>
         <option>Canada</option>
          <option>USA</option>
          <option>UK</option>
          <option>Australia</option>
          <option>Other</option>
        </select>
      </div>

      <!-- Desired Program -->
      <div>
        <label class="block font-semibold text-blue-500">Desired Program:</label>
        <select name="program_type" required
        class="w-full mt-2 p-3 border border-blue-200 rounded-lg ">
         <option>Select an option</option>
         <option>Undergraduate</option>
         <option> Bachelor</option>
          <option>Post Graduate</option>
          <option>Masters</option>
        </select>
      </div>

      <!-- College Type -->
      <div>
        <label class="block font-semibold text-blue-500">College Type:</label>
        <select name="college_type" required
        class="w-full mt-2 p-3 border border-blue-200 rounded-lg ">
          <option>Select an option</option>
         <option>Public University</option>
          <option>Private University</option>
          <option>Community College</option>
          <option>Technical / Vocational</option>
        </select>
      </div>

      <!-- Budget -->
      <div>
        <label class="block font-semibold text-blue-500">Estimated Tuition Budget:</label>
        <select name="budget_range" required
        class="w-full mt-2 p-3 border border-blue-200 rounded-lg ">
          <option>Select an option</option>
          <option>Under $10,000</option>
          <option>$10,000 - $25,000</option>
          <option>Above $25,000</option>
        </select>
      </div>

      <!-- Notify Via -->
      <div>
        <label class="block font-semibold text-blue-500">Notify Via:</label>
        <select name="Notify_via" required
        class="w-full mt-2 p-3 border border-blue-200 rounded-lg ">
         <option>Select an option</option>
         <option>Email</option>
          <option>Phone</option>
        </select>
      </div>

      <!-- Message -->
      <div>
        <label class="block font-semibold text-blue-500">Message:</label>
        <textarea name="message"
        class="w-full mt-2 p-3 border border-blue-200 rounded-lg "
        placeholder="Further information/Interest"></textarea>
      </div>

      <!-- Submit -->
      <button type="submit" name="submit"
      class="w-full bg-blue-700 text-white font-semibold p-3 rounded-lg ">
        Submit 
      </button>

    </form>

    <script>
   
  function validateForm() {

  
  let destination = document.forms["myForm"]["study_destination"].value;
  let program = document.forms["myForm"]["program_type"].value;
  let college = document.forms["myForm"]["college_type"].value;
  let budget = document.forms["myForm"]["budget_range"].value;
  let notify = document.forms["myForm"]["Notify_via"].value;

  if (destination == "Select an option") {
    alert("Please select study destination");
    return false;
  }

  if (program == "Select an option") {
    alert("Please select program type");
    return false;
  }

  if (college == "Select an option") {
    alert("Please select college type");
    return false;
  }

  if (budget == "Select an option") {
    alert("Please select budget range");
    return false;
  }

  if (notify == "Select an option") {
    alert("Please select notification method");
    return false;
  }

}
</script>


  </div>

</section>
