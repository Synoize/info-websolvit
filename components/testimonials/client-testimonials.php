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
    [
        "video" => "assets/reviews/_1.mp4",
        "title" => "Digital Marketing Service Review",
        "description" => "Client shares how our SEO & paid ads boosted their online visibility and sales."
    ],
];

?>

<section class="w-full !bg-white py-12">
    <div class="max-w-7xl mx-auto px-4 md:px-10 flex flex-col ">

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
            class="flex gap-4 md:gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory pb-4
             [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">

            <?php foreach ($clientsReview as $review) { ?>
                <div class="snap-start flex-shrink-0 w-[240px] sm:w-[260px] md:w-[280px]">

                    <div
                        class="relative rounded-3xl overflow-hidden h-[340px] md:h-[380px] bg-white-secondary/10 group cursor-pointer"
                        data-playing="false">

                        <!-- Video -->
                        <video
                            class="review-video w-full h-full object-cover transition duration-500 group-hover:scale-105"
                            playsinline
                            preload="metadata"
                            controls>
                            <source src="<?= asset($review['video']); ?>" type="video/mp4">
                        </video>


                        <!-- Play Icon -->
                        <div class="absolute inset-4 bottom-4 w-12 h-12 !bg-white rounded-full flex items-center justify-center shadow-lg pointer-events-none"> <i class="fa fa-play text-red-primary" aria-hidden="true"></i> </div>
                    </div>
                </div>
            <?php } ?>

        </div>

        <!-- View All -->
        <a href="<?= url('services'); ?>"
            class="group flex items-center self-start gap-2 px-6 py-3 mt-4 rounded-full !text-white bg-red-primary/70 hover:bg-red-primary/90 transition-all duration-300">
            <span class="text-xs">See All Services</span>
            <i data-lucide="arrow-right"
                class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"></i>
        </a>

    </div>
</section>
<style>
    #reviewScroll {
        cursor: grab;
    }

    #reviewScroll.grabbing {
        cursor: grabbing;
    }

    .play-icon {
        transition: opacity 0.3s ease;
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", () => {

        const reviewScroll = document.getElementById("reviewScroll");
        const videos = reviewScroll.querySelectorAll(".review-video");

        let isDown = false;
        let startX;
        let scrollLeft;
        let moved = false;

        /* ---------------- DRAG SCROLL ---------------- */
        reviewScroll.addEventListener("mousedown", e => {
            isDown = true;
            moved = false;
            startX = e.pageX - reviewScroll.offsetLeft;
            scrollLeft = reviewScroll.scrollLeft;
            reviewScroll.classList.add("grabbing");
        });

        reviewScroll.addEventListener("mousemove", e => {
            if (!isDown) return;
            const x = e.pageX - reviewScroll.offsetLeft;
            const walk = x - startX;
            if (Math.abs(walk) > 5) moved = true;
            reviewScroll.scrollLeft = scrollLeft - walk;
        });

        ["mouseup", "mouseleave"].forEach(evt => {
            reviewScroll.addEventListener(evt, () => {
                isDown = false;
                reviewScroll.classList.remove("grabbing");
            });
        });

        /* ---------------- WHEEL SCROLL (DESKTOP ONLY) ---------------- */
        reviewScroll.addEventListener("wheel", e => {
            if (window.innerWidth < 640) return;
            e.preventDefault();
            reviewScroll.scrollLeft += e.deltaY;
        }, {
            passive: false
        });

        /* ---------------- VIDEO BEHAVIOR ---------------- */
        videos.forEach(video => {
            const card = video.closest(".group");
            const playIcon = card.querySelector(".play-icon");

            video.addEventListener("play", () => {
                // pause others
                videos.forEach(v => {
                    if (v !== video) v.pause();
                });
                playIcon.style.opacity = "0";
            });

            video.addEventListener("pause", () => {
                playIcon.style.opacity = "1";
            });

            // prevent click while dragging
            video.addEventListener("click", e => {
                if (moved) {
                    e.preventDefault();
                    e.stopPropagation();
                }
            });
        });

    });
</script>