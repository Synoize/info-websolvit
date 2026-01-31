<!-- MOBILE FOOTER NAV -->
<footer class="md:hidden block fixed bottom-0 left-0 w-full bg-white border-t z-50 rounded-t-xl">
  <div class="grid grid-cols-5 text-center text-xs py-4">

    <a
      href="https://wa.me/919876543210?text=Hello%20Websolvit,%20I%20want%20to%20know%20more%20about%20your%20digital%20marketing%20services."
      target="_blank"
      class="flex flex-col items-center gap-1 text-white-secondary active:text-red-secondary">
      <i data-lucide="message-circle" class="w-5 h-5"></i>
      <span>WhatsApp</span>
    </a>


    <a href="<?= url('services'); ?>" class="flex flex-col items-center gap-1 text-white-secondary active:text-red-secondary">
      <i data-lucide="tv-minimal" class="w-5 h-5"></i>
      <span>Services</span>
    </a>

    <a href="<?= url(''); ?>" class="flex flex-col items-center gap-1 text-red-secondary active:text-red-secondary">
      <i data-lucide="house" class="w-5 h-5"></i>
      <span>Home</span>
    </a>

    <a href="<?= url('info'); ?>" class="flex flex-col items-center gap-1 text-white-secondary">
      <i data-lucide="info" class="w-5 h-5"></i>
      <span>About</span>
    </a>

    <!-- MENU BUTTON -->
    <button id="openMenu" class="flex flex-col items-center gap-1 text-white-secondary active:text-red-primary">
      <i data-lucide="layout-grid" class="w-5 h-5"></i>
      <span>Menu</span>
    </button>

  </div>
</footer>

<!-- OVERLAY -->
<div id="menuOverlay"
  class="fixed inset-0 bg-black/40 z-40 hidden">
</div>

<!-- BOTTOM SHEET MENU -->
<div id="bottomMenu"
  class="fixed bottom-0 left-0 w-full bg-white rounded-t-3xl z-50
            translate-y-full transition-transform duration-300 ease-out">

  <!-- HANDLE -->
  <div class="flex justify-center py-3">
    <div class="w-12 h-1.5 bg-gray-300 rounded-full"></div>
  </div>

  <!-- MENU ITEMS -->
  <div class="grid grid-cols-2 gap-4 px-6 pb-8 text-center">

    <a href="<?= url('services'); ?>" class="py-4 rounded-xl bg-gray-100">
      Services
    </a>

    <a href="<?= url('portfolio'); ?>" class="py-4 rounded-xl bg-gray-100">
      Portfolio
    </a>

    <a href="<?= url('contact'); ?>" class="py-4 rounded-xl bg-gray-100">
      Contact
    </a>

    <a href="<?= url('blog'); ?>" class="py-4 rounded-xl bg-gray-100">
      Blog
    </a>

  </div>

  <!-- CLOSE BUTTON -->
  <button id="closeMenu"
    class="w-full py-4 text-red-primary font-semibold border-t">
    Close Menu
  </button>

</div>
<script>
  const openBtn = document.getElementById("openMenu");
  const closeBtn = document.getElementById("closeMenu");
  const menu = document.getElementById("bottomMenu");
  const overlay = document.getElementById("menuOverlay");

  function openMenu() {
    menu.classList.remove("translate-y-full");
    overlay.classList.remove("hidden");
  }

  function closeMenu() {
    menu.classList.add("translate-y-full");
    overlay.classList.add("hidden");
  }

  openBtn.addEventListener("click", openMenu);
  closeBtn.addEventListener("click", closeMenu);
  overlay.addEventListener("click", closeMenu);
</script>