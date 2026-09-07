@extends('app')

@section('title', 'Carbontalk.id - Measure. Analyze. Decarbonize.')

@section('content')

    <!-- ====== HERO SECTION: CARBONTALK.ID ====== -->
    <section class="relative w-full min-h-[460px] lg:min-h-[520px] py-14 lg:py-20 flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1466611653911-95081537e5b7?q=80&w=2070&auto=format&fit=crop"
                alt="Carbontalk.id Background" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-gradient-to-r from-white/95 via-white/70 to-transparent"></div>
        </div>

        <div class="max-w-[1600px] mx-auto px-4 lg:px-8 w-full relative z-10">
            <div class="lg:w-2/3" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-4xl lg:text-6xl font-extrabold text-gray-900 tracking-tight leading-none mb-2">carbontalk.id</h1>
                <p class="text-xs font-bold text-gray-500 tracking-[0.25em] uppercase mb-6">MEASURE. ANALYZE. DECARBONIZE.</p>
                <div class="w-12 h-[2px] bg-accent-lightgreen mb-6"></div>
                <p class="text-sm lg:text-base text-gray-700 leading-relaxed max-w-2xl mb-8">
                    Carbontalk.id is our digital platform and knowledge hub dedicated to carbon management, data
                    intelligence, and practical insights for a low carbon future.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-10">
                    <div class="flex items-start space-x-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-lightbulb text-primary text-sm"></i>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-gray-900 mb-1">Knowledge & Insight</h3>
                            <p class="text-xs text-gray-600 leading-relaxed">Articles, infographics, and updates about carbon, sustainability, and the energy transition.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-screwdriver-wrench text-primary text-sm"></i>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-gray-900 mb-1">Tools & Resources</h3>
                            <p class="text-xs text-gray-600 leading-relaxed">Practical tools, templates, and guides to help organizations take action.</p>
                        </div>
                    </div>
                </div>

                <a href="#" class="inline-flex items-center space-x-2 bg-primary-dark text-white px-6 py-3 rounded text-sm font-bold hover:bg-[#0a3a2a] transition" data-aos="fade-up" data-aos-delay="300">
                    <span>VISIT CARBONTALK.ID</span>
                    <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ====== 4 VALUE PROPS (FLOATING LUXURY CARDS) ====== -->
    <div class="relative z-20 max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8 -mt-8 sm:-mt-12 lg:-mt-16">
        <div class="relative rounded-2xl lg:rounded-3xl bg-gradient-to-br from-[#063a2a] via-[#094835] to-[#04281c] p-4 sm:p-5 lg:p-6 shadow-[0_20px_50px_rgba(6,78,59,0.3)] border border-emerald-500/20 backdrop-blur-xl overflow-hidden" data-aos="fade-up" data-aos-duration="900">
            <!-- Ambient Background Glow Highlights -->
            <div class="absolute -top-24 -left-24 w-72 h-72 bg-emerald-400/15 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 -right-24 w-72 h-72 bg-[#d4a84c]/15 rounded-full blur-3xl pointer-events-none"></div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 lg:gap-4 relative z-10">
                
                <!-- 1. Trusted Information -->
                <div class="group relative p-5 lg:p-6 rounded-xl lg:rounded-2xl bg-white/[0.04] hover:bg-white/[0.08] border border-white/[0.06] hover:border-emerald-400/30 transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-400/20 to-emerald-600/10 border border-emerald-400/30 flex items-center justify-center flex-shrink-0 mb-4 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(52,211,153,0.3)] transition-all duration-300">
                        <i class="fa-solid fa-shield-halved text-emerald-300 text-lg"></i>
                    </div>
                    <h4 class="text-sm lg:text-base font-bold text-white mb-1.5 tracking-tight group-hover:text-emerald-200 transition-colors">Trusted Information</h4>
                    <p class="text-xs text-emerald-100/75 leading-relaxed font-normal">Credible, up-to-date, and science-based content.</p>
                    <div class="absolute inset-x-0 bottom-0 h-0.5 bg-gradient-to-r from-transparent via-emerald-400/0 to-transparent group-hover:via-emerald-400/50 transition-all duration-500 rounded-b-xl"></div>
                </div>

                <!-- 2. Practical & Actionable -->
                <div class="group relative p-5 lg:p-6 rounded-xl lg:rounded-2xl bg-white/[0.04] hover:bg-white/[0.08] border border-white/[0.06] hover:border-emerald-400/30 transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-400/20 to-emerald-600/10 border border-emerald-400/30 flex items-center justify-center flex-shrink-0 mb-4 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(52,211,153,0.3)] transition-all duration-300">
                        <i class="fa-solid fa-leaf text-emerald-300 text-lg"></i>
                    </div>
                    <h4 class="text-sm lg:text-base font-bold text-white mb-1.5 tracking-tight group-hover:text-emerald-200 transition-colors">Practical & Actionable</h4>
                    <p class="text-xs text-emerald-100/75 leading-relaxed font-normal">Insights you can apply to drive real change.</p>
                    <div class="absolute inset-x-0 bottom-0 h-0.5 bg-gradient-to-r from-transparent via-emerald-400/0 to-transparent group-hover:via-emerald-400/50 transition-all duration-500 rounded-b-xl"></div>
                </div>

                <!-- 3. Community & Collaboration -->
                <div class="group relative p-5 lg:p-6 rounded-xl lg:rounded-2xl bg-white/[0.04] hover:bg-white/[0.08] border border-white/[0.06] hover:border-emerald-400/30 transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-400/20 to-emerald-600/10 border border-emerald-400/30 flex items-center justify-center flex-shrink-0 mb-4 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(52,211,153,0.3)] transition-all duration-300">
                        <i class="fa-solid fa-users text-emerald-300 text-lg"></i>
                    </div>
                    <h4 class="text-sm lg:text-base font-bold text-white mb-1.5 tracking-tight group-hover:text-emerald-200 transition-colors">Community & Collaboration</h4>
                    <p class="text-xs text-emerald-100/75 leading-relaxed font-normal">A space to connect, learn, and grow together.</p>
                    <div class="absolute inset-x-0 bottom-0 h-0.5 bg-gradient-to-r from-transparent via-emerald-400/0 to-transparent group-hover:via-emerald-400/50 transition-all duration-500 rounded-b-xl"></div>
                </div>

                <!-- 4. For a Better Future -->
                <div class="group relative p-5 lg:p-6 rounded-xl lg:rounded-2xl bg-white/[0.04] hover:bg-white/[0.08] border border-white/[0.06] hover:border-emerald-400/30 transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-400/20 to-emerald-600/10 border border-emerald-400/30 flex items-center justify-center flex-shrink-0 mb-4 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(52,211,153,0.3)] transition-all duration-300">
                        <i class="fa-solid fa-globe text-emerald-300 text-lg"></i>
                    </div>
                    <h4 class="text-sm lg:text-base font-bold text-white mb-1.5 tracking-tight group-hover:text-emerald-200 transition-colors">For a Better Future</h4>
                    <p class="text-xs text-emerald-100/75 leading-relaxed font-normal">Building awareness and action toward a sustainable world.</p>
                    <div class="absolute inset-x-0 bottom-0 h-0.5 bg-gradient-to-r from-transparent via-emerald-400/0 to-transparent group-hover:via-emerald-400/50 transition-all duration-500 rounded-b-xl"></div>
                </div>

            </div>
        </div>
    </div>

    <!-- ====== CARBONTALK ACADEMY & TRAINING PROGRAMS ====== -->
    <section class="w-full pt-20 pb-16 lg:pt-28 lg:pb-24 bg-gray-50">
        <div class="max-w-[1600px] mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">

                <!-- LEFT: Academy Info -->
                <div class="lg:col-span-5 flex flex-col" data-aos="fade-right" data-aos-duration="800">
                    <div>
                        <!-- Logo Image -->
                        <div class="mb-6">
                            <img src="{{ asset('images/carbon-talk-academy-vertical.svg') }}"
                                 alt="Carbontalk Academy Logo"
                                 class="h-16 w-auto object-contain">
                        </div>

                        <p class="text-base text-gray-600 leading-relaxed mb-8">
                            Carbontalk Academy is our learning and development platform committed to building knowledge,
                            skills, and capabilities for sustainability professionals and organizations.
                        </p>

                        <div class="space-y-6 mb-8">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 rounded-full bg-white border border-gray-200 flex items-center justify-center flex-shrink-0 shadow-sm">
                                    <i class="fa-solid fa-book text-primary text-base"></i>
                                </div>
                                <div>
                                    <h4 class="text-base font-bold text-gray-900 mb-1">Practical Learning</h4>
                                    <p class="text-sm text-gray-600 leading-relaxed">Hands-on training delivered by experienced practitioners and industry experts.</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 rounded-full bg-white border border-gray-200 flex items-center justify-center flex-shrink-0 shadow-sm">
                                    <i class="fa-solid fa-file-lines text-primary text-base"></i>
                                </div>
                                <div>
                                    <h4 class="text-base font-bold text-gray-900 mb-1">Relevant & Updated</h4>
                                    <p class="text-sm text-gray-600 leading-relaxed">Curriculum aligned with global standards, regulations, and industry needs.</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 rounded-full bg-white border border-gray-200 flex items-center justify-center flex-shrink-0 shadow-sm">
                                    <i class="fa-solid fa-users text-primary text-base"></i>
                                </div>
                                <div>
                                    <h4 class="text-base font-bold text-gray-900 mb-1">For Individuals & Organizations</h4>
                                    <p class="text-sm text-gray-600 leading-relaxed">Open programs, in-house training, and customized solutions to build your team's capability.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="inline-flex items-center space-x-2 bg-primary-dark text-white px-6 py-3 rounded text-base font-bold hover:bg-[#0a3a2a] transition w-fit">
                        <span>EXPLORE ACADEMY</span>
                        <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                </div>

                <!-- RIGHT: Training Programs Grid -->
                <div class="lg:col-span-7">
                    <div class="mb-8" data-aos="fade-up">
                        <h2 class="text-2xl font-extrabold text-gray-900 mb-2">Training & Capacity Building Programs</h2>
                        <p class="text-sm text-gray-600">Comprehensive programs to empower individuals and organizations.</p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                        <!-- Cat 1 -->
                        <div class="bg-white p-5 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition" data-aos="fade-up" data-aos-delay="100">
                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center mb-3"><i class="fa-solid fa-leaf text-primary text-sm"></i></div>
                            <h4 class="text-xs font-bold text-gray-900 uppercase mb-2">Sustainability & Carbon</h4>
                            <ul class="space-y-1">
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> Carbon Accounting</li>
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> GHG Protocol</li>
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> Net Zero Strategy</li>
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> Climate Risk & ESG</li>
                            </ul>
                        </div>
                        <!-- Cat 2 -->
                        <div class="bg-white p-5 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition" data-aos="fade-up" data-aos-delay="200">
                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center mb-3"><i class="fa-solid fa-certificate text-primary text-sm"></i></div>
                            <h4 class="text-xs font-bold text-gray-900 uppercase mb-2">ISO Management System</h4>
                            <ul class="space-y-1">
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> ISO 9001 Quality</li>
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> ISO 14001 Environment</li>
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> ISO 45001 OH&S</li>
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> ISO 50001 Energy</li>
                            </ul>
                        </div>
                        <!-- Cat 3 -->
                        <div class="bg-white p-5 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition" data-aos="fade-up" data-aos-delay="300">
                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center mb-3"><i class="fa-solid fa-chart-line text-primary text-sm"></i></div>
                            <h4 class="text-xs font-bold text-gray-900 uppercase mb-2">Operational Excellence</h4>
                            <ul class="space-y-1">
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> Process Improvement</li>
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> Lean & Six Sigma</li>
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> Risk Management</li>
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> Project Management</li>
                            </ul>
                        </div>
                        <!-- Cat 4 -->
                        <div class="bg-white p-5 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition" data-aos="fade-up" data-aos-delay="400">
                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center mb-3"><i class="fa-solid fa-seedling text-primary text-sm"></i></div>
                            <h4 class="text-xs font-bold text-gray-900 uppercase mb-2">Environmental Management</h4>
                            <ul class="space-y-1">
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> Waste Management</li>
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> Water Management</li>
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> Biodiversity</li>
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> Compliance & Regulation</li>
                            </ul>
                        </div>
                        <!-- Cat 5 -->
                        <div class="bg-white p-5 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition" data-aos="fade-up" data-aos-delay="500">
                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center mb-3"><i class="fa-solid fa-heart-pulse text-primary text-sm"></i></div>
                            <h4 class="text-xs font-bold text-gray-900 uppercase mb-2">Health, Safety & Wellbeing</h4>
                            <ul class="space-y-1">
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> Safety Leadership</li>
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> HIRADC</li>
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> Incident Investigation</li>
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> Contractor Safety</li>
                            </ul>
                        </div>
                        <!-- Cat 6 -->
                        <div class="bg-white p-5 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition" data-aos="fade-up" data-aos-delay="600">
                            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center mb-3"><i class="fa-solid fa-users text-primary text-sm"></i></div>
                            <h4 class="text-xs font-bold text-gray-900 uppercase mb-2">Leadership & Soft Skills</h4>
                            <ul class="space-y-1">
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> Effective Communication</li>
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> Problem Solving</li>
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> Change Management</li>
                                <li class="text-[12px] text-gray-600 flex items-start"><span class="mr-1.5 text-primary">•</span> Teamwork & Collaboration</li>
                            </ul>
                        </div>
                        <!-- Cat 7 (Custom Programs) -->
                        <div class="bg-white p-5 rounded-lg border border-gray-100 shadow-sm hover:shadow-md transition sm:col-span-2 lg:col-span-3" data-aos="fade-up" data-aos-delay="700">
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-file-lines text-primary text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold text-gray-900 uppercase mb-1">Custom Programs</h4>
                                    <p class="text-[12px] text-gray-600 leading-relaxed">We also develop customized training programs tailored to your organization's needs, industry, and strategic objectives. (Needs Assessment, Curriculum Design, In-House Training, Certification Support).</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4 Stats Row -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 bg-white p-6 rounded-xl border border-gray-100 shadow-sm" data-aos="fade-up" data-aos-delay="800">
                        <div class="text-center">
                            <i class="fa-solid fa-award text-primary text-xl mb-2"></i>
                            <h5 class="text-[11px] font-bold text-gray-900 uppercase mb-1">Certified & Recognized</h5>
                            <p class="text-[9px] text-gray-500 leading-tight">International standards and professional recognition.</p>
                        </div>
                        <div class="text-center">
                            <i class="fa-solid fa-chalkboard-user text-primary text-xl mb-2"></i>
                            <h5 class="text-[11px] font-bold text-gray-900 uppercase mb-1">Expert Instructors</h5>
                            <p class="text-[9px] text-gray-500 leading-tight">Learn from practitioners with real-world experience.</p>
                        </div>
                        <div class="text-center">
                            <i class="fa-solid fa-laptop-file text-primary text-xl mb-2"></i>
                            <h5 class="text-[11px] font-bold text-gray-900 uppercase mb-1">Flexible Delivery</h5>
                            <p class="text-[9px] text-gray-500 leading-tight">Online, offline, and blended learning options.</p>
                        </div>
                        <div class="text-center">
                            <i class="fa-solid fa-bullseye text-primary text-xl mb-2"></i>
                            <h5 class="text-[11px] font-bold text-gray-900 uppercase mb-1">Measurable Impact</h5>
                            <p class="text-[9px] text-gray-500 leading-tight">Practical outcomes that drive performance improvement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== OUR INTEGRATED ECOSYSTEM ====== -->
    <section class="w-full py-16 bg-white">
        <div class="max-w-[1600px] mx-auto px-4 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-2xl lg:text-3xl font-extrabold text-gray-900 mb-2">Our Integrated Ecosystem</h2>
                <p class="text-sm text-gray-600">Different platforms, one purpose: accelerating sustainability impact.</p>
            </div>

            <div class="flex flex-col lg:flex-row items-center justify-center gap-4 lg:gap-6">
                <!-- Card 1: QRST -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 text-center shadow-sm w-full lg:w-1/4 hover:shadow-md transition" data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-4 flex justify-center items-center space-x-2">
                        <i class="fa-solid fa-leaf text-2xl text-primary"></i>
                        <span class="text-lg font-extrabold text-gray-900">Quana</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 mb-2">Engineering & Sustainability Solutions</h4>
                    <p class="text-xs text-gray-600 leading-relaxed">Strategy, engineering, data, and implementation.</p>
                </div>

                <!-- Arrow -->
                <div class="hidden lg:block text-gray-300" data-aos="fade-up" data-aos-delay="200"><i class="fa-solid fa-arrow-right text-2xl"></i></div>
                <div class="lg:hidden text-gray-300 my-2" data-aos="fade-up" data-aos-delay="200"><i class="fa-solid fa-arrow-down text-2xl"></i></div>

                <!-- Card 2: Carbontalk.id -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 text-center shadow-sm w-full lg:w-1/4 hover:shadow-md transition" data-aos="fade-up" data-aos-delay="300">
                    <div class="mb-4 flex justify-center">
                        <span class="text-lg font-extrabold text-gray-900">carbontalk.id</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 mb-2">Knowledge & Insight Platform</h4>
                    <p class="text-xs text-gray-600 leading-relaxed">Sharing insights, tools, and resources to inspire action.</p>
                </div>

                <!-- Arrow -->
                <div class="hidden lg:block text-gray-300" data-aos="fade-up" data-aos-delay="400"><i class="fa-solid fa-arrow-right text-2xl"></i></div>
                <div class="lg:hidden text-gray-300 my-2" data-aos="fade-up" data-aos-delay="400"><i class="fa-solid fa-arrow-down text-2xl"></i></div>

                <!-- Card 3: Academy -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 text-center shadow-sm w-full lg:w-1/4 hover:shadow-md transition" data-aos="fade-up" data-aos-delay="500">
                    <div class="mb-4 flex justify-center">
                        <span class="text-lg font-extrabold text-gray-900">carbontalk <span class="text-primary">academy</span></span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 mb-2">Training & Capacity Building</h4>
                    <p class="text-xs text-gray-600 leading-relaxed">Building capability and competence for sustainable performance.</p>
                </div>

                <!-- Arrow -->
                <div class="hidden lg:block text-gray-300" data-aos="fade-up" data-aos-delay="600"><i class="fa-solid fa-arrow-right text-2xl"></i></div>
                <div class="lg:hidden text-gray-300 my-2" data-aos="fade-up" data-aos-delay="600"><i class="fa-solid fa-arrow-down text-2xl"></i></div>

                <!-- Card 4: Dark Green Impact -->
                <div class="bg-primary-dark rounded-xl p-6 text-center text-white shadow-lg w-full lg:w-1/4 flex flex-col items-center justify-center" data-aos="fade-up" data-aos-delay="700">
                    <div class="w-14 h-14 rounded-full border-2 border-white/30 flex items-center justify-center mb-4">
                        <i class="fa-solid fa-leaf text-accent-lightgreen text-2xl"></i>
                    </div>
                    <p class="text-sm font-bold leading-relaxed">Together, we drive sustainable value for business, people, and the planet.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== FINAL CTA SECTION ====== -->
    <section class="w-full py-12 bg-primary-dark border-t border-white/10">
        <div class="max-w-[1600px] mx-auto px-4 lg:px-8">
            <div class="flex flex-col lg:flex-row justify-between items-center gap-8" data-aos="fade-up" data-aos-duration="800">
                <!-- Left: Text -->
                <div class="flex items-center space-x-6 text-white">
                    <div class="w-14 h-14 rounded-full border border-white/30 flex items-center justify-center flex-shrink-0">
                        <i class="fa-solid fa-leaf text-accent-lightgreen text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-extrabold mb-1">Learn. Share. Build. Act.</h3>
                        <p class="text-sm text-gray-300">Join our community and be part of the sustainability transformation.</p>
                    </div>
                </div>
                <!-- Right: Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#" class="inline-flex items-center justify-center space-x-2 bg-accent-lightgreen text-primary-dark px-6 py-3 rounded text-sm font-bold hover:bg-white transition">
                        <span>VISIT CARBONTALK.ID</span>
                    </a>
                    <a href="#" class="inline-flex items-center justify-center space-x-2 bg-blue-900 text-white px-6 py-3 rounded text-sm font-bold hover:bg-blue-800 transition">
                        <span>EXPLORE ACADEMY</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection