<?php
// Include the universal header and navbar
include '../includes/header.php';
include '../includes/navbar.php';
?>

<main class="pt-20">
    <section class="bg-gray-50 py-20 font-secondary min-h-[80vh] flex items-center">
        <div class="max-w-3xl mx-auto px-6 lg:px-8 text-center w-full">
            
           <h2 class="text-4xl font-bold text-brandDark mb-4">Contact Our Experts</h2>
    
    <p class="text-gray-600 mb-10 text-lg">
        Whether it's about visas, universities, or test prep—we're here to help.
    </p>
    

            <form id="quickContactForm" action="submit_message.php" method="POST" class="bg-white p-8 md:p-10 rounded-2xl shadow-sm border border-gray-100 text-left space-y-6">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2 text-sm">Full Name</label>
                        <input type="text" id="contact_name" name="contact_name" class="w-full border-gray-300 rounded-xl shadow-sm p-3 border focus:ring-brand focus:border-brand transition" placeholder="Jane Doe">
                        <p id="contactNameError" class="text-red-500 text-xs hidden mt-2">Name is required.</p>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2 text-sm">Email Address</label>
                        <input type="email" id="contact_email" name="contact_email" class="w-full border-gray-300 rounded-xl shadow-sm p-3 border focus:ring-brand focus:border-brand transition" placeholder="jane@example.com">
                        <p id="contactEmailError" class="text-red-500 text-xs hidden mt-2">Please enter a valid email.</p>
                    </div>
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2 text-sm">Your Message</label>
                    <textarea id="contact_message" name="contact_message" rows="5" class="w-full border-gray-300 rounded-xl shadow-sm p-3 border focus:ring-brand focus:border-brand transition" placeholder="How can we help you today?"></textarea>
                    <p id="contactMessageError" class="text-red-500 text-xs hidden mt-2">Message cannot be empty.</p>
                </div>

                <button type="submit" class="w-full bg-brand text-white font-bold py-4 rounded-xl hover:scale-[1.02] hover:shadow-md transition duration-300" style="background-color: #00C4B4;">
                    Send Message
                </button>
            </form>
            
        </div>
    </section>
</main>
    <script src="../getintouch/getintouch.js"></script>


<?php
// Include the universal footer
include '../includes/footer.php';
?>