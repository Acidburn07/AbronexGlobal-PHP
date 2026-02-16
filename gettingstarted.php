

<form action="#" method="post" class="max-w-3xl mx-auto p-8 bg-white rounded-xl shadow-lg space-y-6">

  <h2 class="text-2xl font-bold text-blue-900">
    Please fill out the form. We will contact you after finding your desired choice.
  </h2>

  <!-- Full Name -->
  <div>
    <label for="name" class="block font-semibold text-blue-800">Full Name:</label>
    <input type="text" id="name" name="name" required
           class="w-full mt-1 p-2 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
  </div>

  <!-- Email -->
  <div>
    <label for="email" class="block font-semibold text-blue-800">Email Address:</label>
    <input type="email" id="email" name="email" required
           class="w-full mt-1 p-2 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
  </div>

  <!-- Phone -->
  <div>
    <label for="phone" class="block font-semibold text-blue-800">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required
           class="w-full mt-1 p-2 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
  </div>

  <!-- Target Destination -->
  <div>
    <label for="study_destination" class="block font-semibold text-blue-800">Select Your Target Destination:</label>
    <select name="study_destination" required
            class="w-full mt-1 p-2 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
      <option value="Canada">Canada</option>
      <option value="USA">USA</option>
      <option value="UK">UK</option>
      <option value="Australia">Australia</option>
      <option value="Other">Other</option>
    </select>
  </div>

  <!-- Desired Program -->
  <div>
    <label for="program_type" class="block font-semibold text-blue-800">Select Your Desired Program:</label>
    <select name="program_type" required
            class="w-full mt-1 p-2 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
      <option value="Undergraduate">Undergraduate</option>
      <option value="Post Graduate">Post Graduate</option>
      <option value="Master Degree">Masters</option>
      <option value="Test Preparation">Test Preparation</option>
      <option value="Career Counseling">Career Counseling</option>
    </select>
  </div>

  <!-- College Type -->
  <div>
    <label for="college_type" class="block font-semibold text-blue-800">Select Your Desired College Type:</label>
    <select name="college_type" required
            class="w-full mt-1 p-2 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
      <option value="public">Public University</option>
      <option value="private">Private University</option>
      <option value="community">Community College</option>
      <option value="technical">Technical / Vocational</option>
    </select>
  </div>

  <!-- Budget -->
  <div>
    <label for="tuition_fee" class="block font-semibold text-blue-800">Estimated Tuition Fee Budget:</label>
    <select name="budget_range" required
            class="w-full mt-1 p-2 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
      <option value="low">Under $10,000</option>
      <option value="medium">$10,000 to $25,000</option>
      <option value="high">Above $25,000</option>
    </select>
  </div>

  <!-- Additional Message -->
  <div>
    <label for="message" class="block font-semibold text-blue-800">Message:</label>
    <textarea id="message" name="message"
              class="w-full mt-1 p-2 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Any additional preferences or questions"></textarea>
  </div>

  <!-- Email Notifications -->
  <div class="flex items-center space-x-2">
    <input type="checkbox" name="subscribe_emails" id="subscribe_emails" checked
           class="w-4 h-4 text-blue-600 border-blue-300 rounded focus:ring-blue-500">
    <label for="subscribe_emails" class="text-blue-800">
      I want to receive email notifications when a matching college/program is found.
    </label>
  </div>

  <!-- Submit Button -->
  <div>
    <button type="submit"
            class="w-full bg-blue-600 text-white font-semibold p-3 rounded-md hover:bg-blue-700 transition">
      Submit & Get Started
    </button>
  </div>

</form>
