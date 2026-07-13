@extends('app')

@section('title', 'Contact Us - PT. Quana Raya Shakatama')

@section('content')

    <!-- ====== HERO SECTION CONTACT ====== -->
    <section class="relative w-full h-[350px] lg:h-[400px] flex items-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=2070&auto=format&fit=crop"
                alt="Contact Background" class="w-full h-full object-cover object-center">
            <!-- Overlay Hijau Soft (sama konsepnya dengan overlay putih di About/Services) -->
            <div class="absolute inset-0 bg-gradient-to-r from-primary-dark/95 via-primary-dark/85 to-primary-dark/70"></div>
        </div>

        <div class="max-w-[1600px] mx-auto px-4 lg:px-8 w-full relative z-10">
            <div class="lg:w-1/2">
                <span class="text-xs font-bold text-accent-lightgreen tracking-widest uppercase block mb-3">CONTACT US</span>
                <h1 class="text-3xl lg:text-5xl font-extrabold text-white mb-4 leading-tight">
                    Let's Build a Sustainable<br>
                    <span class="text-accent-lightgreen">Future Together.</span>
                </h1>
                <p class="text-sm lg:text-base text-gray-200 leading-relaxed max-w-lg">
                    Have a question, need consultation, or want to explore how we can support your sustainability journey?
                    We're here to help.
                </p>
            </div>
        </div>
    </section>

    <!-- ====== GET IN TOUCH SECTION ====== -->
    <section class="w-full py-16 bg-white">
        <div class="max-w-[1600px] mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">

                <!-- LEFT: Contact Info -->
                <div>
                    <span class="text-xs font-bold text-accent-lightgreen tracking-widest uppercase block mb-2">GET IN
                        TOUCH</span>
                    <h2 class="text-2xl lg:text-3xl font-extrabold text-gray-900 mb-4">We'd Love to Hear from You</h2>
                    <p class="text-sm text-gray-600 leading-relaxed mb-8">
                        Whether you have a question, need consultation, or want to explore potential collaboration, our team
                        is ready to connect.
                    </p>

                    <!-- Contact Details -->
                    <div class="space-y-5 mb-8">
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-location-dot text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">Office Address</h4>
                                <p class="text-xs text-gray-600 leading-relaxed">Citra Indah City – Bukit Anyelir
                                    AE12/3,<br>Bogor – West Java 16914, Indonesia</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-phone text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">Phone</h4>
                                <p class="text-xs text-gray-600">+62 21 39714554</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-brands fa-whatsapp text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">WhatsApp</h4>
                                <p class="text-xs text-gray-600">+62 811 9051196</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-envelope text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">Email</h4>
                                <p class="text-xs text-gray-600">office@qrstama.com</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-globe text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">Website</h4>
                                <p class="text-xs text-gray-600">www.qrstama.com</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-share-nodes text-primary text-sm"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">Social Media</h4>
                                <div class="flex items-center space-x-3 mt-1">
                                    <a href="#" class="text-gray-600 hover:text-primary transition"><i
                                            class="fa-brands fa-linkedin text-lg"></i></a>
                                    <a href="#" class="text-gray-600 hover:text-primary transition"><i
                                            class="fa-brands fa-instagram text-lg"></i></a>
                                    <span class="text-xs text-gray-600 ml-2">Carbontalk.id</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tagline Box -->
                    <div class="bg-gray-50 border-l-4 border-accent-lightgreen p-5 rounded-r-lg">
                        <div class="flex items-start space-x-3">
                            <i class="fa-solid fa-leaf text-accent-lightgreen text-xl mt-1"></i>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">We Care. We Collaborate. We Create Impact.
                                </h4>
                                <p class="text-xs text-gray-600 leading-relaxed">Your sustainability goals are our priority.
                                    Let's turn strategy into measurable action.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: Contact Form -->
                <!-- RIGHT: Contact Form -->
                <div class="bg-gray-50 p-8 lg:p-10 rounded-2xl border border-gray-100">
                    <h3 class="text-lg font-extrabold text-primary-dark mb-6 uppercase tracking-wide">Send Us a Message</h3>

                    <form action="#" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <input type="text" name="name" required placeholder="Full Name *"
                                    class="w-full px-4 py-3.5 rounded-lg border border-gray-200 bg-white text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition">
                            </div>
                            <div>
                                <input type="text" name="company" required placeholder="Company / Organization *"
                                    class="w-full px-4 py-3.5 rounded-lg border border-gray-200 bg-white text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition">
                            </div>
                        </div>

                        <div>
                            <input type="email" name="email" required placeholder="Email Address *"
                                class="w-full px-4 py-3.5 rounded-lg border border-gray-200 bg-white text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition">
                        </div>

                        <div>
                            <input type="tel" name="phone" placeholder="Phone Number"
                                class="w-full px-4 py-3.5 rounded-lg border border-gray-200 bg-white text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition">
                        </div>

                        <div>
                            <input type="text" name="subject" required placeholder="Subject *"
                                class="w-full px-4 py-3.5 rounded-lg border border-gray-200 bg-white text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition">
                        </div>

                        <div>
                            <textarea name="message" rows="5" required placeholder="Your Message *"
                                class="w-full px-4 py-3.5 rounded-lg border border-gray-200 bg-white text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition resize-none"></textarea>
                        </div>

                        <div class="flex items-start space-x-3 pt-2">
                            <input type="checkbox" name="agree" required
                                class="mt-1 w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
                            <label class="text-xs text-gray-600 leading-relaxed">I agree that QRST may collect and use my
                                information to respond to my inquiry.</label>
                        </div>

                        <button type="submit"
                            class="inline-flex items-center justify-center space-x-2 bg-primary-dark text-white px-8 py-4 rounded-lg text-sm font-bold hover:bg-[#0a3a2a] transition w-full sm:w-auto">
                            <span>SEND MESSAGE</span>
                            <i class="fas fa-arrow-right text-xs"></i>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- ====== OUR LOCATION (MAP) ====== -->
    <section class="w-full bg-gray-50 border-t border-gray-200">
        <div class="max-w-[1600px] mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3">
                <!-- Left: Info -->
                <div class="bg-primary-dark p-10 lg:p-12 text-white flex flex-col justify-center">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center">
                            <i class="fa-solid fa-location-dot text-accent-lightgreen text-xl"></i>
                        </div>
                        <h3 class="text-xl font-extrabold">Our Location</h3>
                    </div>
                    <p class="text-sm text-gray-300 leading-relaxed mb-6">
                        Located in Bogor, West Java, Indonesia. We are ready to serve clients across Indonesia and beyond.
                    </p>
                    <div class="w-12 h-[2px] bg-accent-lightgreen"></div>
                </div>

                <!-- Right: Map Embed -->
                <div class="lg:col-span-2 h-80 lg:h-auto min-h-[400px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.1234567890123!2d106.827153!3d-6.597147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzUnNDkuNyJTIDEwNsKwNDknMzcuNyJF!5e0!3m2!1sen!2sid!4v1234567890123!5m2!1sen!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        class="w-full h-full">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== 5 STATS SECTION ====== -->
    <section class="w-full py-16 bg-white">
        <div class="max-w-[1600px] mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                <!-- Stat 1 -->
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-primary/10 rounded-full flex items-center justify-center">
                        <i class="fa-solid fa-users text-primary text-2xl"></i>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 mb-2">Professional Team</h4>
                    <p class="text-xs text-gray-600 leading-relaxed">Experienced and dedicated professionals ready to
                        support your goals.</p>
                </div>
                <!-- Stat 2 -->
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-primary/10 rounded-full flex items-center justify-center">
                        <i class="fa-solid fa-award text-primary text-2xl"></i>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 mb-2">Proven Experience</h4>
                    <p class="text-xs text-gray-600 leading-relaxed">Delivering solutions with measurable impact across
                        various industries.</p>
                </div>
                <!-- Stat 3 -->
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-primary/10 rounded-full flex items-center justify-center">
                        <i class="fa-solid fa-puzzle-piece text-primary text-2xl"></i>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 mb-2">Integrated Solutions</h4>
                    <p class="text-xs text-gray-600 leading-relaxed">End-to-end services tailored to your sustainability
                        needs.</p>
                </div>
                <!-- Stat 4 -->
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-primary/10 rounded-full flex items-center justify-center">
                        <i class="fa-solid fa-handshake text-primary text-2xl"></i>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 mb-2">Trusted Partnership</h4>
                    <p class="text-xs text-gray-600 leading-relaxed">Building long-term partnerships based on trust and
                        collaboration.</p>
                </div>
                <!-- Stat 5 -->
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-primary/10 rounded-full flex items-center justify-center">
                        <i class="fa-solid fa-leaf text-primary text-2xl"></i>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 mb-2">Sustainable Impact</h4>
                    <p class="text-xs text-gray-600 leading-relaxed">Committed to creating positive impact for people,
                        business, and the planet.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
