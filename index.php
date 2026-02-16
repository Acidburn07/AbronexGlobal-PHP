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

          <p class="text-xl text-gray-600 mb-8 font-secondary max-w-xl">
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
            <img src="assets/images/Abronex_Global_Logo.png" alt="Study Abroad Destination" class="hero-image" />
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
            <h3 class="text-2xl font-bold text-brandDark mb-2">College Admissions</h3>
            <p class="text-gray-600 font-secondary">From selection to acceptance.</p>
          </div>
          <div class="service-card p-6 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <h3 class="text-2xl font-bold text-brandDark mb-2">Test Preparation</h3>
            <p class="text-gray-600 font-secondary">SAT, ACT, GRE, GMAT & more.</p>
          </div>
          <div class="service-card p-6 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <h3 class="text-2xl font-bold text-brandDark mb-2">Career Counseling</h3>
            <p class="text-gray-600 font-secondary">Professional career guidance.</p>
          </div>
          <div class="service-card p-6 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <h3 class="text-2xl font-bold text-brandDark mb-2">Goal Planning</h3>
            <p class="text-gray-600 font-secondary">Structured success roadmap.</p>
          </div>
          <div class="service-card p-6 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <h3 class="text-2xl font-bold text-brandDark mb-2">Essay Writing</h3>
            <p class="text-gray-600 font-secondary">Stand-out personal statements.</p>
          </div>
          <div class="service-card md:col-span-2 p-6 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <h3 class="text-2xl font-bold text-brandDark mb-2">Mentorship Program</h3>
            <p class="text-gray-600 font-secondary">1-on-1 guidance from experts.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- Adding Status Section -->
<section class="py-20 bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 text-center">
  <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">

    <!-- Students Guided -->
    <div>
      <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-xl bg-white/10 text-teal-400 text-2xl">
        <i class="fa fa-user"></i>
      </div>
      <h3 class="text-4xl font-bold text-white">5000+</h3>
      <p class="text-blue-200 mt-2">Students Guided</p>
    </div>

    <!-- Success Rate -->
    <div>
      <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-xl bg-white/10 text-teal-400 text-2xl">
        <i class="fa fa-check-circle"></i>
      </div>
      <h3 class="text-4xl font-bold text-white">98%</h3>
      <p class="text-blue-200 mt-2">Success Rate</p>
    </div>

    <!-- Country Reach -->
    <div>
      <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-xl bg-white/10 text-teal-400 text-2xl">
        <i class="fa fa-globe"></i>
      </div>
      <h3 class="text-4xl font-bold text-white">45%</h3>
      <p class="text-blue-200 mt-2">Country Reach</p>
    </div>

    <!-- Years Experience -->
    <div>
      <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center rounded-xl bg-white/10 text-teal-400 text-2xl">
        <i class="fa fa-chart-line"></i>
      </div>
      <h3 class="text-4xl font-bold text-white">15+</h3>
      <p class="text-blue-200 mt-2">Years Experience</p>
    </div>

  </div>
</section>


</main>

<?php
// Added the universal footer
include 'includes/footer.php';
?>