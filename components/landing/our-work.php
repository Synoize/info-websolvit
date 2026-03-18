<?php
$projects = [
    [
        "img" => "assets\projects\mobilerepair.png",
        "title" => "ElectroWorks India",
        "description" => "Electronics manufacturing company specializing in innovative product solutions.",
        "category" => "seo",
        "tags" => ["Electronics", "Manufacturer", "Product-Based"],
    ],
    [
        "img" => "assets\projects\mosqiutpnet.png",
        "title" => "Mosquito Net",
        "description" => "Manufacturer of mosquito protection nets focused on safety and durability.",
        "category" => "website",
        "tags" => ["Electronics", "Mosquito Net", "Product-Based"],
    ],
    [
        "img" => "assets/projects/healthpro.png",
        "title" => "HealthPro Medical Labs",
        "description" => "Medical equipment provider delivering reliable healthcare solutions.",
        "category" => "website",
        "tags" => ["Medical", "Equipment", "Product-Based"],
    ],
    [
        "img" => "assets/projects/carle.png",
        "title" => "Rachna Elevator",
        "description" => "Elevator manufacturing company focused on safety and modern infrastructure.",
        "category" => "seo",
        "tags" => ["Electronics", "Elevator", "Manufacturer"],
    ],
    [
        "img" => "assets/projects/gauseva.png",
        "title" => "Gau Seva Shibhir",
        "description" => "NGO initiative focused on animal welfare and community service.",
        "category" => "website",
        "tags" => ["NGO", "Service", "Community"],
    ],
    [
        "img" => "assets/projects/jai.png",
        "title" => "Jai Ambay Etching",
        "description" => "Professional etching services with a strong digital presence.",
        "category" => "website",
        "tags" => ["Web Design", "Agency", "Service-Based"],
    ],
    [
        "img" => "assets\projects\pigeon.png",
        "title" => "Pigeon Net",
        "description" => "Protective net solutions for residential and commercial spaces.",
        "category" => "website",
        "tags" => ["Service", "Net Solutions", "Product-Based"],
    ],
    [
        "img" => "assets\projects\alfa-tower-company.png",
        "title" => "Alpha Tower Company",
        "description" => "Tower installation company offering reliable infrastructure services.",
        "category" => "website",
        "tags" => ["Web Design", "Installation", "Service-Based"],
    ],
    [
        "img" => "assets\projects\marketedge.png",
        "title" => "MarketEdge Agency",
        "description" => "Digital marketing agency helping brands grow online visibility.",
        "category" => "website",
        "tags" => ["Marketing", "Digital", "Agency"],
    ],
    [
        "img" => "assets\projects\academy.png",
        "title" => "EduSmart Academy",
        "description" => "Online education platform providing modern learning solutions.",
        "category" => "website",
        "tags" => ["Education", "Online", "Service-Based"],
    ],
];
?>

<!-- ourWorkScroll Section Start -->
<section class="w-full !bg-white md:pt-20 py-12">
    <div class="max-w-7xl mx-auto px-4 md:px-10 flex flex-col">

        <!-- Heading -->
        <div class="text-center md:text-left mb-12">
            <h4 class="text-3xl md:text-4xl font-semibold text-black-secondary uppercase tracking-wide">
                Our <span class="text-red-secondary">Work's</span>
            </h4>

            <h2 class="text-xl md:text-2xl leading-snug mt-4 text-black-secondary">
                Showcasing impactful digital solutions.
            </h2>
        </div>

        <!-- Filters -->
        <div class="flex w-full mb-8">
            <button class="filterBtn active-filter mr-3" data-filter="all">All</button>
            <div class="flex-1 overflow-x-auto flex gap-1.5 md:gap-3 [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
                <button class="filterBtn" data-filter="website">Website</button>
                <button class="filterBtn" data-filter="seo">SEO</button>
                <button class="filterBtn" data-filter="graphic">Graphic</button>
                <button class="filterBtn" data-filter="marketing">Marketing</button>
            </div>
        </div>

        <!-- Projects -->
        <div
            id="ourWorkScroll"
            class="grid grid-cols-2 gap-4
             sm:flex sm:gap-6 sm:overflow-x-auto sm:scroll-smooth sm:snap-x sm:snap-mandatory sm:pb-4
             sm:[&::-webkit-scrollbar]:hidden sm:[-ms-overflow-style:none] sm:[scrollbar-width:none]">

            <?php foreach ($projects as $project) { ?>
                <div
                    class="projectItem group sm:snap-start sm:flex-shrink-0 sm:w-[280px] md:w-[320px] lg:w-[300px] relative"
                    data-category="<?= $project['category']; ?>">

                    <div class="bg-white-secondary/10 rounded-2xl overflow-hidden h-[180px] sm:h-[260px] flex items-center justify-center">
                        <img src="<?= asset($project['img']); ?>"
                            class="w-full h-full object-contain group-hover:scale-105 p-6 transition duration-500"
                            alt="<?= $project['title']; ?>">
                    </div>

                    <h3 class="mt-4 text-lg font-semibold !text-black line-clamp-1">
                        <?= $project['title']; ?>
                    </h3>

                    <div class="mt-3 border-t"></div>

                    <p class="mt-3 text-black-secondary text-xs sm:text-sm line-clamp-2"><?= $project['description']; ?></p>

                    <div class="mt-3 flex items-center flex-wrap gap-2 text-xs sm:text-sm">
                        <?php foreach ($project['tags'] as $tag) { ?>
                            <span class="text-xs bg-red-secondary text-white px-2 py-1 rounded-md"><?= $tag; ?></span>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>

        <a href="<?= url('projects'); ?>"
            class="group flex items-center self-center gap-2 px-5 md:px-6 py-3 mt-12 rounded-full !text-white
               bg-red-primary/70 hover:bg-red-primary/90 transition-all duration-300">
            <span class="text-xs">See All Projects</span>
            <i data-lucide="arrow-right"
                class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"></i>
        </a>

    </div>
</section>
<!-- ourWorkScroll Section End -->

<style>
    .filterBtn {
        padding: 6px 18px;
        border-radius: 9999px;
        font-size: 14px;
        font-weight: 600;
        background: #9ca3af10;
        color: #404040;
        transition: all 0.3s;
        white-space: nowrap;
    }

    .filterBtn:hover {
        background: #a72a2177;
        color: #fff;
        cursor: pointer;
    }

    .active-filter {
        background: #a72b2190;
        color: #fff;
    }

    .hidden-item {
        display: none !important;
    }
</style>

<script>
    const container = document.getElementById("ourWorkScroll");

    let scrollSpeed = 1; // speed (increase for faster)
    let autoScroll;

    function startAutoScroll() {
        autoScroll = setInterval(() => {
            container.scrollLeft += scrollSpeed;

            // loop back to start smoothly
            if (container.scrollLeft >= container.scrollWidth - container.clientWidth) {
                container.scrollLeft = 0;
            }
        }, 20);
    }

    function stopAutoScroll() {
        clearInterval(autoScroll);
    }

    // Start auto scroll
    startAutoScroll();

    // Pause on hover (for better UX)
    container.addEventListener("mouseenter", stopAutoScroll);
    container.addEventListener("mouseleave", startAutoScroll);

    // Allow manual scroll (mouse/touch)
    let isDown = false;
    let startX;
    let scrollLeft;

    container.addEventListener("mousedown", (e) => {
        isDown = true;
        startX = e.pageX - container.offsetLeft;
        scrollLeft = container.scrollLeft;
        stopAutoScroll();
    });

    container.addEventListener("mouseleave", () => {
        isDown = false;
        startAutoScroll();
    });

    container.addEventListener("mouseup", () => {
        isDown = false;
        startAutoScroll();
    });

    container.addEventListener("mousemove", (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - container.offsetLeft;
        const walk = (x - startX) * 2; // drag speed
        container.scrollLeft = scrollLeft - walk;
    });

    // Touch support (mobile)
    container.addEventListener("touchstart", stopAutoScroll);
    container.addEventListener("touchend", startAutoScroll);
</script>