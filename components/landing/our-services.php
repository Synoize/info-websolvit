<?php
$services = [

    [
        "img" => "assets/projects/websites/_1.png",
        "title" => "Small Business Website",
        "category" => "website",
        "features" => [
            "Professional Business Design",
            "Mobile Responsive Layout",
            "Fast & Secure Website"
        ],
        "off" => "30%",
        "badge" => "Popular",
    ],

    [
        "img" => "assets/projects/websites/_1.png",
        "title" => "E-Commerce Website",
        "category" => "ecommerce",
        "features" => [
            "Product & Cart System",
            "Secure Payment Gateway",
            "Order Management"
        ],
        "off" => "30%",
        "badge" => "High ROI",
    ],

    [
        "img" => "assets/projects/seo/seo.png",
        "title" => "Search Engine Optimization (SEO)",
        "category" => "seo",
        "features" => [
            "On-Page & Technical SEO",
            "Keyword Ranking Growth",
            "Organic Traffic Boost"
        ],
        "off" => "25%",
        "badge" => "Best Seller",
    ],

    [
        "img" => "assets/projects/marketing/social-media.png",
        "title" => "Social Media Marketing",
        "category" => "marketing",
        "features" => [
            "Content Creation",
            "Paid Ads & Reels",
            "Lead Generation"
        ],
        "off" => "35%",
        "badge" => "High ROI",
    ],

    [
        "img" => "assets/projects/ads/lead-generation.png",
        "title" => "Lead Generation",
        "category" => "advertising",
        "features" => [
            "Google & Facebook Ads",
            "Landing Pages",
            "High Quality Leads"
        ],
        "off" => "40%",
        "badge" => "Hot Deal",
    ],

    [
        "img" => "assets/projects/ads/paid-ads.png",
        "title" => "Paid Advertising",
        "category" => "advertising",
        "features" => [
            "Google, Meta & YouTube Ads",
            "Audience Targeting",
            "ROI Tracking"
        ],
        "off" => "35%",
        "badge" => "High ROI",
    ],

    [
        "img" => "assets/projects/design/graphic.png",
        "title" => "Graphic Design",
        "category" => "design",
        "features" => [
            "Logo & Branding",
            "Social Media Creatives",
            "Ad & Print Designs"
        ],
        "off" => "20%",
        "badge" => "",
    ],

    [
        "img" => "assets/projects/dev/software.png",
        "title" => "Software & App Development",
        "category" => "development",
        "features" => [
            "Custom Software Solutions",
            "Web & App Development",
            "Secure & Scalable Code"
        ],
        "off" => "25%",
        "badge" => "Custom Build",
    ],


];
?>

<!-- Our Service's Section Start -->
<section class="w-full !bg-white py-6 ">
    <div class="max-w-7xl mx-auto px-4 md:px-10 flex flex-col">

        <!-- Heading -->
        <div class="text-center md:text-left mb-12">
            <h4 class="text-3xl md:text-4xl font-semibold text-black-secondary uppercase tracking-wide">
                Our <span class="text-red-secondary">Service's</span>
            </h4>

            <h2 class="text-xl md:text-2xl leading-snug mt-4 text-black-secondary">
                Smart digital solutions for modern businesses.
            </h2>
        </div>

        <!-- Filters -->
        <!-- <div class="flex flex-wrap gap-3 mb-8">
            <button class="filterBtn active-filter" data-filter="all">All</button>
            <button class="filterBtn" data-filter="website">Website</button>
            <button class="filterBtn" data-filter="seo">SEO</button>
            <button class="filterBtn" data-filter="graphic">Graphic</button>
            <button class="filterBtn" data-filter="marketing">Marketing</button>
        </div> -->

        <!-- Services -->
        <div
            class="grid grid-cols-2 lg:grid-cols-4 gap-4">

            <?php foreach ($services as $service) { ?>
                <div
                    class="group sm:snap-start sm:flex-shrink-0 sm:w-[280px] relative"
                    data-category="<?= $service['category']; ?>">

                    <!-- Badge -->
                    <?php if (!empty($service['badge'])) { ?>
                        <span class="absolute top-3 left-3 bg-red-primary/70 text-white text-[11px] font-semibold px-3 py-1 rounded-full z-10">
                            <?= $service['badge']; ?>
                        </span>
                    <?php } ?>

                    <!-- Offer -->
                    <span class="absolute top-3 right-3 bg-white-secondary/30 text-red-secondary text-xs font-bold w-12 h-12 text-center flex flex-col justify-center items-center rounded-full z-10">
                        <?= $service['off']; ?><span>OFF</span>
                    </span>

                    <!-- Image -->
                    <div class="bg-white-secondary/10 rounded-2xl overflow-hidden h-[180px] sm:h-[260px] flex items-center justify-center">
                        <img src="<?= asset($service['img']); ?>"
                            class="w-full h-full object-contain group-hover:scale-105 transition duration-500"
                            alt="<?= $service['title']; ?>">
                    </div>

                    <!-- Title -->
                    <h3 class="mt-4 text-lg font-semibold text-black line-clamp-1">
                        <?= $service['title']; ?>
                    </h3>

                    <div class="mt-3 border-t border-secondary-white"></div>

                    <!-- Features -->
                    <ul class="mt-3 space-y-1 text-xs sm:text-sm">
                        <?php foreach ($service['features'] as $feature) { ?>
                            <li class="flex items-center gap-2 text-secondary-black">
                                <i data-lucide="check" class="w-4 h-4 text-green-600"></i>
                                <p class="line-clamp-1"><?= $feature; ?></p>

                            </li>
                        <?php } ?>
                    </ul>

                    <!-- CTA -->
                    <a href="<?= url('services/' . $service['category']); ?>"
                        class="group flex items-center justify-center gap-2 px-5 mt-4 font-semibold !text-white bg-red-primary/80 py-3 rounded-lg hover:bg-red-primary/90 transition-all duration-300">
                        Know More
                        <i data-lucide="arrow-right"
                            class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>

                </div>
            <?php } ?>

        </div>

        <!-- View All -->
        <a href="<?= url('services'); ?>"
            class="group flex items-center self-center gap-2 px-6 py-3 mt-12 rounded-full !text-white bg-red-primary/70 hover:bg-red-primary/90 transition-all duration-300">
            <span class="text-xs">See All Services</span>
            <i data-lucide="arrow-right"
                class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"></i>
        </a>

    </div>
</section>
<!-- Our Service's Section End -->