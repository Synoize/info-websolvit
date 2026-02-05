<?php
$helpCategories = [
    [
        "icon" => "🛡️",
        "title" => "Fraud & Protection",
        "desc"  => "Protecting your websites, applications, and digital assets from unauthorized access."
    ],
    [
        "icon" => "🔐",
        "title" => "Privacy & Security",
        "desc"  => "Ensuring data privacy, security standards, and safe handling of sensitive information."
    ],
    [
        "icon" => "👤",
        "title" => "Managing My Account",
        "desc"  => "Guidance on account settings, services, subscriptions, and support requests."
    ],
];

$helpSidebar = [
    "getting-started" => "Getting Started",
    "account"        => "Account Setup & Management",
    "billing"        => "Billing & Payments",
    "technical"      => "Troubleshooting & Technical Support",
    "security"       => "Privacy & Security",
];

$helpContent = [
    "getting-started" => [
        "title" => "Getting Started",
        "content" => "
            <p class='text-black-secondary'>
                Welcome to Websolvit! This guide helps you get started with our digital services smoothly.
            </p>
            <ul class='list-disc pl-5 mt-3 space-y-1 text-black-secondary'>
                <li>Create your Websolvit account</li>
                <li>Verify your email address</li>
                <li>Explore available services</li>
                <li>Raise a support request if needed</li>
            </ul>
        "
    ],
    "account" => [
        "title" => "Account Setup & Management",
        "content" => "<p class='text-black-secondary'>
            Update personal details, manage services, reset passwords,
            and configure security settings.
        </p>"
    ],
    "billing" => [
        "title" => "Billing & Payments",
        "content" => "<p class='text-black-secondary'>
            View invoices, payment history, service renewals,
            and billing-related queries.
        </p>"
    ],
    "technical" => [
        "title" => "Troubleshooting & Technical Support",
        "content" => "<p class='text-black-secondary'>
            Get help with website issues, application bugs,
            hosting problems, and integrations.
        </p>"
    ],
    "security" => [
        "title" => "Privacy & Security",
        "content" => "<p class='text-black-secondary'>
            Learn how Websolvit protects your data
            and maintains confidentiality.
        </p>"
    ],
];
?>
<!-- Help Centre -->
<section class="w-full bg-white py-12">
    <div class="max-w-7xl mx-auto px-4 md:px-10">

        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-semibold text-black-secondary uppercase">
                Help <span class="text-red-secondary">Centre</span>
            </h1>
            <p class="mt-4 text-black-secondary">
                We understand you may have questions while using our services.
                Websolvit is here to assist you every step of the way.
            </p>

            <!-- Search -->
            <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-center">
                <div class="space-x-2 w-full flex flex-row">
                    <input type="text" placeholder="Type a keyword"
                        class="w-full px-4 py-3 rounded-lg border border-white-secondary
                    focus:outline-none focus:border-red-secondary">

                    <select class="px-4 py-3 rounded-lg border border-white-secondary focus:border-red-secondary">
                        <option>General</option>
                        <option>Account</option>
                        <option>Billing</option>
                        <option>Security</option>
                    </select>
                </div>

                <button
                    class="px-6 py-3 rounded-lg bg-red-primary/90 !text-white hover:bg-red-primary/80 transition text-nowrap">
                    Find Query
                </button>
            </div>
        </div>

        <!-- Category Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-14">
            <?php foreach ($helpCategories as $cat) { ?>
                <div
                    class="bg-red-primary/10 p-6 rounded-2xl text-center transition-all duration-300 hover:-translate-y-1">
                    <div class="text-4xl mb-5"><?= $cat['icon']; ?></div>
                    <h3 class="font-semibold mb-2 text-lg md:text-xl text-red-secondary">
                        <?= htmlspecialchars($cat['title']); ?>
                    </h3>
                    <p class="text-base text-black-secondary">
                        <?= htmlspecialchars($cat['desc']); ?>
                    </p>
                </div>
            <?php } ?>
        </div>

        <!-- Content Area -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">

            <!-- Sidebar -->
            <aside class="border rounded-xl p-5 space-y-2">
                <?php foreach ($helpSidebar as $key => $label) { ?>
                    <button
                        class="side-link w-full text-left px-4 py-2 rounded-md font-medium transition
                        <?= $key === 'getting-started' ? 'bg-red-secondary !text-white' : ''; ?>"
                        data-target="<?= $key; ?>">
                        <?= $label; ?>
                    </button>
                <?php } ?>
            </aside>

            <!-- Content -->
            <div class="md:col-span-2 bg-white-secondary/10 p-6 md:p-8 rounded-xl relative overflow-hidden">
                <?php foreach ($helpContent as $id => $item) { ?>
                    <div
                        class="content-panel <?= $id === 'getting-started' ? 'relative opacity-100 translate-y-0' : 'absolute inset-0 opacity-0 translate-y-4'; ?> transition-all duration-300"
                        id="<?= $id; ?>">
                        <h2 class="text-2xl font-semibold mb-4">
                            <?= htmlspecialchars($item['title']); ?>
                        </h2>
                        <?= $item['content']; ?>
                    </div>
                <?php } ?>
            </div>

        </div>

    </div>
</section>
<script>
    const links = document.querySelectorAll(".side-link");
    const panels = document.querySelectorAll(".content-panel");

    links.forEach(link => {
        link.addEventListener("click", () => {

            links.forEach(l => l.classList.remove("bg-red-secondary", "!text-white"));
            link.classList.add("bg-red-secondary", "!text-white");

            const target = link.dataset.target;

            panels.forEach(panel => {
                panel.classList.add("opacity-0", "translate-y-4", "absolute");
                panel.classList.remove("opacity-100", "translate-y-0", "relative");

                if (panel.id === target) {
                    panel.classList.remove("opacity-0", "translate-y-4", "absolute");
                    panel.classList.add("opacity-100", "translate-y-0", "relative");
                }
            });
        });
    });
</script>