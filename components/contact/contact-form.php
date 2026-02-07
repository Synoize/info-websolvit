<!-- Contact Map & Form Section -->
<section class="w-full !bg-white py-12 border-t-2 border-dashed border-white-secondary/10">
    <div class="max-w-7xl mx-auto px-4 md:px-10">

        <!-- Heading -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-semibold text-black-secondary uppercase">
                Contact <span class="text-red-secondary">Us</span>
            </h2>
            <h2 class="max-w-2xl mx-auto text-xl md:text-2xl leading-snug mt-4 text-black-secondary">
                Tell us about your idea and we’ll help you turn it into a powerful digital solution.
            </h2>
        </div>

        <!-- Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-20 items-stretch">

            <!-- Left: Map -->
            <div class="rounded-2xl overflow-hidden border border-white-secondary/10">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.6305462047576!2d79.09403327503314!3d21.087413280576644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4bf5c8fff275f%3A0xff0af61ef494a10c!2sWebsolvit!5e0!3m2!1sen!2sin!4v1770288408594!5m2!1sen!2sin"  allowfullscreen="true"
                    class="w-full h-[320px] md:h-full border-0"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <!-- Right: Contact Form -->
            <div class="bg-white rounded-lg p-6 md:p-8 border border-white-secondary">
                <form action="contact-submit.php" method="POST" class="space-y-4">

                    <div>
                        <label class="text-sm font-medium text-black-secondary">Full Name</label>
                        <input type="text" name="name" placeholder="Your name" required
                            class="mt-2 w-full px-4 py-2 rounded-md border border-white-secondary
                            focus:outline-none focus:border focus:border-red-secondary">
                    </div>

                    <div>
                        <label class="text-sm font-medium text-black-secondary">Email Address</label>
                        <input type="email" name="email" placeholder="Your email"
                            class="mt-2 w-full px-4 py-2 rounded-md border border-white-secondary
                            focus:outline-none focus:border focus:border-red-secondary">
                    </div>

                    <div>
                        <label class="text-sm font-medium text-black-secondary">Phone Number</label>
                        <input type="tel" name="phone" placeholder="Your phone" required
                            class="mt-2 w-full px-4 py-2 rounded-md border border-white-secondary
                            focus:outline-none focus:border focus:border-red-secondary">
                    </div>

                    <div>
                        <label class="text-sm font-medium text-black-secondary">Message</label>
                        <textarea name="message" rows="3" placeholder="Briefly explain about your query" required
                            class="mt-2 w-full px-4 py-2 rounded-md border border-white-secondary
                            focus:outline-none focus:border focus:border-red-secondary"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-red-primary/90 !text-white py-3 rounded-md hover:bg-red-primary/80 transition cursor-pointer">
                        Send Message
                    </button>

                </form>
            </div>

        </div>
    </div>
</section>