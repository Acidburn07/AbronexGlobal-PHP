<div class="min-h-full bg bg-brand width-full"></div>
   <h2 class="text-3xl font-bold text-center text-white-500 mb-6 font-secondary">Do you want us to Help!</h2>

<div class="min-h-screen bg-brand py-12 px-4 sm:px-6 lg:px-8 flex items-center justify-center">
    <div class="max-w-md w-full mx-auto bg-white rounded-xl shadow-2xl overflow-hidden p-8 border border-gray-100">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6 font-primary">Free Consultation Application</h2>   

        <form method="post" class="space-y-6">
            
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Your Query is Regarding:*</label>
                <select name="query" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand focus:border-brand outline-none transition-all">
                    <option value="">-- Choose Option --</option>
                    <option value="Counseling">Counseling</option>
                    <option value="IELTS/PTE">IELTS/PTE Enquiry</option>
                    <option value="Visa Process">Visa Process</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Full Name:*</label>
                <input type="text" name="name" required placeholder="John Doe"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand focus:border-brand outline-none transition-all">
            </div>

            <div class="grid grid-cols-2 gap-4 bg">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Age:*</label>
                    <input type="number" name="age" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand focus:border-brand outline-none transition-all text-gray-700">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Academic Profile:*</label>
                    <input type="text" name="academic" placeholder="e.g. 3.5 GPA" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand focus:border-brand outline-none transition-all">
                </div>
            </div>

            <div class="p-3 bg-gray-50 rounded-lg border border-gray-200">
                <span class="block text-sm font-semibold text-gray-700 mb-2">Language Test:*</span>
                <div class="flex gap-4">
                    <label class="inline-flex items-center text-sm text-gray-600">
                        <input type="radio" name="lang" value="IELTS" class="text-brand focus:ring-brand">
                        <span class="ml-2">IELTS</span>
                    </label>
                    <label class="inline-flex items-center text-sm text-gray-600">
                        <input type="radio" name="lang" value="PTE" class="text-brand focus:ring-brand">
                        <span class="ml-2">PTE</span>
                    </label>
                    <label class="inline-flex items-center text-sm text-gray-600">
                        <input type="radio" name="lang" value="None" checked class="text-brand focus:ring-brand">
                        <span class="ml-2">None</span>
                    </label>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Preferred Country:*</label>
                    <select name="country" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand outline-none">
                        <option value="Australia">Australia</option>
                        <option value="Canada">Canada</option>
                        <option value="UK">UK</option>
                        <option value="USA">USA</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Nearest Branch:*</label>
                    <select name="branch" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand outline-none">
                        <option value="Putalisadak">Putalisadak</option>
                        <option value="Butwal">Butwal</option>
                        <option value="Chitwan">Chitwan</option>
                        <option value="Pokhara">Pokhara</option>
                    </select>
                </div>
            </div>

            <div class="pt-4">
                <button type="submit" name="app_check" 
                    class="w-full bg-brand hover:bg-brandDark text-white font-bold py-3 rounded-lg shadow-lg transform active:scale-[0.98] transition-all">
                    Submit Application
                </button>
            </div>

        </form>
    </div>
</div>