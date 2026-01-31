<!-- Hero Section Start -->
<section class="w-full">
    <div class="relative w-full overflow-hidden">

        <!-- Slides Wrapper -->
        <div id="slider" class="flex w-full transition-transform duration-700 ease-in-out">

            <!-- Slide 1 -->
            <div class="min-w-full relative">
                <img src="assets/carousel/_1.jpg"
                    class="w-full h-[260px] md:h-[85vh] object-cover"
                    alt="Banner 2">

                <div class="absolute inset-0 flex items-center h-full">
                    <div class="p-8 md:p-20 max-w-xl h-[260px] md:h-[85vh] flex flex-col justify-between items-start">
                        <div>
                            <h2 class="text-2xl md:text-5xl font-bold !text-white leading-tight">
                                Not Sure Which <br> Chair to Pick?
                            </h2>
                            <p class="mt-3 md:mt-8 text-sm md:text-lg !text-white">
                                Get expert help before you buy
                            </p>
                        </div>

                        <a href="<?= url('contact'); ?>"
                            class="group flex items-center gap-2 px-5 md:px-6 py-3 rounded-full !text-white
               bg-[#0A66C2] hover:bg-[#0A66C2]/90 transition-all duration-300">
                            <span class="text-xs">Connect with an Expert</span>
                            <i data-lucide="arrow-right"
                                class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Slide 2 -->
            <div class="min-w-full relative">
                <img src="assets/carousel/_2.jpg"
                    class="w-full h-[260px] md:h-[85vh] object-cover"
                    alt="Banner 1">

                <div class="absolute inset-0 flex items-center h-full ">
                    <div class="p-8 md:p-20 max-w-xl h-[260px] md:h-[85vh] flex flex-col justify-end items-start">
                        <!-- <div>
                            <h2 class="text-3xl md:text-5xl font-bold text-[#24304a] leading-tight">
                                Not Sure Which <br> Chair to Pick?
                            </h2>
                            <p class="mt-3 text-sm md:text-lg text-gray-700">
                                Get expert help before you buy
                            </p>
                        </div> -->

                        <a href="<?= url('contact'); ?>"
                            class="group flex items-center gap-2 px-5 md:px-6 py-3 rounded-full !text-white
               bg-[#0A66C2] hover:bg-[#0A66C2]/90 transition-all duration-300">
                            <span class="text-xs">Connect with an Expert</span>
                            <i data-lucide="arrow-right"
                                class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Left Arrow -->
        <button onclick="prevSlide()"
            class="absolute left-3 top-1/2 -translate-y-1/2 !bg-white hover:!bg-white/80 w-8 h-8 md:w-10 md:h-10 rounded-full flex items-center justify-center shadow-md z-8">
            <i data-lucide="chevron-left" class="w-4 h-4 md:w-5 md:h-5 text-black-secondary"></i>
        </button>

        <!-- Right Arrow -->
        <button onclick="nextSlide()"
            class="absolute right-3 top-1/2 -translate-y-1/2 !bg-white hover:!bg-white/80 w-8 h-8 md:w-10 md:h-10 rounded-full flex items-center justify-center shadow-md z-10">
            <i data-lucide="chevron-right" class="w-4 h-4 md:w-5 md:h-5 text-black-secondary"></i>
        </button>

        <!-- Dots -->
        <div class="absolute bottom-4 left-1/2 -translate-x-2 flex gap-2 z-10">
            <button class="dotSlider w-2 h-2 !bg-black/40 rounded-full" onclick="goToSlide(0)"></button>
            <button class="dotSlider w-2 h-2 !bg-black/40 rounded-full" onclick="goToSlide(1)"></button>
            <button class="dotSlider w-2 h-2 !bg-black/40 rounded-full" onclick="goToSlide(2)"></button>
        </div>

    </div>
</section>
<!-- Hero Section End -->

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