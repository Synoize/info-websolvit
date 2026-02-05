<section id="apply" class="w-full !bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-10 flex flex-col md:flex-row items-center md:gap-8 border-t-2 border-white-secondary border-dashed pt-6 md:pt-0">

        <!-- Left Image -->
        <div class="md:w-1/2 w-full p-4 md:p-0">
            <img src="../assets/careers/hiring.png" alt="Join WebSolvit Team"
                class="w-full h-48 md:h-auto rounded-lg md:rounded-none object-cover" />
        </div>

        <!-- Right Form -->
        <div class="md:w-2/3 w-full h-full p-4 md:p-12 space-y-8 text-black-secondary">

            <!-- Heading -->
            <div>
                <h4 class="text-sm font-bold text-black-secondary uppercase tracking-wide">
                    We Are <span class="text-red-secondary">Hiring</span>
                </h4>

                <h2 class="text-3xl md:text-4xl leading-snug mt-4">
                    Join Our Team
                </h2>

                <p class="mt-4">
                    At <strong>WebSolvit</strong>, we create digital solutions that help brands grow.
                    We’re looking for passionate people who love technology and problem-solving.
                </p>
            </div>

            <!-- Form -->
            <form class="space-y-4">

                <!-- Name & Phone -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="flex-1">
                        <label class="block mb-1">Name*</label>
                        <input type="text" placeholder="Your name"
                            class="w-full px-4 py-2 border rounded-md outline-none focus:border-red-secondary"
                            required>
                    </div>
                    <div class="flex-1">
                        <label class="block mb-1">Phone*</label>
                        <input type="tel" placeholder="Your phone"
                            class="w-full px-4 py-2 border rounded-md outline-none focus:border-red-secondary"
                            required>
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label class="block mb-1">Email*</label>
                    <input type="email" placeholder="Your email"
                        class="w-full px-4 py-2 border rounded-md outline-none focus:border-red-secondary"
                        required>
                </div>

                <!-- Applying For -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="flex-1">
                        <label class="block mb-1">Applying For*</label>
                        <select
                            class="w-full px-4 py-2 border rounded-md outline-none focus:border-red-secondary"
                            required>
                            <option value="">Select Position</option>
                            <option>Frontend Developer</option>
                            <option>Backend Developer</option>
                            <option>Full Stack Developer</option>
                            <option>UI/UX Designer</option>
                            <option>Digital Marketer</option>
                            <option>Intern</option>
                        </select>
                    </div>

                    <div class="flex-1">
                        <label class="block mb-1">Current Location*</label>
                        <input type="text" placeholder="City, Country"
                            class="w-full px-4 py-2 border rounded-md outline-none focus:border-red-secondary"
                            required>
                    </div>
                </div>

                <!-- Portfolio -->
                <div>
                    <label class="block mb-1">Portfolio / GitHub / LinkedIn</label>
                    <input type="url" placeholder="https://wwww.linkedin.com/in/yourself"
                        class="w-full px-4 py-2 border rounded-md outline-none focus:border-red-secondary">
                </div>

                <!-- Message -->
                <div>
                    <label class="block mb-1">Message</label>
                    <textarea rows="3" placeholder="Briefly tell us about yourself"
                        class="w-full px-4 py-2 border rounded-md outline-none focus:border-red-secondary"></textarea>
                </div>

                <!-- Resume -->
                <div>
                    <label class="block mb-1">Attach Resume*</label>
                    <div
                        class="w-full border-2 border-dashed p-4 rounded-md text-center cursor-pointer hover:bg-white-secondary/10">
                        <p class="text-white-secondary">Click to upload or drag files here</p>
                        <input type="file" class="hidden" required>
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-red-primary/90 !text-white py-3 rounded-md hover:bg-red-primary/80 transition cursor-pointer">
                    Submit Application
                </button>
            </form>


            <!-- Footer Note -->
            <p class="text-xs text-white-secondary">
                By submitting this form, you agree to WebSolvit’s
                <a href="#" class="underline text-blue-600">Privacy Policy</a>
                and
                <a href="#" class="underline text-blue-600">Terms of Service</a>.
                Your information will be used solely for recruitment purposes.
            </p>

        </div>
    </div>
</section>