<!-- HEADER -->
<header class="fixed top-0 left-0 w-full bg-white shadow z-50">

  <div class="flex items-center justify-center text-center bg-red-primary/80 text-white p-2 overflow-hidden h-10 text-xs md:text-sm">
    <p id="announcementText"
      class="transition-all duration-500 translate-y-6 opacity-0">
    </p>
  </div>

  <div class="h-18 md:h-20 flex items-center justify-between px-4 md:px-[5%] py-3">

    <!-- Logo -->
    <a href="<?= url(''); ?>">
      <img src="<?= asset('public/logo.png'); ?>" alt="Websolvit" class="h-10 md:h-12">
    </a>

    <!-- Desktop Navigation Menu Section Start -->
    <?php include 'nav_menu.php' ?>
    <!-- Desktop Navigation Menu Section End-->

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