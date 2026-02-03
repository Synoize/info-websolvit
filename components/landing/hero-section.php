<?php
$slides = [
    [
        "img" => "assets/carousel/_1.jpg",
        "title" => "Not Sure Which <br> Chair to Pick?",
        "desc" => "Get expert help before you buy",
        "align" => "between"
    ],
    [
        "img" => "assets/carousel/_2.jpg",
        "title" => "",
        "desc" => "",
        "align" => "end"
    ]
];
?>

<section class="w-full">
    <div class="relative w-full overflow-hidden">

        <!-- Slides -->
        <div id="slider" class="flex transition-transform duration-700 ease-in-out">

            <?php foreach ($slides as $slide): ?>
                <div class="min-w-full relative">
                    <img src="<?= asset($slide['img']); ?>" class="w-full h-[260px] md:h-[85vh] object-cover">

                    <div class="absolute inset-0 flex items-center">
                        <div class="p-8 md:p-20 max-w-xl h-full flex flex-col items-start justify-<?= $slide['align']; ?>">

                            <?php if ($slide['title']): ?>
                                <div>
                                    <h2 class="text-2xl md:text-5xl font-bold !text-white leading-tight">
                                        <?= $slide['title']; ?>
                                    </h2>
                                    <p class="mt-3 md:mt-8 text-sm md:text-lg !text-white">
                                        <?= $slide['desc']; ?>
                                    </p>
                                </div>
                            <?php endif; ?>

                            <a href="<?= url('contact'); ?>"
                                class="group mt-6 flex items-center gap-2 px-5 py-3 rounded-full !text-white
                                bg-[#0A66C2] hover:bg-[#0A66C2]/90 transition">
                                <span class="text-xs">Connect with an Expert</span>
                                <i data-lucide="arrow-right"
                                    class="w-4 h-4 group-hover:translate-x-1 transition"></i>
                            </a>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

        <!-- Arrows -->
        <?php foreach (['left' => 'prevSlide', 'right' => 'nextSlide'] as $pos => $fn): ?>
            <button onclick="<?= $fn; ?>()"
                class="absolute <?= $pos; ?>-3 top-1/2 -translate-y-1/2 !bg-white w-8 h-8 md:w-10 md:h-10
                rounded-full flex items-center justify-center shadow z-10">
                <i data-lucide="chevron-<?= $pos; ?>" class="w-4 h-4"></i>
            </button>
        <?php endforeach; ?>

        <!-- Dots -->
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-10">
            <?php foreach ($slides as $i => $s): ?>
                <button onclick="goToSlide(<?= $i; ?>)"
                    class="dotSlider w-2 h-2 !bg-black/40 rounded-full"></button>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<script>
    const slider = document.getElementById("slider");
    const dots = document.querySelectorAll(".dotSlider");

    let currentIndex = 0;
    const totalSlides = slider.children.length;
    let autoplay;

    function updateSlider() {
        slider.style.transform = `translateX(-${currentIndex * 100}%)`;

        dots.forEach(dot => dot.classList.remove("!bg-slate-200"));
        dots[currentIndex].classList.add("!bg-slate-200");
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlider();
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateSlider();
    }

    function goToSlide(index) {
        currentIndex = index;
        updateSlider();
    }

    // Autoplay
    function startAutoplay() {
        autoplay = setInterval(nextSlide, 3000);
    }

    function stopAutoplay() {
        clearInterval(autoplay);
    }

    startAutoplay();

    // Pause on hover
    slider.parentElement.addEventListener("mouseenter", stopAutoplay);
    slider.parentElement.addEventListener("mouseleave", startAutoplay);

    // Swipe Support (Mobile)
    let startX = 0;

    slider.addEventListener("touchstart", (e) => {
        startX = e.touches[0].clientX;
    });

    slider.addEventListener("touchend", (e) => {
        let endX = e.changedTouches[0].clientX;

        if (startX - endX > 50) nextSlide();
        if (endX - startX > 50) prevSlide();
    });

    updateSlider();
</script>


<!-- Hero Section End-->