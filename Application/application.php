<?php
$title = "Application Form";
?>

<script src="https://cdn.tailwindcss.com"></script>

<div class="min-h-screen bg-gray-100 py-12 px-4 flex items-center justify-center">
    <div class="max-w-md w-full bg-white rounded-lg shadow-md p-8 border border-gray-200">

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-8"><?php echo $title; ?></h2>

       <form name="applicationForm" method="post" action="process.php" onsubmit="return validateForm()" class="space-y-5">

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Your Query is Regarding:*</label>
                <select name="query" required class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 outline-none">
                    <option value="">-- Choose Option --</option>
                    <option value="Counseling">Counseling</option>
                    <option value="IELTS/PTE">IELTS/PTE Enquiry</option>
                    <option value="Visa Process">Visa Process</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name:*</label>
                <input type="text" name="fullname" required placeholder="John Doe"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 outline-none">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Academic Profile:*</label>
                    <input type="text" name="academic_profile" placeholder="e.g. 3.5 GPA" required
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 outline-none">
                </div>
            </div>

            <div class="p-3 bg-gray-50 rounded border border-gray-200">
                <span class="block text-sm font-medium text-gray-700 mb-2">Language Test:*</span>
                <div class="flex gap-4">
                    <label class="inline-flex items-center text-sm">
                        <input type="radio" name="language_test" value="IELTS" class="text-blue-600">
                        <span class="ml-2">IELTS</span>
                    </label>
                    <label class="inline-flex items-center text-sm">
                        <input type="radio" name="language_test" value="PTE" class="text-blue-600">
                        <span class="ml-2">PTE</span>
                    </label>
                    <label class="inline-flex items-center text-sm">
                        <input type="radio" name="language_test" value="None" checked class="text-blue-600">
                        <span class="ml-2">None</span>
                    </label>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Preferred Country:*</label>
                    <select name="preferred_country" required class="w-full px-3 py-2 border border-gray-300 rounded outline-none">
                        <option value="Australia">Australia</option>
                        <option value="Canada">Canada</option>
                        <option value="UK">UK</option>
                        <option value="USA">USA</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nearest Branch:*</label>
                    <select name="nearest_branch" required class="w-full px-3 py-2 border border-gray-300 rounded outline-none">
                        <option value="Putalisadak">Putalisadak</option>
                        <option value="Butwal">Butwal</option>
                        <option value="Chitwan">Chitwan</option>
                        <option value="Pokhara">Pokhara</option>
                    </select>
                </div>
            </div>

            <div class="pt-4">
                <div class="mb-4 text-sm text-gray-600">
                    <label class="flex items-start gap-2 cursor-pointer">
                        <input type="checkbox" name="consent" value="1" required class="mt-1">
                        <span>
                            I have read and agree to the
                            <a href="#terms" target="_blank" class="text-brand underline">Terms & Conditions</a> and
                            <a href="#privacy" target="_blank" class="text-brand underline">Privacy Policy</a>.
                        </span>
                    </label>
                </div>
                <button type="submit" name="submit"
                    class="w-full bg-[#00C4B4] hover:bg-[#00C4B4] text-white font-semibold py-2 rounded transition-colors">
                    Submit Application
                </button>
            </div>

            <script>
 function validateForm() {
   
    let query = document.forms["applicationForm"]["query"].value;
    let country = document.forms["applicationForm"]["preferred_country"].value;
    let branch = document.forms["applicationForm"]["nearest_branch"].value;
    let consent = document.forms["applicationForm"]["consent"].checked;

    
    if (query == "" || query == "-- Choose Option --") {
        alert("Please select what your query is regarding.");
        return false;
    }

    if (country == "") {
        alert("Please select your preferred study destination.");
        return false;
    }

    if (branch == "") {
        alert("Please select the nearest branch to you.");
        return false;
    }

    if (!consent) {
        alert("You must agree to the Terms and Conditions to proceed.");
        return false;
    }

    return true; 
}
</script>

        </form>
    </div>
</div>



