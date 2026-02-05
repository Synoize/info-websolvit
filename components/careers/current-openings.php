<?php
$currentOpenings = [
    [
        "role" => "Frontend Developer",
        "stack" => "React, Next.js, Tailwind CSS",
        "experience" => "1–3 Years",
        "mode" => "Remote",
        "location" => "Global"
    ],
    [
        "role" => "Backend Developer",
        "stack" => "Node.js, PHP, REST APIs",
        "experience" => "1–4 Years",
        "mode" => "Hybrid",
        "location" => "India"
    ],
    [
        "role" => "UI/UX Designer",
        "stack" => "Figma, Wireframing, Prototyping",
        "experience" => "0–2 Years",
        "mode" => "Remote",
        "location" => "Global"
    ],
    [
        "role" => "Digital Marketing Executive",
        "stack" => "SEO, Google Ads, Social Media",
        "experience" => "0–2 Years",
        "mode" => "Onsite",
        "location" => "India"
    ],
];
?>

<section class="w-full !bg-white py-12">
    <div class="max-w-7xl mx-auto px-4 md:px-10">

        <!-- Heading -->
        <div class="text-center md:text-left mb-12">
            <h4 class="text-3xl md:text-4xl font-semibold text-black-secondary uppercase tracking-wide">
                Current <span class="text-red-secondary">Openings</span>
            </h4>

            <h2 class="text-xl md:text-2xl leading-snug mt-4 text-black-secondary">
                Join our team and build your career with impactful work.
            </h2>
        </div>

        <!-- Scrollable Cards -->
        <div id="openingScroll"
            class="flex gap-4 md:gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory pb-4
            [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">

            <?php foreach ($currentOpenings as $job) { ?>
                <div class="snap-start flex-shrink-0 w-[260px] sm:w-[280px] md:w-[300px]">

                    <div
                        class="relative flex flex-col justify-between rounded-3xl h-[300px]
            bg-gradient-to-br from-slate-50 to-white p-6
            border border-slate-200/60
            hover:shadow-lg transition-all duration-300">

                        <!-- Content -->
                        <div>
                            <!-- Role -->
                            <h3 class="text-lg font-semibold text-black-secondary leading-snug">
                                <?= htmlspecialchars($job['role']); ?>
                            </h3>

                            <!-- Stack -->
                            <p class="mt-2 text-sm text-gray-600">
                                <?= htmlspecialchars($job['stack']); ?>
                            </p>

                            <!-- Divider -->
                            <div class="my-4 h-px bg-slate-200"></div>

                            <!-- Details -->
                            <ul class="space-y-2 text-sm text-black-secondary">
                                <li class="flex justify-between">
                                    <span class="text-gray-500">Experience</span>
                                    <span class="font-medium"><?= $job['experience']; ?></span>
                                </li>
                                <li class="flex justify-between">
                                    <span class="text-gray-500">Mode</span>
                                    <span class="font-medium"><?= $job['mode']; ?></span>
                                </li>
                                <li class="flex justify-between">
                                    <span class="text-gray-500">Location</span>
                                    <span class="font-medium"><?= $job['location']; ?></span>
                                </li>
                            </ul>
                        </div>

                        <!-- CTA -->
                        <a href="#apply"
                            class="group mt-6 flex items-center justify-center gap-2 py-3 rounded-full
               text-xs font-semibold !text-white
               bg-red-primary hover:bg-red-primary/90
               transition-all duration-300">
                            Apply Now
                            <i data-lucide="arrow-right"
                                class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1"></i>
                        </a>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<style>
    #openingScroll {
        cursor: grab;
    }

    #openingScroll.grabbing {
        cursor: grabbing;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {

        const openingScroll = document.getElementById("openingScroll");
        const applyLinks = openingScroll.querySelectorAll("a");

        let isDown = false;
        let startX;
        let scrollLeft;
        let moved = false;

        /* ---------------- DRAG SCROLL ---------------- */
        openingScroll.addEventListener("mousedown", (e) => {
            isDown = true;
            moved = false;
            startX = e.pageX - openingScroll.offsetLeft;
            scrollLeft = openingScroll.scrollLeft;
            openingScroll.classList.add("grabbing");
        });

        openingScroll.addEventListener("mousemove", (e) => {
            if (!isDown) return;
            const x = e.pageX - openingScroll.offsetLeft;
            const walk = x - startX;
            if (Math.abs(walk) > 5) moved = true;
            openingScroll.scrollLeft = scrollLeft - walk;
        });

        ["mouseup", "mouseleave"].forEach(evt => {
            openingScroll.addEventListener(evt, () => {
                isDown = false;
                openingScroll.classList.remove("grabbing");
            });
        });

        /* ---------------- PREVENT CLICK ON DRAG ---------------- */
        applyLinks.forEach(link => {
            link.addEventListener("click", e => {
                if (moved) {
                    e.preventDefault();
                    e.stopPropagation();
                }
            });
        });

        /* ---------------- WHEEL SCROLL (DESKTOP ONLY) ---------------- */
        openingScroll.addEventListener("wheel", e => {
            if (window.innerWidth < 640) return;
            e.preventDefault();
            openingScroll.scrollLeft += e.deltaY;
        }, {
            passive: false
        });

    });
</script>