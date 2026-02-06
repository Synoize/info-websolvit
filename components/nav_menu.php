<!-- Menu -->
<nav class="hidden lg:flex items-center gap-10 text-sm font-medium text-black-secondary">

    <a href="<?= url('/'); ?>" class="hover:text-white-secondary">Home</a>

    <!-- Services -->
    <div class="group">
        <button class="flex items-center gap-1 group-hover:text-white-secondary">
            Services
            <i data-lucide="chevron-down" class="w-4 h-4 text-white-secondary group-hover:text-black-secondary"></i>
        </button>

        <!-- Mega Menu -->
        <div class="absolute left-0 top-30 w-screen bg-white border-b opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-40">

            <div class="max-w-7xl mx-auto px-10 py-12  flex flex-col items-start">
                <div class="grid grid-cols-12 gap-12">

                    <!-- LEFT -->
                    <div class="col-span-8 grid grid-cols-3 gap-10">

                        <div>
                            <h4 class="mb-3 text-black-secondary text-lg">SEO & Growth</h4>
                            <ul class="space-y-2 text-sm text-black-secondary">
                                <li>Search Engine Optimization</li>
                                <li>Local SEO</li>
                                <li>Website Audit</li>
                            </ul>
                        </div>

                        <div>
                            <h4 class="mb-3 text-black-secondary text-lg">Paid Marketing</h4>
                            <ul class="space-y-2 text-sm text-black-secondary">
                                <li>Google Ads</li>
                                <li>Meta Ads (Facebook & Instagram)</li>
                                <li>Lead Generation Campaigns</li>
                            </ul>
                        </div>

                        <div>
                            <h4 class="mb-3 text-black-secondary text-lg">Social & Content</h4>
                            <ul class="space-y-2 text-sm text-black-secondary">
                                <li>Social Media Marketing</li>
                                <li>Content Marketing</li>
                                <li>Brand Strategy</li>
                            </ul>
                        </div>

                    </div>

                    <!-- RIGHT -->
                    <div class="col-span-4 grid grid-cols-2 gap-6">

                        <div class="border rounded-xl overflow-hidden">
                            <img src="<?= asset('assets/carousel/_2.jpg'); ?>" class="h-32 w-full object-cover">
                            <div class="p-3 text-xs">
                                <p class="font-semibold">High ROI</p>
                                <p class="text-gray-500">Performance Marketing</p>
                            </div>
                        </div>

                        <div class="border rounded-xl overflow-hidden">
                            <img src="<?= asset('assets/carousel/_1.jpg'); ?>" class="h-32 w-full object-cover">
                            <div class="p-3 text-xs">
                                <p class="font-semibold">Growth Focused</p>
                                <p class="text-gray-500">Digital Strategies</p>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- View All -->
                <a href="<?= url('services'); ?>"
                    class="group/viewall flex items-center gap-2 px-6 py-3 mt-8 rounded-full !text-white bg-red-primary/70 hover:bg-red-secondary transition-all duration-300">
                    <span class="text-xs">See All Services</span>
                    <i data-lucide="arrow-right"
                        class="w-4 h-4 transition-transform duration-300 group-hover/viewall:translate-x-1"></i>
                </a>

            </div>
        </div>
    </div>

    <!-- Our Work -->
    <a href="<?= url('projects'); ?>" class="hover:text-white-secondary">Our Work</a>

    <!-- More -->
    <div class="group">
        <button class="flex items-center gap-1 group-hover:text-white-secondary">
            More
            <i data-lucide="chevron-down" class="w-4 h-4 text-white-secondary group-hover:text-black-secondary"></i>
        </button>

        <div class="absolute left-0 top-30 w-screen bg-white border-b opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-40">
            <div class="max-w-7xl mx-auto px-10 py-12">
                <div class="grid grid-cols-3 gap-10 text-sm text-black-secondary">

                    <a href="<?= url('info'); ?>">About Websolvit</a>
                    <a href="<?= url('blogs'); ?>">Blog & Insights</a>
                    <a href="<?= url('careers'); ?>">Careers</a>
                    <a href="<?= url('testimonials'); ?>">Client Testimonials</a>
                    <a href="<?= url('contact'); ?>">Contact Us</a>

                </div>
            </div>
        </div>
    </div>

    <!-- Help -->
    <a href="<?= url('support'); ?>" class="hover:text-white-secondary">Support</a>

</nav>