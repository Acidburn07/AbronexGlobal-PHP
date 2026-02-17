<?php
// Added the universal header
include 'includes/header.php';

?>


<section class="bg-blue-70 py-16 px-4">

  <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-xl p-10 border border-blue-100">

    <p class="text-center text-blue-900 mb-10">
      Tell us your preferences and we will notify you when we find the perfect college for you.
    </p>

    <form action="#" method="post" class="space-y-6">

      <!-- Full Name -->
      <div>
        <label class="block font-semibold text-blue-500">Full Name:</label>
        <input type="text" name="name" required
        class="w-semi mt-2 p-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Email -->
      <div>
        <label class="block font-semibold text-blue-500">Email Address:</label>
        <input type="email" name="email" required
        class="w-semi mt-2 p-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Phone -->
      <div>
        <label class="block font-semibold text-blue-500">Phone Number:</label>
        <input type="tel" name="phone" required
        class="w-semi mt-2 p-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Target Destination -->
      <div>
        <label class="block font-semibold text-blue-500">Target Destination:</label>
        <select name="study_destination" required
        class="w-semi mt-2 p-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
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
        class="w-semi mt-2 p-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
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
        class="w-semi mt-2 p-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
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
        class="w-semi mt-2 p-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
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
        class="w-semi mt-2 p-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
         <option>Select an option</option>
         <option>Email</option>
          <option>Phone</option>
        </select>
      </div>

      <!-- Message -->
      <div>
        <label class="block font-semibold text-blue-500">Message:</label>
        <textarea name="message"
        class="w-full mt-2 p-3 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        placeholder="Further information/Interest"></textarea>
      </div>

      <!-- Submit -->
      <button type="submit"
      class="w-full bg-blue-700 text-white font-semibold p-3 rounded-lg hover:bg-blue-800 transition duration-300 shadow-md">
        Submit 
      </button>

    </form>

  </div>

</section>
