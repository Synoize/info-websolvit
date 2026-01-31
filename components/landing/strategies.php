<section class="w-full !bg-white md:py-12 pb-12">
    <div class="max-w-7xl mx-auto px-4 md:px-10 flex flex-col md:flex-row items-center md:gap-8">

        <div class="w-full md:w-1/2 flex items-center justify-center">
            <iframe src="https://lottie.host/embed/dac4aac2-1f81-420f-987f-8d28dddf2fd7/9vW6LNmP2P.lottie"
                class="w-full h-[280px] sm:h-[320px] md:h-[380px] lg:h-[420px]"
                frameborder="0"
                allowfullscreen>
            </iframe>
        </div>

        <div class="w-full md:w-1/2 flex flex-col items-center md:items-start gap-6">
            <!-- Heading -->
            <div class="text-center md:text-left">
                <h2 class="text-3xl md:text-5xl font-bold text-red-primary">
                    Business Growth
                </h2>
                <p class="text-xl md:text-3xl font-semibold text-red-secondary mt-4">
                    Through Smart Digital Strategies
                </p>
            </div>

            <div class="text-black-secondary text-base md:text-lg text-center md:text-left">
                <div class=" space-y-2">
                    <p>
                        We help businesses scale with <span class="font-semibold">result-driven digital solutions</span> powered by
                        <span class="font-semibold">SEO</span>,
                        <span class="font-semibold">high-converting websites</span>, and
                        <span class="font-semibold">performance marketing</span>.
                    </p>
                    <p>
                        Our focus is on <span class="font-semibold">visibility</span>,
                        <span class="font-semibold">lead generation</span>, and
                        <span class="font-semibold">long-term growth</span>, ensuring measurable success in today’s competitive digital landscape.
                    </p>
                </div>

                <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">

                    <!-- Card 1 -->
                    <div class="flex flex-col md:flex-row gap-2 p-6 rounded-2xl border !bg-white">
                        <div class="text-2xl">🏆</div>
                        <div>
                            <h3 class="text-lg font-semibold !text-black">
                                Top-Rated Digital Marketing Company
                            </h3>
                            <p class="text-sm text-black-secondary mt-1">
                                We help businesses grow online with SEO, social media, and marketing.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="flex flex-col md:flex-row gap-2 p-6 rounded-2xl border !bg-white">
                        <div class="text-yellow-500 text-2xl">⭐</div>
                        <div>
                            <h3 class="text-lg font-semibold !text-black">
                                Delivering Smart Digital Solutions
                            </h3>
                            <p class="text-sm text-black-secondary mt-1">
                                Trusted by businesses across multiple industries for consistent, measurable results.
                            </p>
                        </div>
                    </div>

                </div>

            </div>


            <!-- <a href="<?= url('contact'); ?>"
                class="group flex items-center gap-2 px-5 md:px-6 py-3 mt-4 rounded-full !text-white
               bg-red-primary/70 hover:bg-red-primary/90 transition-all duration-300">
                <span class="text-xs">Learn More</span>
                <i data-lucide="arrow-right"
                    class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"></i>
            </a> -->

        </div>

    </div>

</section>

<section class="w-full bg-white-secondary/10 py-12">
    <div class="max-w-7xl mx-auto px-4 md:px-10 flex flex-col md:flex-row items-center md:gap-8">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">

            <!-- Card 1 -->
            <div
                class="group bg-red-primary/90 rounded-2xl p-10 text-center
         transition-transform duration-500 ease-out hover:scale-105 hover:bg-red-primary/80">
                <h2
                    class="counter text-4xl md:text-5xl font-extrabold text-white
             transition-transform duration-500 group-hover:scale-110"
                    data-target="3.5" data-type="decimal">
                    0
                </h2>

                <p
                    class="mt-3 text-white text-sm leading-relaxed
             transition-opacity duration-500 group-hover:opacity-90">
                    Average ROI<br>
                    on Facebook & Google Ads campaigns
                </p>
            </div>


            <!-- Card 2 -->
            <div class="group bg-red-primary/90 rounded-2xl p-10 text-center
         transition-transform duration-500 ease-out hover:scale-105 hover:bg-red-primary/80">
                <h2 class="counter text-4xl md:text-5xl font-extrabold text-white
             transition-transform duration-500 group-hover:scale-110"
                    data-target="250" data-type="percent">0</h2>
                <p class="mt-3 text-white text-sm leading-relaxed
             transition-opacity duration-500 group-hover:opacity-90">
                    Traffic Increase<br>
                    through SEO within 6 months
                </p>
            </div>

            <!-- Card 3 -->
            <div class="group bg-red-primary/90 rounded-2xl p-10 text-center
         transition-transform duration-500 ease-out hover:scale-105 hover:bg-red-primary/80">
                <h2 class="counter text-4xl md:text-5xl font-extrabold text-white
             transition-transform duration-500 group-hover:scale-110"
                    data-target="85" data-type="percent">0</h2>
                <p class="mt-3 text-white text-sm leading-relaxed
             transition-opacity duration-500 group-hover:opacity-90">
                    Lead Quality<br>
                    improvement with targeted campaigns
                </p>
            </div>

            <!-- Card 4 -->
            <div class="group bg-red-primary/90 rounded-2xl p-10 text-center
         transition-transform duration-500 ease-out hover:scale-105 hover:bg-red-primary/80">
                <h2 class="counter text-4xl md:text-5xl font-extrabold text-white
             transition-transform duration-500 group-hover:scale-110"
                    data-target="40" data-type="percent">0</h2>
                <p class="mt-3 text-white text-sm leading-relaxed
             transition-opacity duration-500 group-hover:opacity-90">
                    Cost Reduction<br>
                    in customer acquisition expenses
                </p>
            </div>

        </div>

    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll(".counter");

        const animateCounter = (counter) => {
            const target = parseFloat(counter.dataset.target);
            const type = counter.dataset.type;
            let current = 0;
            const speed = 180;

            const update = () => {
                const increment = target / speed;

                if (current < target) {
                    current += increment;

                    if (type === "decimal") {
                        counter.textContent = current.toFixed(1) + "x";
                    } else {
                        counter.textContent = Math.floor(current) + "%";
                    }

                    requestAnimationFrame(update);
                } else {
                    counter.textContent =
                        type === "decimal" ? target + "x" : target + "%";
                }
            };

            update();
        };

        // Animate only when visible
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            }
        );

        counters.forEach(counter => observer.observe(counter));
    });
</script>