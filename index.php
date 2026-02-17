<?php
// Added the universal header
include 'includes/header.php';

// Added the Navigation Bar
include 'includes/navbar.php';
?>

<main class="pt-20"> <section id="home" class="relative min-h-screen pt-10 bg-gradient-to-br from-[#00C4B4]/10 to-white flex items-center">
      <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

       <div>
          <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-white/80 rounded-full shadow font-secondary text-sm">
            ⭐ Trusted by <strong>5,000+</strong> Students Worldwide
          </div>

          <h1 class="text-5xl lg:text-6xl font-bold text-brandDark mb-6 leading-tight">
            Study Abroad <br />
            Made <span class="text-brand">Simple</span>
          </h1>

          <p class="text-xl text-gray-600 mb-8 font-secondary text-justify">
            A one-stop solution for all your educational needs from English language test preparation to visa applications, we have got you covered. With our expert guidance and personalized approach, we make your study abroad journey seamless and successful.
          </p>

          <div class="flex gap-4">
            <a href="#services" class="px-8 py-4 bg-brand text-white rounded-xl shadow hover:scale-105 transition">
              Explore Services
            </a>

            <a href="#contact" class="px-8 py-4 border border-brand text-brand rounded-xl hover:bg-brand hover:text-white transition">
              Free Consultation
            </a>
          </div>
        </div>

        <div class="flex justify-center lg:justify-end">
          <div class="hero-image-wrapper">
            <img src="assets/images/Australia Opera House.jpg" alt="Study Abroad Destination" class="hero-image" />
          </div>
        </div>

      </div>
    </section>

    <section id="services" class="relative py-20 lg:py-32 bg-gradient-to-b from-white to-gray-50">
      <div class="max-w-7xl mx-auto px-6 lg:px-8">
        
        <div class="text-center mb-16">
          <div class="inline-flex px-4 py-2 bg-brand/10 rounded-full mb-4">
            <span class="text-sm font-semibold text-brand">OUR SERVICES</span>
          </div>
          <h2 class="text-4xl lg:text-5xl font-bold text-brandDark mb-4">
            Comprehensive Educational Solutions
          </h2>
          <p class="text-xl text-gray-600 max-w-2xl mx-auto font-secondary">
            From college applications to career planning, we provide end-to-end support.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="service-card md:col-span-2 p-6 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <img src="assets/Admission.png" alt="Collage Admission" class="hero-image w-10" />
            <h3 class="text-2xl font-bold text-brandDark mb-2">College Admissions</h3>
            <p class="text-gray-600 font-secondary">Expert guidance through the entire college application process, from school selection to acceptance</p>
             <div class="tag flex gap-2">
                <span class="px-3 py-1 bg-gray-200 text-black  rounded-xl shadow hover:scale-105 transition">School Selection</span>
                <span class="px-3 py-1 bg-gray-200 text-black  rounded-xl shadow hover:scale-105 transition">Application Strategy</span>
                <span class="px-3 py-1 bg-gray-200 text-black  rounded-xl shadow hover:scale-105 transition">Essay Editing</span>
                <span class="px-3 py-1 bg-gray-200 text-black  rounded-xl shadow hover:scale-105 transition">Interview Preparation</span>
            </div>
          </div>
          <div class="service-card p-6 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <img src="assets/Test.png" alt="Collage Admission" class="hero-image w-10" />
            <h3 class="text-2xl font-bold text-brandDark mb-2">Test Preparation</h3>
            <p class="text-gray-600 font-secondary">SAT, ACT, GRE, GMAT & more.</p>
            <div class="tags flex gap-2">
                <span class="px-3 py-1 bg-gray-200 text-black rounded-xl shadow hover:scale-105 transition whitespace-nowrap">Personalized plans</span>
                <span class="px-3 py-1 bg-gray-200 text-black rounded-xl shadow hover:scale-105 transition whitespace-nowrap">Practice Tests</span>
                <span class="px-3 py-1 bg-gray-200 text-black rounded-xl shadow hover:scale-105 transition whitespace-nowrap">Score Analysis</span>
            </div>
          </div>
          <div class="service-card p-6 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <img src="assets/carrer.png" class="hero-image w-10" />
            <h3 class="text-2xl font-bold text-brandDark mb-2">Career Counseling</h3>
            <p class="text-gray-600 font-secondary">Navigate your carrer path with professional guidance and industry insights.</p>
            <div class="tags flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-gray-200 text-black rounded-xl shadow hover:scale-105 transition whitespace-nowrap">Carrer Assessment </span>
                <span class="px-3 py-1 bg-gray-200 text-black rounded-xl shadow hover:scale-105 transition whitespace-nowrap">Resume Building</span>
                <span class="px-3 py-1 bg-gray-200 text-black rounded-xl shadow hover:scale-105 transition whitespace-nowrap">Interview Skills</span>
            </div>
          </div>
          <div class="service-card p-6 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <img src="assets/goal.png" class="hero-image w-10" />
            <h3 class="text-2xl font-bold text-brandDark mb-2">Goal Planning</h3>
            <p class="text-gray-600 font-secondary">Set and achieve your academic and professional goals with structured planning.</p>
            <div class="tags flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-gray-200 text-black rounded-xl shadow hover:scale-105 transition whitespace-nowrap">Milestone tracking</span>
                <span class="px-3 py-1 bg-gray-200 text-black rounded-xl shadow hover:scale-105 transition whitespace-nowrap">Progress Reports</span>
                <span class="px-3 py-1 bg-gray-200 text-black rounded-xl shadow hover:scale-105 transition whitespace-nowrap">Strategy Sessions</span>
            </div>
          </div>
          <div class="service-card p-6 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <img src="assets/essay.png" class="hero-image w-10" />
            <h3 class="text-2xl font-bold text-brandDark mb-2">Essay Writing</h3>
            <p class="text-gray-600 font-secondary">Craft compelling personal statements and essays that stands out of admissions officers.</p>
             <div class="tags flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-gray-200 text-black rounded-xl shadow hover:scale-105 transition whitespace-nowrap">personal Statements</span>
                <span class="px-3 py-1 bg-gray-200 text-black rounded-xl shadow hover:scale-105 transition whitespace-nowrap">Supplement Essays</span>
                <span class="px-3 py-1 bg-gray-200 text-black rounded-xl shadow hover:scale-105 transition whitespace-nowrap">Unlimited Revisions</span>
            </div>
          </div>
          <div class="service-card md:col-span-2 p-6 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <img src="assets/mentorship.png" class="hero-image w-10" />
            <h3 class="text-2xl font-bold text-brandDark mb-2">Mentorship Program</h3>
            <p class="text-gray-600 font-secondary">One-on-one mentorship with experienced professionals and alumni from top universities.</p>
            <div class="tags flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-gray-200 text-black rounded-xl shadow hover:scale-105 transition whitespace-nowrap">Weekly Sessions</span>
                <span class="px-3 py-1 bg-gray-200 text-black rounded-xl shadow hover:scale-105 transition whitespace-nowrap">Expert mentors</span>
                <span class="px-3 py-1 bg-gray-200 text-black rounded-xl shadow hover:scale-105 transition whitespace-nowrap">Peer Networks</span>
            </div>
          </div>
        </div>

      </div>
    </section>


  <!-- FAQ Section -->
<section id="faq" class="py-20 bg-white">
  <div class="text-center max-w-7xl mx-auto px-6 lg:px-8">


    
    <div class="inline-flex px-4 py-2 bg-brand/10 rounded-full mb-4">
      <span class="text-sm font-semibold text-brand">
        FAQ
      </span>
    </div>

    
    <h2 class="text-2xl font-semibold text-gray-900 mb-10">
      Frequently Asked Questions
    </h2>

    <!-- questions -->
    <div class="space-y-4 max-w-3xl mx-auto text-left">
      <p class="text-lg font-medium text-gray-800">
        What makes Abronex Global different from other consulting services?
      </p>

      <p class="text-lg font-medium text-gray-800">
        When should I work with a college admissions consultant?
      </p>

      <p class="text-lg font-medium text-gray-800">
        How do your test preparation programs work?
      </p>

      <p class="text-lg font-medium text-gray-800">
        What is your success rate?
      </p>

      <p class="text-lg font-medium text-gray-800">
        Do you offer financial aid and scholarship guidance?
      </p>

      
      <p class="text-lg font-medium text-gray-800">
        Can you help with international university applications?
      </p>
    </div>

  </div>
</section>


<!--Added Get in touch Section-->

<section class="py-16 bg-white/5 text-center font-secondary border-t border-gray-100">
      <div class="max-w-3xl mx-auto px-6">
        <h2 class="text-2xs text-black opacity-60 mb-4">Still have questions?</h2>
        
        <a href="getintouch/getintouch.php" class="inline-block px-8 py-3 bg-[#15366b] text-white font-Regular rounded-3xl shadow-md hover:scale-105 hover:bg-brand transition duration-300">
          Get in Touch
        </a>
      </div>
    </section>
    
</main>

<?php
// Added the universal footer
include 'includes/footer.php';
?>