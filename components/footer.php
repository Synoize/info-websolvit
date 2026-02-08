<?php
$footer = [
    'logo' => asset('public/logo.png'),
    'email' => 'shivamsingh.dev0@gmail.com',
    'name' => 'Shivam Singh',
    'socials' => [
        [
            'label' => 'Instagram',
            'url' => 'https://instagram.com/synoize'
        ],
        [
            'label' => 'GitHub',
            'url' => 'https://github.com/synoize'
        ],
        [
            'label' => 'LinkedIn',
            'url' => 'https://linkedin.com/in/synoize'
        ],
        [
            'label' => 'Twitter',
            'url' => 'https://twitter.com/synoize'
        ],
    ]
];
?>
<footer class="w-full !bg-white">

  <!-- Top Section -->
  <div class="max-w-7xl mx-auto px-6 py-20 text-center">

    <!-- Logo -->
    <div class="flex justify-center">
      <img src="<?= $footer['logo']; ?>"
           alt="<?= $footer['name']; ?>"
           class="w-40">
    </div>

    <!-- Email -->
    <div class="group flex items-center justify-center gap-3 mt-4
                text-white-secondary hover:text-red-secondary">

      <i data-lucide="mail"
         class="w-4 h-4 transition-transform duration-300 group-hover:scale-110"></i>

      <a href="mailto:<?= $footer['email']; ?>" class="transition">
        <?= $footer['email']; ?>
      </a>

    </div>

  </div>

  <!-- Divider -->
  <div class="max-w-7xl mx-auto px-6">
    <hr class="border-white-secondary border-dashed">
  </div>

  <!-- Bottom Section -->
  <div class="max-w-7xl mx-auto px-6 py-6
              flex flex-col md:flex-row
              items-center justify-between
              gap-4 text-sm text-white-secondary">

    <!-- Left -->
    <p class="text-center md:text-left">
      © <?= date('Y'); ?> <?= $footer['name']; ?>. All rights reserved.
    </p>

    <!-- Right -->
    <div class="flex flex-wrap justify-center gap-6 md:gap-8">
      <?php foreach ($footer['socials'] as $social): ?>
        <a href="<?= $social['url']; ?>"
           target="_blank"
           class="hover:text-red-secondary transition">
          <?= $social['label']; ?>
        </a>
      <?php endforeach; ?>
    </div>

  </div>

</footer>
