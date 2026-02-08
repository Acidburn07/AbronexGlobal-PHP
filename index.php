
<?php
include 'includes/header.php';
include 'includes/footer.php';
include 'includes/navbar.php';
?>

<!-- HERO SECTION  -->
<section
  id="home"
  class="relative min-h-screen pt-28 bg-gradient-to-br from-[#00C4B4]/10 to-white flex items-center"
>
  <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

   <!--Text Part-->
    <div>
      <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-white/80 rounded-full shadow font-secondary text-sm">
        ⭐ Trusted by <strong>5,000+</strong> Students Worldwide
      </div>

      <h1 class="text-5xl lg:text-6xl font-bold text-brandDark mb-6 leading-tight">
        Study Abroad <br />
        Made <span class="text-brand">Simple</span>
      </h1>

      <p class="text-xl text-gray-600 mb-8 font-secondary max-w-xl">
        Expert guidance for admissions, test prep, and global education pathways.
      </p>

      <div class="flex gap-4">
        <a
          href="#services"
          class="px-8 py-4 bg-brand text-white rounded-xl shadow hover:scale-105 transition"
        >
          Explore Services
        </a>
        <a
          href="#contact"
          class="px-8 py-4 border border-brand text-brand rounded-xl hover:bg-brand hover:text-white transition"
        >
          Free Consultation
        </a>
      </div>
    </div>

    <!--Image Part-->
    <div class="flex justify-center lg:justify-end">
      <div class="hero-image-wrapper">
        <img
          src="assets/images/Australia Opera House.jpg"
          alt="Study Abroad Destination"
          class="hero-image"
        />
      </div>
    </div>

  </div>
</section>


<!--Our Service Section-->

<section id="services" class="relative py-20 lg:py-32 bg-gradient-to-b from-white to-gray-50">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">

    <!-- Header -->
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

    <!-- Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

      <div class="service-card md:col-span-2">
        <h3 class="text-2xl font-bold text-brandDark mb-2">College Admissions</h3>
        <p class="text-gray-600 font-secondary">From selection to acceptance.</p>
      </div>

      <div class="service-card">
        <h3 class="text-2xl font-bold text-brandDark mb-2">Test Preparation</h3>
        <p class="text-gray-600 font-secondary">SAT, ACT, GRE, GMAT & more.</p>
      </div>

      <div class="service-card">
        <h3 class="text-2xl font-bold text-brandDark mb-2">Career Counseling</h3>
        <p class="text-gray-600 font-secondary">Professional career guidance.</p>
      </div>

      <div class="service-card">
        <h3 class="text-2xl font-bold text-brandDark mb-2">Goal Planning</h3>
        <p class="text-gray-600 font-secondary">Structured success roadmap.</p>
      </div>

      <div class="service-card">
        <h3 class="text-2xl font-bold text-brandDark mb-2">Essay Writing</h3>
        <p class="text-gray-600 font-secondary">Stand-out personal statements.</p>
      </div>

      <div class="service-card md:col-span-2">
        <h3 class="text-2xl font-bold text-brandDark mb-2">Mentorship Program</h3>
        <p class="text-gray-600 font-secondary">1-on-1 guidance from experts.</p>
      </div>

    </div>
  </div>

