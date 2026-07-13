<!-- FOOTER -->
<footer class="bg-primary-dark pt-12 pb-6 w-full relative border-t border-white/10">
    <div class="max-w-[1600px] mx-auto px-4 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-8 mb-8">

            <!-- Col 1: Logo & Company Desc -->
            <div class="lg:col-span-2 pr-4">
                <a href="{{ route('home') }}" class="block mb-4">
                    <img src="{{ asset('images/Quana Horizontal.svg') }}" alt="Quana Raya Shakatama"
                        class="h-16 w-auto object-contain brightness-0 invert">
                </a>
                <p class="text-xs text-gray-300 leading-relaxed max-w-sm mt-6">
                    Engineering & Sustainability Solutions Company committed to helping industries build a low carbon
                    future through innovation, data, and collaboration.
                </p>
            </div>

            <!-- Col 2: Quick Links -->
            <div>
                <h4 class="text-accent-lightgreen text-xs font-bold uppercase tracking-widest mb-4">QUICK LINKS</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}"
                            class="text-white text-xs font-medium hover:text-accent-lightgreen transition">Home</a></li>
                    <li><a href="{{ route('about') }}"
                            class="text-white text-xs font-medium hover:text-accent-lightgreen transition">About
                            QRST</a></li>
                    <li><a href="{{ route('services') }}"
                            class="text-white text-xs font-medium hover:text-accent-lightgreen transition">Services</a>
                    </li>
                    <li><a href="{{ route('carbontalk') }}"
                            class="text-white text-xs font-medium hover:text-accent-lightgreen transition">Carbontalk</a>
                    </li>
                    <li><a href="{{ route('contact') }}"
                            class="text-white text-xs font-medium hover:text-accent-lightgreen transition">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Col 3: Services -->
            <div>
                <h4 class="text-accent-lightgreen text-xs font-bold uppercase tracking-widest mb-4">OUR SERVICES</h4>
                <ul class="space-y-3">
                    <li><a href="#"
                            class="text-white text-xs font-medium hover:text-accent-lightgreen transition">Sustainability
                            Consulting</a></li>
                    <li><a href="#"
                            class="text-white text-xs font-medium hover:text-accent-lightgreen transition">Engineering
                            Services</a></li>
                    <li><a href="#"
                            class="text-white text-xs font-medium hover:text-accent-lightgreen transition">Carbon
                            Accounting</a></li>
                    <li><a href="#"
                            class="text-white text-xs font-medium hover:text-accent-lightgreen transition">Training &
                            Certification</a></li>
                    <li><a href="#"
                            class="text-white text-xs font-medium hover:text-accent-lightgreen transition">Digital
                            Solutions</a></li>
                </ul>
            </div>

            <!-- Col 4: Platforms & Contact -->
            <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Platforms -->
                <div>
                    <h4 class="text-accent-lightgreen text-xs font-bold uppercase tracking-widest mb-4">OUR PLATFORMS
                    </h4>
                    <div class="flex flex-col space-y-5 items-center">
                        <!-- Carbontalk.id Logo -->
                        <div class="flex items-center space-x-2">
                            <div class="w-24 h-18 flex-shrink-0">
                                <img src="{{ asset('images/carbon-talk-id-vertical.svg') }}" alt="Carbontalk.id"
                                    class="w-full h-full object-contain brightness-0 invert">
                            </div>
                        </div>
                        <!-- Carbontalk Academy Logo -->
                        <div class="flex items-center space-x-2">
                            <div class="w-20 h-18 flex-shrink-0">
                                <img src="{{ asset('images/carbon-talk-academy-vertical.svg') }}"
                                    alt="Carbontalk Academy" class="w-full h-full object-contain brightness-0 invert">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact -->
                <div class="relative">
                    <h4 class="text-accent-lightgreen text-xs font-bold uppercase tracking-widest mb-4">CONTACT US</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3 text-white text-xs">
                            <i class="fa-solid fa-location-dot mt-0.5"></i>
                            <span>Citra Indah City - Bukit Anyelir AE12/3,<br>Bogor - West Java - Indonesia</span>
                        </li>
                        <li class="flex items-center space-x-3 text-white text-xs">
                            <i class="fa-solid fa-phone"></i>
                            <span>Phone (021) 39714554</span>
                        </li>
                        <li class="flex items-center space-x-3 text-white text-xs">
                            <i class="fa-brands fa-whatsapp text-sm"></i>
                            <span>WA 081119051196</span>
                        </li>
                        <li class="flex items-center space-x-3 text-white text-xs">
                            <i class="fa-regular fa-envelope"></i>
                            <span>office@qrstama.com</span>
                        </li>
                        <li class="flex items-center space-x-3 text-white text-xs">
                            <i class="fa-brands fa-instagram text-sm"></i>
                            <span>Carbontalk.id</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Bagian Peta & Get In Touch -->
        <div class="absolute right-4 lg:right-12 top-10 w-56 pointer-events-none hidden lg:block opacity-20">
            <img src="https://upload.wikimedia.org/wikipedia/commons/8/80/World_map_-_low_resolution.svg"
                alt="World Map" class="w-full invert">
        </div>

        <!-- Copyright -->
        <div class="border-t border-green-800 pt-5 mt-10 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-gray-400 text-[10px]">© 2025 PT. Quana Raya Shakatama. All rights reserved.</p>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-400 text-[10px] hover:text-white transition">Privacy Policy</a>
                <span class="text-gray-600 text-[10px]">|</span>
                <a href="#" class="text-gray-400 text-[10px] hover:text-white transition">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>
