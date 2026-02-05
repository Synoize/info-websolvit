<?php
$contactInfo = [
    "business_hours" => [
        "label" => "Business Hours",
        "time" => "Monday – Saturday<br>10:00 AM – 6:00 PM"
    ],

    "location" => [
        "label" => "Office Location",
        "address" => "Websolvit <br>Besa, Nagpur, Maharashtra India"
    ],

    "contact" => [
        "phone" => "+91 7249899056",
        "email" => "contact@websolvit.com"
    ],

    "socials" => [
        "twitter" => "https://twitter.com/websolvit",
        "whatsapp" => "https://wa.me/7249899056",
        "linkedin" => "https://www.linkedin.com/company/websolvit",
        "email" => "mailto:contact@websolvit.com"
    ]
];
?>
<!-- Get In Touch Section -->
<section class="w-full bg-white py-12">
    <div
        class="max-w-7xl mx-auto px-4 md:px-10 flex flex-col md:flex-row items-center gap-6 md:gap-20">

        <!-- Left: Image -->
        <div class="md:w-1/2 w-full p-4 md:p-0">
            <img loading="lazy" src="../assets/contact/contact.png" alt="Contact Websolvit"
                class="w-full h-auto rounded-xl object-cover" />
        </div>

        <!-- Right: Content -->
        <div class="w-full lg:w-1/2 space-y-6 px-4 md:px-0 md:pt-8">

            <!-- Heading -->
            <div class="text-black-secondary">
                <h4 class="text-sm font-bold uppercase tracking-wide">
                    GET IN <span class="text-red-secondary">TOUCH</span>
                </h4>

                <h2 class="text-3xl md:text-4xl leading-snug mt-4">
                    Let’s build impactful together
                </h2>

                <p class="mt-4">
                    Have a project in mind or need expert digital solutions? Our team at Websolvit is here to help you grow, scale, and succeed.
                </p>
            </div>

            <!-- Info Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-8">

                <!-- Business Hours -->
                <div class="bg-white-secondary/10 hover:bg-white-secondary/15 text-black-secondary p-6 rounded-xl">
                    <div class="flex items-center gap-3 mb-4">
                        <span
                            class="w-12 h-12 rounded-lg border border-white-secondary/30 !bg-white flex justify-center items-center">
                            <i class="fas fa-clock text-red-secondary text-xl"></i>
                        </span>
                        <span class="text-lg font-semibold"><?= $contactInfo['business_hours']['label']; ?></span>
                    </div>
                    <p class="text-sm md:text-base font-light">
                        <?= $contactInfo['business_hours']['time']; ?>
                    </p>
                </div>

                <!-- Location -->
                <div class="bg-white-secondary/10 hover:bg-white-secondary/15 text-black-secondary p-6 rounded-xl">
                    <div class="flex items-center gap-3 mb-4">
                        <span
                            class="w-12 h-12 rounded-lg border border-white-secondary/30 !bg-white flex justify-center items-center">
                            <i class="fas fa-map-marker-alt text-red-secondary text-xl"></i>
                        </span>
                        <span class="text-lg font-semibold"><?= $contactInfo['location']['label']; ?></span>
                    </div>
                    <p class="text-sm md:text-base font-light">
                        <?= $contactInfo['location']['address']; ?>
                    </p>
                </div>

                <!-- Contact Info -->
                <div class="bg-white-secondary/10 hover:bg-white-secondary/15 text-black-secondary p-6 rounded-xl">
                    <div class="flex items-center gap-3 mb-4">
                        <span
                            class="w-12 h-12 rounded-lg border border-white-secondary/30 !bg-white flex justify-center items-center">
                            <i class="fas fa-phone-alt text-red-secondary text-xl"></i>
                        </span>
                        <span class="text-lg font-semibold">Contact Details</span>
                    </div>
                    <p class="text-sm md:text-base font-light">
                        Phone: <?= $contactInfo['contact']['phone']; ?><br>
                        Email:
                        <a href="mailto:<?= $contactInfo['contact']['email']; ?>"
                            class="text-red-primary hover:underline">
                            <?= $contactInfo['contact']['email']; ?>
                        </a>
                    </p>
                </div>

                <!-- Socials -->
                <div class="bg-white-secondary/10 hover:bg-white-secondary/15 text-black-secondary p-6 rounded-xl">
                    <span class="text-lg font-semibold mb-4 block">Follow Websolvit</span>
                    <div class="flex gap-3">
                        <a href="<?= $contactInfo['socials']['twitter']; ?>" target="_blank"
                            class="bg-black !text-white rounded-lg w-11 h-11 flex items-center justify-center hover:scale-110 transition">
                            <i class="fab fa-x-twitter"></i>
                        </a>
                        <a href="<?= $contactInfo['socials']['whatsapp']; ?>" target="_blank"
                            class="bg-green-500 !text-white rounded-lg w-11 h-11 flex items-center justify-center hover:scale-110 transition">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="<?= $contactInfo['socials']['linkedin']; ?>" target="_blank"
                            class="bg-blue-600 !text-white rounded-lg w-11 h-11 flex items-center justify-center hover:scale-110 transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="<?= $contactInfo['socials']['email']; ?>"
                            class="bg-red-500 !text-white rounded-lg w-11 h-11 flex items-center justify-center hover:scale-110 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
