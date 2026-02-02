<?php
$testimonials = [
  [
    "quote" => "The team helped us build a performance-driven digital strategy that delivers consistent leads and real ROI.",
    "name" => "Jitesh Sanekar",
    "image" => "assets/testimonials/_1.png",
    "social_links" => [
      "instagram" => "https://www.instagram.com/username",
      "linkedin"  => "https://www.linkedin.com/in/username",
      "x"         => "https://x.com/username"
    ]
  ],
  [
    "quote" => "Our SEO and paid campaigns started showing strong results within weeks, all backed by clear data and insights.",
    "name" => "Jitesh Sanekar",
    "image" => "assets/testimonials/_1.png",
    "social_links" => [
      "instagram" => "https://www.instagram.com/username",
      "linkedin"  => "https://www.linkedin.com/in/username",
      "x"         => "https://x.com/username"
    ]
  ],
  [
    "quote" => "Clear strategy, strong execution, and measurable growth across multiple digital channels.",
    "name" => "Jitesh Sanekar",
    "image" => "assets/testimonials/_1.png",
    "social_links" => [
      "instagram" => "https://www.instagram.com/username",
      "linkedin"  => "https://www.linkedin.com/in/username",
      "x"         => "https://x.com/username"
    ]
  ]
];
?>

<section class="w-full !bg-white py-12">
  <div class="max-w-7xl mx-auto px-4 md:px-10">

    <div
      id="testimonialSlider"
      class="flex overflow-x-auto scroll-smooth snap-x snap-mandatory gap-6 no-scrollbar">

      <?php foreach ($testimonials as $item) { ?>
        <div
          class="min-w-full snap-center relative bg-white-secondary/30 rounded-3xl overflow-hidden
           flex flex-col md:flex-row items-center md:items-stretch">

          <!-- LEFT CONTENT -->
          <div class="w-full md:w-[60%] p-8 md:p-12 flex flex-col justify-between">
            <div>
              <div class="text-5xl font-black text-black leading-none">“</div>
              <p class="mt-4 text-lg md:text-xl text-gray-700 leading-relaxed max-w-xl">
                <?= $item['quote']; ?>
              </p>
            </div>
            <p class="mt-8 text-lg font-medium text-black">
              ~ <?= $item['name']; ?>
            </p>
          </div>

          <!-- RIGHT IMAGE -->
          <div class="relative w-full md:w-[40%] flex items-end justify-center">
            <div
              class="absolute inset-0 opacity-40
               bg-[radial-gradient(circle,_#a72a2177_2px,_transparent_2px)]
               [background-size:24px_24px]">
            </div>

            <img
              src="<?= $item['image']; ?>"
              class="relative z-10 w-[220px] md:w-[280px] object-contain"
              alt="<?= $item['name']; ?>">

            <?php if (!empty($item['social_links'])) { ?>
              <div class="absolute bottom-6 right-6 flex gap-3 z-20 text-white">

                <?php foreach ($item['social_links'] as $platform => $url) { ?>

                  <?php
                  $icon = '';
                  $bg   = '';

                  if ($platform === 'instagram') {
                    $icon = 'fa-instagram';
                    $bg   = 'bg-[linear-gradient(45deg,#feda75,#fa7e1e,#d62976,#962fbf,#4f5bd5)]';
                  } elseif ($platform === 'linkedin') {
                    $icon = 'fa-linkedin-in';
                    $bg   = 'bg-[#0A66C2]';
                  } elseif ($platform === 'x') {
                    $icon = 'fa-x-twitter';
                    $bg   = 'bg-black';
                  }
                  ?>

                  <a
                    href="<?= $url; ?>"
                    target="_blank"
                    rel="noopener"
                    class="w-12 h-12 rounded-full <?= $bg; ?> text-white
               flex items-center justify-center shadow-md
               transition-transform duration-300 hover:scale-110">
                    <i class="fa-brands <?= $icon; ?>"></i>
                  </a>

                <?php } ?>

              </div>
            <?php } ?>

          </div>

        </div>
      <?php } ?>


    </div>

  </div>
</section>
<script>
  const slider = document.getElementById('testimonialSlider');
  let index = 0;

  setInterval(() => {
    index = (index + 1) % slider.children.length;
    slider.scrollTo({
      left: slider.clientWidth * index,
      behavior: 'smooth'
    });
  }, 4000);
</script>