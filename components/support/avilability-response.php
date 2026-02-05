<?php
$supportChannels = [
    [
        "icon" => "📧",
        "title" => "Email Support",
        "desc"  => "Ideal for detailed issues, project-related queries, and non-urgent support requests.",
        "extra" => "support@websolvit.com"
    ],
    [
        "icon" => "🎫",
        "title" => "Support Tickets",
        "desc"  => "Track, update, and manage your issues through our structured support ticket system.",
        "extra" => "Response within 24 hours"
    ],
    [
        "icon" => "⚡",
        "title" => "Priority Support",
        "desc"  => "Dedicated and faster support for AMC and enterprise clients with critical business needs.",
        "extra" => "SLA-based response"
    ],
];

$responseTimes = [
    [
        "title" => "General Queries",
        "desc"  => "Initial response within 24 hours during business days."
    ],
    [
        "title" => "Technical Issues",
        "desc"  => "Response within 12–24 hours depending on severity."
    ],
    [
        "title" => "Critical Issues",
        "desc"  => "Immediate attention for live or business-impacting problems."
    ],
];
?>
<!-- Support Channels Section -->
<section class="w-full !bg-white py-12">
    <div class="max-w-7xl mx-auto px-4 md:px-10">

        <!-- Heading -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-black-secondary">
                How You Can <span class="text-red-secondary">Reach Support</span>
            </h2>
            <p class="mt-4 text-black-secondary">
                Choose the support channel that best fits your needs. Our team is committed
                to responding quickly and efficiently.
            </p>
        </div>

        <!-- Support Channels -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach ($supportChannels as $channel) { ?>
                <div
                    class="bg-white-secondary/10 p-6 rounded-2xl border
                    hover:shadow-lg transition-all duration-300">

                    <div class="text-3xl mb-3">
                        <?= $channel['icon']; ?>
                    </div>

                    <h3 class="text-lg md:text-xl font-semibold mb-2 text-red-secondary">
                        <?= htmlspecialchars($channel['title']); ?>
                    </h3>

                    <p class="text-black-secondary text-base">
                        <?= htmlspecialchars($channel['desc']); ?>
                    </p>

                    <p class="mt-4 text-sm font-medium text-black-secondary">
                        <?= htmlspecialchars($channel['extra']); ?>
                    </p>
                </div>
            <?php } ?>
        </div>

        <!-- Response Time -->
        <div class="mt-16 !bg-red-primary/10 rounded-2xl p-6 md:p-10 border">
            <h3 class="text-2xl font-semibold mb-6 text-black-secondary">
                Support Response Time
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php foreach ($responseTimes as $time) { ?>
                    <div class="p-5 rounded-xl bg-white">
                        <h4 class="font-semibold text-red-secondary text-lg md:text-xl">
                            <?= htmlspecialchars($time['title']); ?>
                        </h4>
                        <p class="mt-2 text-base text-black-secondary">
                            <?= htmlspecialchars($time['desc']); ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
</section>
