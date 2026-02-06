<?php
$timelineEvents = [
    [
        "image" => "https://lottie.host/embed/222e2a20-75e6-47eb-a391-8710acf26e32/vzgLl7Tg08.lottie",
        "title" => "Website & App Design and Development",
        "description" => "Modern, responsive websites and scalable web & mobile applications designed for performance, usability, and business growth."
    ],
    [
        "image" => "https://lottie.host/embed/1b7ca0aa-8d4a-4577-ac81-33151dbfb223/jgGp3W0WSj.lottie",
        "title" => "Search Engine Optimization (SEO)",
        "description" => "On-page, off-page, and technical SEO strategies that improve search rankings, increase organic traffic, and drive qualified leads."
    ],
    [
        "image" => "https://lottie.host/embed/8b8bcbf4-7c55-4eb2-ad8e-823534868675/6rBSaCxA5w.lottie",
        "title" => "Google & Facebook Ads",
        "description" => "High-performing paid advertising campaigns on Google and Meta platforms focused on conversions, ROI, and measurable results."
    ],
    [
        "image" => "https://lottie.host/embed/1e3b0473-7fff-4e86-8497-37655ba0c8cc/uydxY92qLv.lottie",
        "title" => "Social Media Management",
        "description" => "Complete social media handling including content creation, posting, audience engagement, and brand growth strategies."
    ],
    [
        "image" => "https://lottie.host/embed/1e3b0473-7fff-4e86-8497-37655ba0c8cc/uydxY92qLv.lottie",
        "title" => "Influencer Marketing",
        "description" => "Strategic influencer collaborations that build trust, expand reach, and generate authentic brand awareness."
    ],
    [
        "image" => "https://lottie.host/embed/8b8bcbf4-7c55-4eb2-ad8e-823534868675/6rBSaCxA5w.lottie",
        "title" => "Google Business Profile Setup & Optimization",
        "description" => "Professional Google Business Profile creation and optimization to improve local visibility, reviews, and customer reach."
    ],
    [
        "image" => "https://lottie.host/embed/37ef486a-377e-4f2e-8da6-8cd87f581af8/X6xmgUSpF1.lottie",
        "title" => "Complete Digital Marketing Solutions",
        "description" => "End-to-end digital strategies combining ads, SEO, social media, and development to scale brands and maximize ROI."
    ],
];
?>

<section class="w-full py-12 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-10">

        <!-- Heading -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-semibold text-black-secondary uppercase">
                What We <span class="text-red-secondary">Do</span>
            </h2>
            <h2 class="max-w-2xl mx-auto text-xl md:text-2xl leading-snug mt-4 text-black-secondary">
                 End-to-end digital solutions to help your business grow faster and smarter.
            </h2>
        </div>

        <!-- Timeline -->
        <div class="timeline">
            <div class="timeline-line">
                <div class="timeline-progress"></div>
                <div class="timeline-comet"></div>
            </div>

            <?php foreach ($timelineEvents as $index => $event): ?>
                <div class="timeline-item <?= $index % 2 === 0 ? 'left' : 'right'; ?>">
                    <span class="dot"></span>

                    <div class="bg-slate-50 flex flex-col md:flex-row gap-4 p-6 rounded-xl shadow-sm transition-transform duration-200 hover:-translate-y-1">

                        <!-- Media -->
                        <iframe
                            src="<?= htmlspecialchars($event['image']); ?>"
                            class="w-full md:w-1/2 h-40 md:h-48 rounded-lg border-0"
                            loading="lazy">
                        </iframe>

                        <!-- Content -->
                        <div class="flex-1">
                            <h3 class="text-lg md:text-xl font-semibold text-red-secondary mb-2">
                                <?= htmlspecialchars($event['title']); ?>
                            </h3>
                            <p class="text-sm md:text-base text-black-secondary">
                                <?= htmlspecialchars($event['description']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    .timeline {
        position: relative;
        max-width: 1100px;
        margin: auto;
    }

    .timeline-line {
        position: absolute;
        left: 50%;
        top: 0;
        width: 2px;
        height: 100%;
        background: #e5e7eb;
        transform: translateX(-50%);
    }

    .timeline-progress {
        position: absolute;
        top: 0;
        width: 100%;
        height: 0;
        background: #a72a21;
    }

    .timeline-comet {
        position: absolute;
        left: 50%;
        top: 0;
        width: 14px;
        height: 14px;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        background: #fff;
        border: 3px solid #a72a21;
    }

    .timeline-item {
        position: relative;
        width: 50%;
        padding: 30px 40px;
        opacity: 0;
        transform: translateY(40px);
        transition: all 0.6s ease;
    }

    .timeline-item.left {
        left: 0;
    }

    .timeline-item.right {
        left: 50%;
    }

    .timeline-item.active {
        opacity: 1;
        transform: translateY(0);
    }

    .timeline-item .dot {
        position: absolute;
        top: 48px;
        right: -8px;
        width: 16px;
        height: 16px;
        background: #a72a21;
        border: 4px solid #fff;
        border-radius: 50%;
    }

    .timeline-item.right .dot {
        left: -8px;
        right: auto;
    }

    /* Mobile */
    @media (max-width: 768px) {
        .timeline-line {
            left: 20px;
        }

        .timeline-item {
            width: 100%;
            left: 0 !important;
            padding-left: 60px;
        }

        .timeline-item .dot {
            left: 12px;
            right: auto;
        }

        .timeline-item.right .dot {
            left: 12px;
            right: auto;
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const items = document.querySelectorAll(".timeline-item");
        const progress = document.querySelector(".timeline-progress");
        const comet = document.querySelector(".timeline-comet");
        const timeline = document.querySelector(".timeline");

        function updateTimeline() {
            const rect = timeline.getBoundingClientRect();
            const viewHeight = window.innerHeight;

            const visible = Math.min(
                Math.max(viewHeight - rect.top, 0),
                rect.height
            );

            progress.style.height = `${visible}px`;
            comet.style.top = `${visible}px`;

            items.forEach(item => {
                if (item.getBoundingClientRect().top < viewHeight * 0.8) {
                    item.classList.add("active");
                }
            });
        }

        window.addEventListener("scroll", updateTimeline);
        updateTimeline();
    });
</script>