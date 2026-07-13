<!-- NAVBAR -->
<nav class="bg-white shadow-sm w-full z-50 border-b border-gray-100 sticky top-0">
    <div class="max-w-[1600px] mx-auto px-4 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center">
                <!-- Pastikan file SVG disimpan di folder public/images/ dengan nama Quana-Horizontal.svg -->
                <img src="{{ asset('images/Quana Horizontal.svg') }}" alt="Quana Raya Shakatama" class="h-14 w-auto object-contain">
            </a>

            <!-- Navigation Links -->
            <div class="hidden lg:flex items-center space-x-10">
                <a href="{{ route('home') }}" class="nav-link text-gray-900 font-bold text-sm tracking-wide hover:text-primary">HOME</a>
                <a href="{{ route('about') }}" class="nav-link text-gray-900 font-bold text-sm tracking-wide hover:text-primary">ABOUT QRST</a>
                <a href="{{ route('services') }}" class="nav-link text-gray-900 font-bold text-sm tracking-wide hover:text-primary">SERVICES</a>
                <a href="{{ route('carbontalk') }}" class="nav-link text-gray-900 font-bold text-sm tracking-wide hover:text-primary">CARBONTALK</a>
                <a href="{{ route('contact') }}" class="nav-link text-gray-900 font-bold text-sm tracking-wide hover:text-primary">CONTACT</a>
            </div>

            <!-- Instagram Info -->
            <div class="hidden lg:flex items-center space-x-2 text-gray-900 hover:text-primary-dark transition cursor-pointer">
                <i class="fa-brands fa-instagram text-xl"></i>
                <span class="font-bold text-sm">Carbontalk.id</span>
            </div>

            <!-- Mobile Menu Icon -->
            <button class="lg:hidden text-primary-dark focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </div>
</nav>