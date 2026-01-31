<!-- HEADER -->
<header class="fixed top-0 left-0 w-full bg-white shadow z-50">

  <div class="flex items-center justify-center text-center bg-red-primary text-white p-2 overflow-hidden h-10 text-xs md:text-base">
    <p id="announcementText"
      class="transition-all duration-500 translate-y-6 opacity-0">
    </p>
  </div>

  <div class="h-18 md:h-20 flex items-center justify-between px-4 md:px-[5%] py-3">

    <!-- Logo -->
    <a href="<?= url('/'); ?>">
      <img src="<?= asset('assets/logo.png'); ?>" alt="Websolvit" class="h-10 md:h-12">
    </a>

    <!-- Menu -->
    <nav class="hidden lg:flex items-center gap-10 text-sm font-medium text-black-secondary">

      <a href="<?= url('/'); ?>" class="hover:text-white-secondary">Home</a>

      <!-- Services -->
      <div class="group">
        <button class="flex items-center gap-1 group-hover:text-white-secondary">
          Services
          <i data-lucide="chevron-down" class="w-4 h-4 text-white-secondary group-hover:text-black-secondary"></i>
        </button>

        <!-- Mega Menu -->
        <div class="absolute left-0 top-30 w-screen bg-white border-b opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-40">

          <div class="max-w-7xl mx-auto px-10 py-12">
            <div class="grid grid-cols-12 gap-12">

              <!-- LEFT -->
              <div class="col-span-8 grid grid-cols-3 gap-10">

                <div>
                  <h4 class="font-semibold mb-3">SEO & Growth</h4>
                  <ul class="space-y-2 text-sm text-gray-600">
                    <li>Search Engine Optimization</li>
                    <li>Local SEO</li>
                    <li>Website Audit</li>
                  </ul>
                </div>

                <div>
                  <h4 class="font-semibold mb-3">Paid Marketing</h4>
                  <ul class="space-y-2 text-sm text-gray-600">
                    <li>Google Ads</li>
                    <li>Meta Ads (Facebook & Instagram)</li>
                    <li>Lead Generation Campaigns</li>
                  </ul>
                </div>

                <div>
                  <h4 class="font-semibold mb-3">Social & Content</h4>
                  <ul class="space-y-2 text-sm text-gray-600">
                    <li>Social Media Marketing</li>
                    <li>Content Marketing</li>
                    <li>Brand Strategy</li>
                  </ul>
                </div>

              </div>

              <!-- RIGHT -->
              <div class="col-span-4 grid grid-cols-2 gap-6">

                <div class="border rounded-xl overflow-hidden">
                  <img src="/images/feature1.jpg" class="h-32 w-full object-cover">
                  <div class="p-3 text-xs">
                    <p class="font-semibold">High ROI</p>
                    <p class="text-gray-500">Performance Marketing</p>
                  </div>
                </div>

                <div class="border rounded-xl overflow-hidden">
                  <img src="/images/feature2.jpg" class="h-32 w-full object-cover">
                  <div class="p-3 text-xs">
                    <p class="font-semibold">Growth Focused</p>
                    <p class="text-gray-500">Digital Strategies</p>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Our Work -->
      <a href="<?= url('projects'); ?>" class="hover:text-white-secondary">Our Work</a>

      <!-- More -->
      <div class="group">
        <button class="flex items-center gap-1 group-hover:text-white-secondary">
          More
          <i data-lucide="chevron-down" class="w-4 h-4 text-white-secondary group-hover:text-black-secondary"></i>
        </button>

        <div class="absolute left-0 top-30 w-screen bg-white border-b opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-40">
          <div class="max-w-7xl mx-auto px-10 py-12">
            <div class="grid grid-cols-3 gap-10 text-sm text-gray-600">

              <a href="<?= url('about'); ?>">About Websolvit</a>
              <a href="<?= url('blog'); ?>">Blog & Insights</a>
              <a href="<?= url('careers'); ?>">Careers</a>
              <a href="<?= url('pricing'); ?>">Pricing</a>
              <a href="<?= url('testimonials'); ?>">Client Testimonials</a>
              <a href="<?= url('contact'); ?>">Contact Us</a>

            </div>
          </div>
        </div>
      </div>

      <!-- Help -->
      <a href="<?= url('support'); ?>" class="hover:text-white-secondary">Support</a>

    </nav>

    <!-- Right -->
    <div class="flex items-center gap-4 text-sm text-nowrap">
      <a href="<?= url('contact'); ?>"
        class="group flex items-center gap-2 px-5 md:px-6 py-3 rounded-full !text-white
               bg-[#0A66C2] hover:bg-[#0A66C2]/90 transition-all duration-300">
        <span class="text-xs">GET A QUOTE</span>
        <i data-lucide="arrow-right"
          class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"></i>
      </a>
    </div>

  </div>
</header>
<script>
  const announcements = [
    // General
    "Grow Your Business with Websolvit",
    "Result-Driven Digital Marketing Agency",

    // Offers
    "🎉 New Client Offer: Get Free Strategy Call",
    "🔥 Flat 20% OFF on Digital Marketing Services",

    // Festivals / Occasions
    "🪔 Diwali Special Marketing Packages Available",
    "🎄 Christmas Campaigns Now Live",
    "🎊 New Year Growth Plans for 2026",

    // Launch / Updates
    "🚀 Now Offering AI-Powered Marketing Solutions",
    "📈 Boost Leads, Traffic & Conversions Faster"
  ];

  let index = 0;
  const textEl = document.getElementById("announcementText");

  function showNextText() {
    // Move up & fade out
    textEl.classList.add("translate-y-6", "opacity-0");

    setTimeout(() => {
      textEl.textContent = announcements[index];
      index = (index + 1) % announcements.length;

      // Reset position
      textEl.classList.remove("translate-y-6");
      textEl.classList.add("-translate-y-6");

      requestAnimationFrame(() => {
        textEl.classList.remove("-translate-y-6", "opacity-0");
        textEl.classList.add("translate-y-0", "opacity-100");
      });
    }, 300);
  }

  showNextText();
  setInterval(showNextText, 3000);
</script>