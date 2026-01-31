<?php
$projects = [
    [
        "img" => "assets/works/websites/_1.png",
        "title" => "Mosquito Net Business Website",
        "description" => "Responsive website designed for an Indian mosquito net manufacturer with lead-focused UI.",
        "category" => "website",
        "tags" => ["Website", "UI/UX", "Responsive"],
    ],
    [
        "img" => "assets/works/websites/_1.png",
        "title" => "Local SEO Growth Project",
        "description" => "Improved Google rankings and local visibility for a service-based business.",
        "category" => "seo",
        "tags" => ["SEO", "Local SEO", "Google Ranking"],
    ],
    [
        "img" => "assets/works/websites/_1.png",
        "title" => "Brand Identity & Creatives",
        "description" => "Custom social media creatives and brand design for consistent online presence.",
        "category" => "graphic",
        "tags" => ["Graphic Design", "Branding", "Creatives"],
    ],
    [
        "img" => "assets/works/websites/_1.png",
        "title" => "Social Media Marketing Campaign",
        "description" => "Lead generation campaign using Instagram and Facebook ads with high ROI.",
        "category" => "marketing",
        "tags" => ["Social Media", "Ads", "Lead Generation"],
    ],
    [
        "img" => "assets/works/websites/_1.png",
        "title" => "Corporate Business Website",
        "description" => "Modern corporate website focused on trust, conversions, and performance.",
        "category" => "website",
        "tags" => ["Website", "Corporate", "Performance"],
    ],
];
?>

<!-- Best Sellers Section Start -->
<section class="w-full !bg-white py-6">
    <div class="max-w-7xl mx-auto px-4 md:px-10 flex flex-col">

        <!-- Heading -->
        <h2 class="text-3xl md:text-5xl text-center md:text-left font-bold text-black-secondary mb-8">Our Work's</h2>


        <!-- Filters -->
        <div class="flex w-full mb-8">
            <button class="filterBtn active-filter mr-3" data-filter="all">All</button>
            <div class="flex-1 overflow-x-auto flex gap-3 [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
                <button class="filterBtn" data-filter="website">Website</button>
                <button class="filterBtn" data-filter="seo">SEO</button>
                <button class="filterBtn" data-filter="graphic">Graphic</button>
                <button class="filterBtn" data-filter="marketing">Marketing</button>
            </div>
        </div>

        <!-- Projects -->
        <div
            id="bestSellerScroll"
            class="grid grid-cols-2 gap-4
             sm:flex sm:gap-6 sm:overflow-x-auto sm:scroll-smooth sm:snap-x sm:snap-mandatory sm:pb-4
             sm:[&::-webkit-scrollbar]:hidden sm:[-ms-overflow-style:none] sm:[scrollbar-width:none]">

            <?php foreach ($projects as $project) { ?>
                <div
                    class="projectItem group sm:snap-start sm:flex-shrink-0 sm:w-[280px] md:w-[320px] lg:w-[300px] relative"
                    data-category="<?= $project['category']; ?>">

                    <div class="bg-white-secondary/10 rounded-2xl overflow-hidden h-[180px] sm:h-[260px] flex items-center justify-center">
                        <img src="<?= $project['img']; ?>"
                            class="w-full h-full object-contain group-hover:scale-105 transition duration-500"
                            alt="<?= $project['title']; ?>">
                    </div>

                    <h3 class="mt-4 text-lg font-semibold !text-black line-clamp-2">
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
<style>
    .filterBtn {
        padding: 6px 18px;
        border-radius: 9999px;
        font-size: 14px;
        font-weight: 600;
        background: #9ca3af10;
        color: #404040;
        transition: all 0.3s;
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
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        const filterButtons = document.querySelectorAll(".filterBtn");
        const projectItems = document.querySelectorAll(".projectItem");

        filterButtons.forEach(btn => {
            btn.addEventListener("click", () => {

                // active button
                filterButtons.forEach(b => b.classList.remove("active-filter"));
                btn.classList.add("active-filter");

                const filter = btn.dataset.filter;

                projectItems.forEach(item => {
                    const category = item.dataset.category;

                    if (filter === "all" || category === filter) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });

            });
        });

    });
</script>