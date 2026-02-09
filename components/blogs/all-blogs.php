<?php
$categories = ["All", "Web Development", "Digital Marketing", "SEO", "UI/UX", "Technology", "Web Development", "Digital Marketing", "SEO", "UI/UX", "Technology"];

$blogs = [
    [
        "title" => "Why Every Business Needs a High-Performance Website",
        "excerpt" => "Learn how a fast, responsive website improves conversions and brand trust.",
        "category" => "Web Development",
        "date" => "Jan 10, 2026",
        "author" => "Websolvit Team"
    ],
    [
        "title" => "SEO Best Practices to Rank Higher in 2026",
        "excerpt" => "Practical SEO strategies that help businesses grow organic traffic.",
        "category" => "SEO",
        "date" => "Jan 18, 2026",
        "author" => "Marketing Team"
    ],
    [
        "title" => "UI/UX Design Trends You Should Follow",
        "excerpt" => "Modern UI/UX trends that enhance user engagement and usability.",
        "category" => "UI/UX",
        "date" => "Jan 22, 2026",
        "author" => "Design Team"
    ],
    [
        "title" => "Google Ads vs Facebook Ads: Which is Better?",
        "excerpt" => "A comparison to help you choose the right paid marketing platform.",
        "category" => "Digital Marketing",
        "date" => "Jan 28, 2026",
        "author" => "Growth Team"
    ],
    [
        "title" => "How AI is Transforming Web Technologies",
        "excerpt" => "Explore how artificial intelligence is reshaping modern web development.",
        "category" => "Technology",
        "date" => "Feb 02, 2026",
        "author" => "Tech Team"
    ],
];
?>
<!-- Blogs Page -->
<section class="w-full bg-white py-14">
    <div class="max-w-7xl mx-auto px-4 md:px-10">

        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h1 class="text-3xl md:text-4xl font-semibold text-black-secondary uppercase">
                Digital <span class="text-red-secondary">Blog's</span>
            </h1>
            <h2 class="text-xl md:text-2xl leading-snug mt-4 text-black-secondary">
                Insights, tips, and trends from the world of technology and digital growth.
            </h2>
        </div>

        <!-- Filters -->
        <div class="flex flex-col md:flex-row gap-4 justify-between items-center mb-10">

            <!-- Search -->
            <input
                id="blogSearch"
                type="text"
                placeholder="Search blogs..."
                class="w-full md:w-80 px-4 py-3 rounded-lg border border-white-secondary
                focus:outline-none focus:border-red-secondary">

            <!-- Category Filter -->
            <div class="w-full flex-1 overflow-x-auto flex gap-1.5 md:gap-3 [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
                <?php foreach ($categories as $cat) { ?>
                    <button
                        class="blog-filter px-4 py-2 rounded-full border text-sm text-nowrap font-medium
                        <?= $cat === 'All' ? 'bg-red-secondary !text-white' : ''; ?>"
                        data-category="<?= $cat; ?>">
                        <?= $cat; ?>
                    </button>
                <?php } ?>
            </div>
        </div>

        <!-- Blog Grid -->
        <div
            id="blogGrid"
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-h-[60vh] overflow-y-auto [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">

            <?php foreach ($blogs as $blog) { ?>
                <div
                    class="blog-card bg-white border rounded-xl p-5
                    hover:shadow-lg transition-all duration-300"
                    data-category="<?= $blog['category']; ?>">

                    <span
                        class="inline-block mb-3 text-xs font-semibold text-red-secondary">
                        <?= htmlspecialchars($blog['category']); ?>
                    </span>

                    <h3 class="text-lg font-semibold mb-2">
                        <?= htmlspecialchars($blog['title']); ?>
                    </h3>

                    <p class="text-black-secondary text-sm mb-4">
                        <?= htmlspecialchars($blog['excerpt']); ?>
                    </p>

                    <div class="text-xs text-gray-500 flex justify-between">
                        <span><?= $blog['author']; ?></span>
                        <span><?= $blog['date']; ?></span>
                    </div>

                </div>
            <?php } ?>

        </div>

    </div>
</section>
<script>
    const searchInput = document.getElementById("blogSearch");
    const filterButtons = document.querySelectorAll(".blog-filter");
    const blogCards = document.querySelectorAll(".blog-card");

    // Search
    searchInput.addEventListener("input", () => {


        blogCards.forEach(card => {
            const text = card.innerText.toLowerCase();
            card.style.display = text.includes(query) ? "block" : "none";
        });
    });

    // Category Filter
    filterButtons.forEach(btn => {
        btn.addEventListener("click", () => {

            filterButtons.forEach(b => b.classList.remove("bg-red-secondary", "!text-white"));
            btn.classList.add("bg-red-secondary", "!text-white");

            const category = btn.dataset.category;

            blogCards.forEach(card => {
                if (category === "All" || card.dataset.category === category) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            });
        });
    });
</script>