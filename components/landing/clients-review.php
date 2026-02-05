<?php
$clientsReview = [
    [
        "video" => "assets/reviews/_1.mp4",
        "title" => "Digital Marketing Service Review",
        "description" => "Client shares how our SEO & paid ads boosted their online visibility and sales."
    ],
    [
        "video" => "assets/reviews/_1.mp4",
        "title" => "Website Development Testimonial",
        "description" => "A business owner explains how our custom website improved brand trust and conversions."
    ],
    [
        "video" => "assets/reviews/_1.mp4",
        "title" => "Software Product Review",
        "description" => "Client talks about using our software solution to automate workflows and save time."
    ],
    [
        "video" => "assets/reviews/_1.mp4",
        "title" => "Startup Growth Experience",
        "description" => "Startup founder reviews our growth strategy and technical support experience."
    ],
];
?>

<section class="w-full bg-white py-6">
    <div class="max-w-7xl mx-auto px-4 md:px-10">

        <!-- Heading -->
        <div class="text-center md:text-left mb-12">
            <h4 class="text-3xl md:text-4xl font-semibold text-black-secondary uppercase tracking-wide">
                Client's <span class="text-red-secondary">Review</span>
            </h4>
            <h2 class="text-xl md:text-2xl leading-snug mt-4 text-black-secondary">
                Building trust through great work.
            </h2>
        </div>

        <!-- Scrollable Cards -->
        <div id="reviewScroll"
            class="flex gap-4 md:gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory pb-4 cursor-grab
            [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">

            <?php foreach ($clientsReview as $review) { ?>
                <div class="snap-start flex-shrink-0 w-[240px] sm:w-[260px] md:w-[280px]">

                    <div
                        class="relative rounded-3xl overflow-hidden h-[340px] md:h-[380px]
                        bg-black/10 group select-none">

                        <!-- Video -->
                        <video
                            class="review-video w-full h-full object-cover transition duration-500 group-hover:scale-105"
                            playsinline
                            preload="metadata"
                            controls>
                            <source src="<?= asset($review['video']); ?>" type="video/mp4">
                        </video>

                        <!-- Play Icon -->
                        <div class="play-icon absolute inset-0 flex items-center justify-center pointer-events-none">
                            <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center shadow-lg">
                                <i class="fa fa-play text-red-primary text-lg"></i>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>

            <!-- View More -->
            <a href="<?= url('testimonials'); ?>"
                class="group flex items-center self-center px-6 py-4 rounded-full text-white
               bg-red-primary/70 hover:bg-red-primary/90 transition-all duration-300">
                <i data-lucide="arrow-right"
                    class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"></i>
            </a>

        </div>
    </div>
</section>
<script>
    const reviewScroll = document.getElementById("reviewScroll");
    const videos = document.querySelectorAll(".review-video");

    let isDown = false;
    let startX;
    let scrollLeft;
    let moved = false;

    // Drag scroll
    reviewScroll.addEventListener("mousedown", (e) => {
        isDown = true;
        moved = false;
        startX = e.pageX - reviewScroll.offsetLeft;
        scrollLeft = reviewScroll.scrollLeft;
        reviewScroll.classList.add("cursor-grabbing");
    });

    reviewScroll.addEventListener("mousemove", (e) => {
        if (!isDown) return;
        const x = e.pageX - reviewScroll.offsetLeft;
        const walk = x - startX;
        if (Math.abs(walk) > 5) moved = true;
        reviewScroll.scrollLeft = scrollLeft - walk;
    });

    ["mouseup", "mouseleave"].forEach(event =>
        reviewScroll.addEventListener(event, () => {
            isDown = false;
            reviewScroll.classList.remove("cursor-grabbing");
        })
    );

    // Wheel horizontal scroll
    reviewScroll.addEventListener("wheel", (e) => {
        e.preventDefault();
        reviewScroll.scrollLeft += e.deltaY;
    });

    // Video behavior
    videos.forEach(video => {
        const card = video.closest("div");
        const playIcon = card.querySelector(".play-icon");

        video.addEventListener("play", () => {
            // Pause other videos
            videos.forEach(v => {
                if (v !== video) v.pause();
            });
            playIcon.style.opacity = "0";
        });

        video.addEventListener("pause", () => {
            playIcon.style.opacity = "1";
        });

        // Prevent click when dragging
        video.addEventListener("click", (e) => {
            if (moved) {
                e.preventDefault();
                e.stopPropagation();
            }
        });
    });
</script>