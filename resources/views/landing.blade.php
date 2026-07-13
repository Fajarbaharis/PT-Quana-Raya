@extends('app')

@section('title', 'Home - PT. Quana Raya Shakatama')

@section('content')

    <!-- ====== HERO SECTION ====== -->
    <section id="home" class="relative w-full h-[450px] lg:h-[500px] flex items-center">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1466611653911-95081537e5b7?q=80&w=2070&auto=format&fit=crop"
                alt="Industrial Sustainability" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-gradient-to-r from-white/95 via-white/80 to-transparent"></div>
        </div>

        <div class="max-w-[1600px] mx-auto px-4 lg:px-8 w-full relative z-10">
            <div class="lg:w-3/5">
                <h1 class="text-3xl lg:text-[44px] font-extrabold text-primary-dark mb-4 leading-[1.1] tracking-tight">
                    Engineering Sustainable Future<br>
                    <span class="text-gray-900">Through Data, Innovation,<br>and Carbon Intelligence.</span>
                </h1>

                <p class="text-sm lg:text-[15px] text-gray-800 font-medium mb-8 leading-relaxed max-w-xl">
                    PT. Quana Raya Shakatama helps industries<br>
                    accelerate sustainability through engineering services,<br>
                    carbon accounting, monitoring systems,<br>
                    and professional capacity building.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#services"
                        class="bg-primary-dark text-white px-6 py-3 rounded text-sm font-bold flex items-center justify-center space-x-2 hover:bg-[#0a3a2a] transition w-fit">
                        <span>EXPLORE OUR SERVICES</span>
                        <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                    <a href="#contact"
                        class="bg-white border border-gray-300 text-gray-900 px-6 py-3 rounded text-sm font-bold flex items-center justify-center space-x-2 hover:border-primary-dark hover:text-primary-dark transition w-fit">
                        <span>CONTACT US</span>
                        <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== OUR EXPERTISE & OUR PLATFORMS (50:50 SIDE BY SIDE) ====== -->
    <section id="services" class="w-full py-14 bg-white border-b border-gray-100">
        <div class="max-w-[1600px] mx-auto px-4 lg:px-8">

            <div class="flex flex-col lg:flex-row gap-10 lg:gap-0">

                <!-- ========== KIRI: OUR EXPERTISE (50%) ========== -->
                <div class="lg:w-1/2 lg:pr-10">
                    <div class="text-center mb-10">
                        <span class="text-[15px] font-bold text-accent-lightgreen tracking-widest uppercase">OUR
                            EXPERTISE</span>
                        <h2 class="text-2xl font-extrabold text-gray-900 mt-2">Integrated Solutions for a Low Carbon Future
                        </h2>
                    </div>

                    <!-- Grid 2x2 -->
                    <div class="grid grid-cols-2 gap-x-8 gap-y-8">
                        <!-- Item 1: ENGINEERING -->
                        <div class="flex flex-col items-center text-center">
                            <div class="w-14 h-14 mb-3 flex items-center justify-center">
                                <i class="fa-solid fa-gear text-4xl text-primary"></i>
                            </div>
                            <h3 class="text-xs font-bold text-gray-900 mb-2 uppercase tracking-wide">ENGINEERING</h3>
                            <p class="text-[14px] text-gray-600 leading-relaxed">Design and implementation of measurement,
                                monitoring, and energy systems.</p>
                        </div>

                        <!-- Item 2: CARBON ACCOUNTING -->
                        <div class="flex flex-col items-center text-center">
                            <div class="w-14 h-14 mb-3 flex items-center justify-center">
                                <i class="fa-solid fa-cloud text-4xl text-primary"></i>
                            </div>
                            <h3 class="text-xs font-bold text-gray-900 mb-2 uppercase tracking-wide">CARBON ACCOUNTING</h3>
                            <p class="text-[14px] text-gray-600 leading-relaxed">Corporate & product carbon footprint, LCA,
                                and GHG reporting.</p>
                        </div>

                        <!-- Item 3: TRAINING -->
                        <div class="flex flex-col items-center text-center">
                            <div class="w-14 h-14 mb-3 flex items-center justify-center">
                                <i class="fa-solid fa-graduation-cap text-4xl text-primary"></i>
                            </div>
                            <h3 class="text-xs font-bold text-gray-900 mb-2 uppercase tracking-wide">TRAINING & CAPACITY
                                BUILDING</h3>
                            <p class="text-[14px] text-gray-600 leading-relaxed">Awareness, professional training, and
                                certification for organizations and individuals.</p>
                        </div>

                        <!-- Item 4: DIGITAL SOLUTION -->
                        <div class="flex flex-col items-center text-center">
                            <div class="w-14 h-14 mb-3 flex items-center justify-center">
                                <i class="fa-solid fa-chart-line text-4xl text-primary"></i>
                            </div>
                            <h3 class="text-xs font-bold text-gray-900 mb-2 uppercase tracking-wide">DIGITAL SOLUTION</h3>
                            <p class="text-[14px] text-gray-600 leading-relaxed">Data-driven tools and digital platforms for
                                carbon management.</p>
                        </div>
                    </div>
                </div>

                <!-- ========== GARIS PEMBATAS VERTIKAL ========== -->
                <div class="hidden lg:block w-px bg-gray-200 mx-0"></div>

                <!-- ========== KANAN: OUR PLATFORMS (50%) ========== -->
                <div id="platform" class="lg:w-1/2 lg:pl-10 mt-10 lg:mt-0">
                    <div class="text-center mb-10">
                        <span class="text-[15px] font-bold text-accent-lightgreen tracking-widest uppercase">OUR
                            PLATFORMS</span>
                        <h2 class="text-2xl font-extrabold text-gray-900 mt-2">Knowledge. Learning. Impact.</h2>
                    </div>

                    <div class="flex flex-col gap-5">
                        <!-- Card 1: Carbontalk.id -->
                        <div class="bg-[#f2f7f5] rounded-xl overflow-hidden">
                            <div class="flex flex-col sm:flex-row">
                                <!-- Text (Kiri) -->
                                <div class="p-6 sm:w-[60%] flex flex-col justify-center">
                                    <div class="flex items-center space-x-3 mb-3">
                                        <!-- SVG Logo Carbontalk.id -->
                                        <div class="w-24 h-18 flex-shrink-0">
                                            <img src="{{ asset('images/carbon-talk-id-vertical.svg') }}"
                                                alt="Carbontalk.id Logo" class="w-full h-full object-contain">
                                        </div>
                                    </div>
                                    <p class="text-xs text-gray-700 leading-relaxed mb-4">Your go-to source for insights,
                                        news, and practical knowledge on carbon management and sustainability.</p>
                                    <a href="#"
                                        class="bg-primary-dark text-white px-4 py-2 rounded text-[10px] font-bold inline-flex items-center space-x-2 hover:bg-[#0a3a2a] transition w-fit">
                                        <span>VISIT CARBONTALK.ID</span>
                                        <i class="fas fa-arrow-right text-[8px]"></i>
                                    </a>
                                </div>
                                <!-- Image (Kanan) -->
                                <div class="sm:w-[40%] relative min-h-[160px]">
                                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=2070&auto=format&fit=crop"
                                        alt="Carbontalk" class="absolute inset-0 w-full h-full object-cover">
                                </div>
                            </div>
                        </div>

                        <!-- Card 2: Carbontalk Academy -->
                        <div class="bg-[#f2f7f5] rounded-xl overflow-hidden">
                            <div class="flex flex-col sm:flex-row">
                                <!-- Text (Kiri) -->
                                <div class="p-6 sm:w-[60%] flex flex-col justify-center">
                                    <div class="flex items-center space-x-3 mb-3">
                                        <!-- SVG Logo Carbontalk Academy -->
                                        <div class="w-20 h-18 flex-shrink-0">
                                            <img src="{{ asset('images/carbon-talk-academy-vertical.svg') }}"
                                                alt="Carbontalk Academy Logo" class="w-full h-full object-contain">
                                        </div>
                                    </div>
                                    <p class="text-xs text-gray-700 leading-relaxed mb-4">Professional training and
                                        certification programs to build capacity and drive real sustainability impact.</p>
                                    <a href="#"
                                        class="bg-primary-dark text-white px-4 py-2 rounded text-[10px] font-bold inline-flex items-center space-x-2 hover:bg-[#0a3a2a] transition w-fit">
                                        <span>EXPLORE ACADEMY</span>
                                        <i class="fas fa-arrow-right text-[8px]"></i>
                                    </a>
                                </div>
                                <!-- Image (Kanan) -->
                                <div class="sm:w-[40%] relative min-h-[160px]">
                                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=2070&auto=format&fit=crop"
                                        alt="Academy" class="absolute inset-0 w-full h-full object-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ====== WHY CHOOSE QRST & INDUSTRIES ====== -->
    <section class="w-full py-8 bg-white border-b border-gray-200 shadow-sm z-20 relative">
        <div class="max-w-[1600px] mx-auto px-4 lg:px-8">
            <div class="flex flex-col xl:flex-row justify-between items-center gap-6">

                <!-- Bagian Kiri: Why Choose -->
                <div class="flex flex-col lg:flex-row items-center gap-6 xl:w-[65%] w-full">
                    <!-- Title -->
                    <div class="min-w-[180px] lg:border-r border-gray-200 pr-4">
                        <span class="text-[12px] font-bold text-accent-lightgreen tracking-widest uppercase block mb-1">WHY
                            CHOOSE QRST</span>
                        <h2 class="text-xl font-extrabold text-gray-900 leading-tight">Your Trusted Partner<br>in
                            Sustainability</h2>
                    </div>

                    <!-- 4 Features -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 w-full">
                        <div class="flex items-start space-x-2">
                            <i class="fa-regular fa-circle-check text-accent-lightgreen text-xl mt-0.5"></i>
                            <div>
                                <h4 class="text-xs font-bold text-gray-900 mb-1 leading-tight">Practical
                                    Engineering<br>Experience</h4>
                                <p class="text-[11px] text-gray-500 leading-tight">Years of hands-on experience across
                                    various industries.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-2">
                            <i class="fa-regular fa-circle-check text-accent-lightgreen text-xl mt-0.5"></i>
                            <div>
                                <h4 class="text-xs font-bold text-gray-900 mb-1 leading-tight">
                                    Industry-Oriented<br>Solutions</h4>
                                <p class="text-[11px] text-gray-500 leading-tight">Solutions tailored to your operational
                                    context.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-2">
                            <i class="fa-regular fa-circle-check text-accent-lightgreen text-xl mt-0.5"></i>
                            <div>
                                <h4 class="text-xs font-bold text-gray-900 mb-1 leading-tight">Sustainability
                                    Focus<br>&nbsp;</h4>
                                <p class="text-[11px] text-gray-500 leading-tight">Committed to measurable environmental
                                    and social impact.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-2">
                            <i class="fa-regular fa-circle-check text-accent-lightgreen text-xl mt-0.5"></i>
                            <div>
                                <h4 class="text-xs font-bold text-gray-900 mb-1 leading-tight">Data Driven<br>&nbsp;</h4>
                                <p class="text-[11px] text-gray-500 leading-tight">Decisions based on accurate data,
                                    advanced tools, and standards.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bagian Kanan: Industries -->
                <div
                    class="flex flex-col items-center xl:items-start xl:w-[35%] w-full xl:pl-6 xl:border-l border-gray-200">
                    <span
                        class="text-[13px] font-bold text-accent-lightgreen tracking-widest uppercase block mb-6 w-full text-center">INDUSTRIES
                        WE SUPPORT</span>
                    <div class="flex justify-between items-center w-full px-2 lg:px-0">
                        <div class="flex flex-col items-center group">
                            <i
                                class="fa-solid fa-droplet text-2xl text-gray-600 mb-2 group-hover:text-primary transition"></i>
                            <span class="text-[9px] font-bold text-gray-700 text-center leading-tight">Oil & Gas</span>
                        </div>

                        <div class="h-10 w-px bg-gray-300"></div>

                        <div class="flex flex-col items-center group">
                            <i
                                class="fa-solid fa-industry text-2xl text-gray-600 mb-2 group-hover:text-primary transition"></i>
                            <span class="text-[9px] font-bold text-gray-700 text-center leading-tight">Manufacturing</span>
                        </div>

                        <div class="h-10 w-px bg-gray-300"></div>

                        <div class="flex flex-col items-center group">
                            <i
                                class="fa-solid fa-truck-fast text-2xl text-gray-600 mb-2 group-hover:text-primary transition"></i>
                            <span class="text-[9px] font-bold text-gray-700 text-center leading-tight">Mining</span>
                        </div>

                        <div class="h-10 w-px bg-gray-300"></div>

                        <div class="flex flex-col items-center group">
                            <i
                                class="fa-solid fa-bolt text-2xl text-gray-600 mb-2 group-hover:text-primary transition"></i>
                            <span class="text-[9px] font-bold text-gray-700 text-center leading-tight">Power Plant</span>
                        </div>

                        <div class="h-10 w-px bg-gray-300"></div>

                        <div class="flex flex-col items-center group">
                            <i
                                class="fa-solid fa-leaf text-2xl text-gray-600 mb-2 group-hover:text-primary transition"></i>
                            <span class="text-[9px] font-bold text-gray-700 text-center leading-tight">Food Industry</span>
                        </div>

                        <div class="h-10 w-px bg-gray-300"></div>

                        <div class="flex flex-col items-center group">
                            <i
                                class="fa-solid fa-building-columns text-2xl text-gray-600 mb-2 group-hover:text-primary transition"></i>
                            <span class="text-[9px] font-bold text-gray-700 text-center leading-tight">Government</span>
                        </div>

                        <div class="h-10 w-px bg-gray-300"></div>

                        <div class="flex flex-col items-center group">
                            <i
                                class="fa-solid fa-graduation-cap text-2xl text-gray-600 mb-2 group-hover:text-primary transition"></i>
                            <span class="text-[9px] font-bold text-gray-700 text-center leading-tight">Education</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
