@extends('app')

@section('title', 'About - PT. Quana Raya Shakatama')

@section('content')

    <!-- HERO SECTION (ABOUT) -->
    <section class="relative w-full h-[550px] flex items-start pt-20">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <!-- URL Gambar Sementara, ganti dengan gambar industri/solar panel asli -->
            <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276" 
                 alt="Industrial Sustainability" 
                 class="w-full h-full object-cover object-center">
            <!-- Overlay Gradient -->
            <div class="absolute inset-0 bg-gradient-to-r from-white/95 via-white/80 to-transparent"></div>
        </div>

        <div class="max-w-[1600px] mx-auto px-4 lg:px-8 w-full relative z-10">
            <div class="lg:w-3/5">
                <span class="text-[11px] font-bold text-primary tracking-widest uppercase block mb-3">ABOUT QRST</span>
                
                <h1 class="text-4xl lg:text-[50px] font-extrabold text-primary-dark mb-5 leading-[1.1] tracking-tight">
                    Engineering Solutions<br>for a Sustainable Future
                </h1>
                
                <p class="text-sm lg:text-[15px] text-gray-800 font-medium mb-6 leading-relaxed max-w-xl">
                    PT. Quana Raya Shakatama (QRST) is a solutions company committed to driving a low carbon future by combining engineering excellence, data intelligence, and sustainability expertise to create measurable value for industries and society.
                </p>

                <div class="flex items-center space-x-4">
                    <span class="text-[10px] font-bold text-gray-900 tracking-widest uppercase">DRIVE YOUR SUSTAINABLE VALUE</span>
                    <div class="h-px w-24 bg-gray-400"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- FLOATING VISION, MISSION, VALUES BOX -->
    <section class="relative z-20 w-full px-4 lg:px-8 -mt-24 mb-16">
        <div class="max-w-[1600px] mx-auto bg-white rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-gray-100">
                
                <!-- Vision -->
                <div class="p-8 lg:p-10">
                    <div class="flex items-start space-x-4">
                        <i class="fa-solid fa-bullseye text-4xl text-primary mt-1"></i>
                        <div>
                            <h3 class="text-sm font-bold text-gray-900 mb-2 uppercase tracking-wide">OUR VISION</h3>
                            <p class="text-xs text-gray-600 leading-relaxed">
                                To be a trusted sustainability partner recognized for our integrity, innovation, and impact in creating a better future for industries and the planet.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Mission -->
                <div class="p-8 lg:p-10">
                    <div class="flex items-start space-x-4">
                        <i class="fa-solid fa-mountain-sun text-4xl text-primary mt-1"></i>
                        <div>
                            <h3 class="text-sm font-bold text-gray-900 mb-3 uppercase tracking-wide">OUR MISSION</h3>
                            <ul class="space-y-2">
                                <li class="flex items-start space-x-2">
                                    <i class="fa-regular fa-circle-check text-accent-lightgreen mt-0.5 text-sm"></i>
                                    <span class="text-xs text-gray-600 leading-tight">Deliver practical and innovative solutions for sustainability and carbon management.</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <i class="fa-regular fa-circle-check text-accent-lightgreen mt-0.5 text-sm"></i>
                                    <span class="text-xs text-gray-600 leading-tight">Empower industries with accurate data, engineering, and knowledge.</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <i class="fa-regular fa-circle-check text-accent-lightgreen mt-0.5 text-sm"></i>
                                    <span class="text-xs text-gray-600 leading-tight">Build long-term value through collaboration, integrity, and continuous improvement.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Core Values -->
                <div class="p-8 lg:p-10">
                    <h3 class="text-sm font-bold text-gray-900 mb-4 uppercase tracking-wide">OUR CORE VALUES</h3>
                    <div class="grid grid-cols-2 gap-x-4 gap-y-4">
                        <div class="flex items-start space-x-2">
                            <div class="bg-[#f0f6f4] p-1.5 rounded-md flex items-center justify-center">
                                <i class="fa-solid fa-shield-halved text-accent-lightgreen text-[10px]"></i>
                            </div>
                            <div>
                                <h4 class="text-[12px] font-bold text-gray-900">Integrity</h4>
                                <p class="text-[10px] text-gray-500 leading-tight">We uphold honesty, transparency, and professional ethics.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-2">
                            <div class="bg-[#f0f6f4] p-1.5 rounded-md flex items-center justify-center">
                                <i class="fa-solid fa-handshake-angle text-accent-lightgreen text-[10px]"></i>
                            </div>
                            <div>
                                <h4 class="text-[12px] font-bold text-gray-900">Collaboration</h4>
                                <p class="text-[10px] text-gray-500 leading-tight">We believe the best impact comes from strong partnership.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-2">
                            <div class="bg-[#f0f6f4] p-1.5 rounded-md flex items-center justify-center">
                                <i class="fa-solid fa-lightbulb text-accent-lightgreen text-[10px]"></i>
                            </div>
                            <div>
                                <h4 class="text-[12px] font-bold text-gray-900">Innovation</h4>
                                <p class="text-[10px] text-gray-500 leading-tight">We continuously learn, adapt, and create better solutions.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-2">
                            <div class="bg-[#f0f6f4] p-1.5 rounded-md flex items-center justify-center">
                                <i class="fa-solid fa-leaf text-accent-lightgreen text-[10px]"></i>
                            </div>
                            <div>
                                <h4 class="text-[12px] font-bold text-gray-900">Impact</h4>
                                <p class="text-[10px] text-gray-500 leading-tight">We focus on measurable value for people and planet.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- WHO WE ARE SECTION -->
    <section class="w-full pb-16">
        <div class="max-w-[1600px] mx-auto px-4 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
                
                <!-- Kiri: Penjelasan & Box Hijau -->
                <div class="lg:w-[35%] flex flex-col">
                    <span class="text-[11px] font-bold text-accent-lightgreen tracking-widest uppercase block mb-2">WHO WE ARE</span>
                    <h2 class="text-3xl font-extrabold text-gray-900 leading-tight mb-4">
                        Built for Today.<br>Committed for Tomorrow.
                    </h2>
                    <p class="text-xs text-gray-700 leading-relaxed mb-4">
                        QRST was established with a long-term purpose: to help industries transition toward low carbon operations through reliable engineering services, accurate carbon accounting, and practical solutions.
                    </p>
                    <p class="text-xs text-gray-700 leading-relaxed mb-6">
                        We combine technical expertise, industry experience, and data-driven approach to deliver solutions that are not only compliant, but also create real business value and long-term impact.
                    </p>

                    <!-- Box Hijau Tua -->
                    <div class="bg-primary-dark rounded-xl p-6 relative overflow-hidden flex-grow shadow-lg">
                        <!-- BG Image Overlay daun/embun -->
                        <div class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1518531933037-91b2f5f229cc?q=80&w=800&auto=format&fit=crop')] bg-cover bg-center"></div>
                        <div class="relative z-10">
                            <span class="text-[10px] font-bold text-accent-lightgreen tracking-widest uppercase block mb-4">WHY CHOOSE QRST?</span>
                            <ul class="space-y-4">
                                <li class="flex items-start space-x-3">
                                    <i class="fa-regular fa-circle-check text-accent-lightgreen mt-0.5 text-lg"></i>
                                    <div>
                                        <h4 class="text-xs font-bold text-white mb-0.5">Industry-Focused Approach</h4>
                                        <p class="text-[10px] text-gray-300">Solutions tailored to real operational needs.</p>
                                    </div>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <i class="fa-regular fa-circle-check text-accent-lightgreen mt-0.5 text-lg"></i>
                                    <div>
                                        <h4 class="text-xs font-bold text-white mb-0.5">End-to-End Capability</h4>
                                        <p class="text-[10px] text-gray-300">From measurement, analysis, to implementation.</p>
                                    </div>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <i class="fa-regular fa-circle-check text-accent-lightgreen mt-0.5 text-lg"></i>
                                    <div>
                                        <h4 class="text-xs font-bold text-white mb-0.5">Quality You Can Rely On</h4>
                                        <p class="text-[10px] text-gray-300">Accurate, accountable, and standard-based.</p>
                                    </div>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <i class="fa-regular fa-circle-check text-accent-lightgreen mt-0.5 text-lg"></i>
                                    <div>
                                        <h4 class="text-xs font-bold text-white mb-0.5">Long-Term Partnership</h4>
                                        <p class="text-[10px] text-gray-300">We grow together with your sustainability goals.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Kanan: 4 Grid Image Cards -->
                <div class="lg:w-[65%] grid grid-cols-1 sm:grid-cols-2 gap-5 mt-8 lg:mt-0">
                    <!-- Card 1 -->
                    <div class="bg-white border border-gray-100 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                        <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=800&auto=format&fit=crop" alt="Engineers" class="w-full h-36 object-cover">
                        <div class="p-4">
                            <h4 class="text-sm font-bold text-gray-900 mb-1">PROFESSIONAL EXPERTISE</h4>
                            <p class="text-[11px] text-gray-600 leading-tight">A team of experienced professionals with multidisciplinary capabilities.</p>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-white border border-gray-100 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition relative">
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=800&auto=format&fit=crop" alt="Technology" class="w-full h-36 object-cover">
                        <!-- Mockup CO2 overlay icon -->                        <div class="p-4">
                            <h4 class="text-sm font-bold text-gray-900 mb-1">DATA & TECHNOLOGY</h4>
                            <p class="text-[11px] text-gray-600 leading-tight">Leveraging data, digital tools, and technology for accurate and actionable insights.</p>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="bg-white border border-gray-100 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978" alt="Handshake" class="w-full h-36 object-cover">
                        <div class="p-4">
                            <h4 class="text-sm font-bold text-gray-900 mb-1">TRUST & RELIABILITY</h4>
                            <p class="text-[11px] text-gray-600 leading-tight">We build trust through integrity, quality, and consistent performance.</p>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="bg-white border border-gray-100 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                        <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=800&auto=format&fit=crop" alt="Plant in glass" class="w-full h-36 object-cover">
                        <div class="p-4">
                            <h4 class="text-sm font-bold text-gray-900 mb-1">SUSTAINABLE IMPACT</h4>
                            <p class="text-[11px] text-gray-600 leading-tight">We are committed to creating positive impact for business, environment, and society.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

     <!-- OUR JOURNEY SECTION (Timeline) -->
    <section class="w-full py-8 bg-gray-50 border-y border-gray-200">
        <div class="max-w-[1600px] mx-auto px-4 lg:px-8 flex items-center">
            
            <div class="mr-8 min-w-[140px]">
                <span class="text-xs font-bold text-accent-lightgreen tracking-widest uppercase">OUR JOURNEY</span>
            </div>

            <!-- Timeline Container -->
            <div class="relative w-full flex justify-between items-start pt-2">
                <!-- Garis Horizontal Background -->
                <div class="absolute top-6 left-0 w-full h-px bg-gray-300 z-0"></div>
                <!-- Panah ujung garis -->
                <div class="absolute top-[21px] right-0 text-gray-300 text-xs z-0"><i class="fa-solid fa-play"></i></div>

                <!-- Timeline Item 1 -->
                <div class="relative z-10 flex flex-col items-center w-1/4 px-3 bg-gray-50">
                    <div class="w-12 h-12 rounded-full border-2 border-primary bg-white flex items-center justify-center mb-4">
                        <i class="fa-solid fa-users-gear text-primary text-base"></i>
                    </div>
                    <div class="text-center">
                        <span class="text-xs font-bold text-gray-900 block leading-none mb-1">2025</span>
                        <h4 class="text-sm font-bold text-gray-900 mb-2">Foundation</h4>
                        <p class="text-xs text-gray-600 leading-relaxed">Established with a clear purpose: driving sustainable value for industries.</p>
                    </div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="relative z-10 flex flex-col items-center w-1/4 px-3 bg-gray-50">
                    <div class="w-12 h-12 rounded-full border-2 border-primary bg-white flex items-center justify-center mb-4">
                        <i class="fa-solid fa-chart-column text-primary text-base"></i>
                    </div>
                    <div class="text-center">
                        <span class="text-xs font-bold text-gray-900 block leading-none mb-1">2025–2026</span>
                        <h4 class="text-sm font-bold text-gray-900 mb-2">Building Capability</h4>
                        <p class="text-xs text-gray-600 leading-relaxed">Developing expert teams, strengthening methodologies, and expanding services.</p>
                    </div>
                </div>

                <!-- Timeline Item 3 -->
                <div class="relative z-10 flex flex-col items-center w-1/4 px-3 bg-gray-50">
                    <div class="w-12 h-12 rounded-full border-2 border-primary bg-white flex items-center justify-center mb-4">
                        <i class="fa-solid fa-book-open text-primary text-base"></i>
                    </div>
                    <div class="text-center">
                        <span class="text-xs font-bold text-gray-900 block leading-none mb-1">2026–2027</span>
                        <h4 class="text-sm font-bold text-gray-900 mb-2">Expanding Impact</h4>
                        <p class="text-xs text-gray-600 leading-relaxed">Launching Carbontalk.id and Carbontalk Academy to empower knowledge and awareness.</p>
                    </div>
                </div>

                <!-- Timeline Item 4 -->
                <div class="relative z-10 flex flex-col items-center w-1/4 px-3 bg-gray-50">
                    <div class="w-12 h-12 rounded-full border-2 border-primary bg-white flex items-center justify-center mb-4">
                        <i class="fa-solid fa-earth-americas text-primary text-base"></i>
                    </div>
                    <div class="text-center">
                        <span class="text-xs font-bold text-gray-900 block leading-none mb-1">Beyond 2027</span>
                        <h4 class="text-sm font-bold text-gray-900 mb-2">Sustainable Future</h4>
                        <p class="text-xs text-gray-600 leading-relaxed">Continuing innovation and collaboration for a better world.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- OUR PEOPLE & COMMITMENT -->
    <section class="w-full py-12">
        <div class="max-w-[1600px] mx-auto px-4 lg:px-8">
            <div class="flex flex-col lg:flex-row items-stretch gap-6">
                
                <!-- Left Text -->
                <div class="lg:w-1/4 flex flex-col justify-center">
                    <span class="text-[11px] font-bold text-accent-lightgreen tracking-widest uppercase block mb-2">OUR PEOPLE</span>
                    <h2 class="text-2xl font-extrabold text-gray-900 leading-tight mb-3">
                        Passionate. Competent.<br>Purpose-Driven.
                    </h2>
                    <p class="text-xs text-gray-700 leading-relaxed">
                        Our team brings together a diverse background in engineering, environment, data, and management with one shared mission — to deliver meaningful solutions and create lasting impact.
                    </p>
                </div>

                <!-- Center Image (Tim meeting) -->
                <div class="lg:w-2/4">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1200&auto=format&fit=crop" alt="Our Team Collaborating" class="w-full h-full min-h-[220px] object-cover rounded-xl shadow-sm">
                </div>

                <!-- Right Commitment Box -->
                <div class="lg:w-1/4 bg-[#f2f7f5] rounded-xl relative overflow-hidden flex flex-col justify-center p-6 border border-gray-100 shadow-sm">
                    <!-- Daun background samping kanan -->
                    <img src="https://images.unsplash.com/photo-1518531933037-91b2f5f229cc?q=80&w=400&auto=format&fit=crop" class="absolute -right-10 top-0 bottom-0 h-full w-24 object-cover opacity-60 mix-blend-multiply" alt="Leaves">
                    
                    <div class="relative z-10">
                        <span class="text-[11px] font-bold text-gray-900 uppercase block mb-4">OUR COMMITMENT</span>
                        <ul class="space-y-3">
                            <li class="flex items-start space-x-2">
                                <i class="fa-regular fa-circle-check text-accent-lightgreen mt-0.5 text-sm"></i>
                                <span class="text-[10px] font-semibold text-gray-800 leading-tight">We respect the environment and future generations.</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <i class="fa-regular fa-circle-check text-accent-lightgreen mt-0.5 text-sm"></i>
                                <span class="text-[10px] font-semibold text-gray-800 leading-tight">We deliver solutions with professional integrity.</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <i class="fa-regular fa-circle-check text-accent-lightgreen mt-0.5 text-sm"></i>
                                <span class="text-[10px] font-semibold text-gray-800 leading-tight">We innovate for continuous improvement.</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <i class="fa-regular fa-circle-check text-accent-lightgreen mt-0.5 text-sm"></i>
                                <span class="text-[10px] font-semibold text-gray-800 leading-tight">We create value that lasts.</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5 ICONS BANNER (DARK GREEN) -->
    <section class="w-full bg-primary-dark py-5 mt-auto">
        <div class="max-w-[1600px] mx-auto px-4 lg:px-8">
            <div class="flex flex-wrap lg:flex-nowrap justify-between items-center gap-4">
                
                <div class="flex items-center space-x-3 w-[48%] lg:w-auto">
                    <i class="fa-solid fa-users-viewfinder text-2xl text-accent-lightgreen"></i>
                    <span class="text-xs font-bold text-white leading-tight">Professional<br>Expert Team</span>
                </div>
                <div class="hidden lg:block w-px h-8 bg-white/20"></div>

                <div class="flex items-center space-x-3 w-[48%] lg:w-auto">
                    <i class="fa-solid fa-industry text-2xl text-accent-lightgreen"></i>
                    <span class="text-xs font-bold text-white leading-tight">Multi-Industry<br>Experience</span>
                </div>
                <div class="hidden lg:block w-px h-8 bg-white/20"></div>

                <div class="flex items-center space-x-3 w-[48%] lg:w-auto">
                    <i class="fa-solid fa-cubes text-2xl text-accent-lightgreen"></i>
                    <span class="text-xs font-bold text-white leading-tight">Data-Driven<br>Solutions</span>
                </div>
                <div class="hidden lg:block w-px h-8 bg-white/20"></div>

                <div class="flex items-center space-x-3 w-[48%] lg:w-auto">
                    <i class="fa-solid fa-leaf text-2xl text-accent-lightgreen"></i>
                    <span class="text-xs font-bold text-white leading-tight">Commitment to<br>Sustainability</span>
                </div>
                <div class="hidden lg:block w-px h-8 bg-white/20"></div>

                <div class="flex items-center space-x-3 w-[100%] lg:w-auto justify-center lg:justify-start mt-2 lg:mt-0">
                    <i class="fa-solid fa-handshake text-2xl text-accent-lightgreen"></i>
                    <span class="text-xs font-bold text-white leading-tight">Long-Term<br>Partnership</span>
                </div>

            </div>
        </div>
    </section>

@endsection