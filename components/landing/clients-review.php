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

<section class="w-full !bg-white py-6">
    <div class="max-w-7xl mx-auto px-4 md:px-10">

        <!-- Heading -->
        <h2 class="text-3xl md:text-5xl font-bold text-black-secondary mb-8">Client's <span class="text-red-secondary">Review</span></h2>

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
                            class="w-full h-full object-cover transition duration-500 group-hover:scale-105"
                            muted
                            playsinline
                            controls
                            muted
                            preload="metadata">
                            <source src="<?= asset($review['video']); ?>" type="video/mp4">
                        </video>

                        <!-- Play Icon -->
                        <div class="absolute inset-4 bottom-4 w-12 h-12 !bg-white rounded-full flex items-center justify-center shadow-lg pointer-events-none"> <i class="fa fa-play text-red-primary" aria-hidden="true"></i> </div>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>
</section>
<script>
    let isDragging = false;

    // Horizontal scroll drag
    const reviewScroll = document.getElementById("reviewScroll");
    let startX, scrollLeft;

    reviewScroll.addEventListener("mousedown", e => {
        isDragging = false;
        startX = e.pageX - reviewScroll.offsetLeft;
        scrollLeft = reviewScroll.scrollLeft;
    });

    reviewScroll.addEventListener("mousemove", e => {
        if (startX === undefined) return;
        const x = e.pageX - reviewScroll.offsetLeft;
        const walk = x - startX;
        if (Math.abs(walk) > 5) isDragging = true;
        reviewScroll.scrollLeft = scrollLeft - walk;
    });

    reviewScroll.addEventListener("mouseup", () => {
        startX = undefined;
        setTimeout(() => isDragging = false, 50);
    });

    reviewScroll.addEventListener("mouseleave", () => {
        startX = undefined;
        isDragging = false;
    });

    // Mouse wheel horizontal scroll
    reviewScroll.addEventListener("wheel", e => {
        e.preventDefault();
        reviewScroll.scrollLeft += e.deltaY;
    });
</script>