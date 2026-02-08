<section class="w-full !bg-white py-12">
  <div class="max-w-7xl mx-auto px-4 md:px-10 text-center">

    <!-- Profile Image (TOP) -->
    <div class="flex justify-center mb-6 animate-top" data-animate>
      <img src="<?= asset('assets/images/profile-img.jpg'); ?>"
           alt="Shivam Singh"
           class="w-24 h-24 md:w-28 md:h-28 rounded-full object-cover shadow-md">
    </div>

    <!-- Intro (LEFT) -->
    <p class="text-white-secondary text-base md:text-lg mb-3 font-light animate-left"
       data-animate>
      Hii I'm <span class="font-medium text-red-secondary">Shivam Singh</span> 👋
    </p>

    <!-- Heading (RIGHT) -->
    <h1 class="font-serif text-4xl sm:text-5xl md:text-6xl leading-tight text-black-secondary animate-right"
        data-animate>
      Android & Web Developer <br class="hidden sm:block" />
      Based in India.
    </h1>

    <!-- Description (BOTTOM) -->
    <p class="mt-6 text-white-secondary max-w-3xl mx-auto font-light text-sm sm:text-base md:text-lg leading-relaxed animate-bottom"
       data-animate>
      I am a passionate web & android developer and cybersecurity enthusiast,
      dedicated to building scalable, efficient, and user-friendly applications
      from Bihar, India with 2 years of experience in multiple companies.
    </p>

    <!-- Buttons (BOTTOM) -->
    <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4 animate-bottom"
         data-animate>

      <a href="<?= url('contact'); ?>"
         class="group flex items-center self-center gap-2 px-6 py-3 rounded-full text-sm
                !text-white bg-red-primary/70 hover:bg-red-primary/90
                transition-all duration-300 uppercase">
        Contact Us
        <i data-lucide="arrow-right"
           class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"></i>
      </a>

      <a href="<?= asset('assets/resume/simple_Resume.pdf'); ?>"
         download
         class="group flex items-center self-center gap-2 px-6 py-3 rounded-full text-sm
                border border-black-secondary
                hover:!text-white hover:bg-black-secondary
                transition-all duration-300 uppercase">
        Download Resume
        <i data-lucide="download"
           class="w-4 h-4 transition-transform duration-300 group-hover:translate-y-0.5"></i>
      </a>

    </div>

  </div>
</section>
