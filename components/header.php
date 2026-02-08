<header id="header" class="w-full transition-all duration-300 border-t-4 border-red-primary/90">
  <!-- Main Navbar -->
  <div class="max-w-7xl mx-auto flex items-center justify-between md:py-4 p-6">

    <!-- Logo -->
    <a href="/">
      <img src="<?= asset('public/logo.png'); ?>" alt="Synoize" class="h-8">
    </a>

    <!-- Desktop Menu -->
    <nav class="hidden md:flex items-center gap-8 bg-white-secondary/5 text-black-secondary backdrop-blur-xl uppercase px-10 py-3 text-sm rounded-full shadow">
      <!-- Navigation Menu Start -->
      <?php include 'nav_menu.php' ?>
      <!-- Navigation Menu End-->
    </nav>

    <!-- Contact Button -->
    <a href="<?= url('contact'); ?>"
      class="group hidden md:flex items-center self-center gap-2 px-6 py-3 rounded-full text-xs border border-black-secondary  text-black-secondary hover:bg-black-secondary hover:!text-white transition-all duration-300 uppercase">
      Contact Us
      <i data-lucide="arrow-right"
        class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"></i>
    </a>

    <!-- Mobile Menu Button -->
    <button class="md:hidden text-2xl" onclick="openMenu()"><i data-lucide="menu" class="text-black-secondary"></i></button>
  </div>
</header>

<!-- Spacer (prevents jump when header becomes fixed) -->
<div id="headerSpacer"></div>

<!-- Overlay -->
<div id="overlay"
  onclick="closeMenu()"
  class="fixed inset-0 bg-black-secondary/40 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300 z-40">
</div>

<!-- Mobile Slide Menu -->
<div id="mobileMenu"
  class="fixed top-0 left-0 h-full w-72 !bg-white z-50
            -translate-x-full transition-transform duration-300 ease-in-out
            shadow-xl">

  <div class="p-6 flex items-center justify-between border-b">
    <span>
      <img src="<?= asset('public/logo.png'); ?>" alt="Synoize" class="h-8">
    </span>
    <button onclick="closeMenu()" class="text-2xl">
      <i data-lucide="x" class="text-black-secondary"></i>
    </button>
  </div>

  <nav class="p-6 flex flex-col gap-5 justify-start items-start text-black-secondary uppercase">
    <!-- Navigation Menu Start -->
    <?php include 'nav_menu.php' ?>
    <!-- Navigation Menu End-->

     <!-- Contact Button -->
    <a href="<?= url('contact'); ?>"
      class="group inline-flex items-center self-center gap-2 px-6 py-3 mt-12 rounded-full text-xs border border-black-secondary  text-black-secondary hover:bg-black-secondary hover:!text-white transition-all duration-300 uppercase">
      Contact Us
      <i data-lucide="arrow-right"
        class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"></i>
    </a>
  </nav>
</div>

<!-- Scripts -->
<script>
  const menu = document.getElementById("mobileMenu");
  const overlay = document.getElementById("overlay");
  const header = document.getElementById("header");
  const spacer = document.getElementById("headerSpacer");

  function openMenu() {
    menu.classList.remove("-translate-x-full");
    overlay.classList.remove("opacity-0", "pointer-events-none");
    document.body.classList.add("overflow-hidden");
  }

  function closeMenu() {
    menu.classList.add("-translate-x-full");
    overlay.classList.add("opacity-0", "pointer-events-none");
    document.body.classList.remove("overflow-hidden");
  }

  // Sticky + Blur Header
  window.addEventListener("scroll", () => {
    if (window.scrollY > 30) {
      const height = header.offsetHeight;
      spacer.style.height = height + "px";

      header.classList.add(
        "fixed", "top-0", "left-0", "z-50",
        "bg-white/70", "backdrop-blur-md", "shadow-sm"
      );
    } else {
      spacer.style.height = "0px";

      header.classList.remove(
        "fixed", "top-0", "left-0", "z-50",
        "bg-white/70", "backdrop-blur-md", "shadow-sm"
      );
    }
  });
</script>