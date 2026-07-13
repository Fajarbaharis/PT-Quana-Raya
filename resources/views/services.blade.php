@extends('app')

@section('title', 'Our Services - PT. Quana Raya Shakatama')

@section('content')

    <!-- ====== HERO SECTION SERVICES ====== -->
    <section class="relative w-full h-[400px] lg:h-[480px] flex items-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1466611653911-95081537e5b7?q=80&w=2070&auto=format&fit=crop"
                alt="Industrial Sustainability" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-gradient-to-r from-white/95 via-white/70 to-transparent"></div>
        </div>

        <div class="max-w-[1600px] mx-auto px-4 lg:px-8 w-full relative z-10">
            <div class="lg:w-2/3">
                <span class="text-xs font-bold text-accent-lightgreen tracking-widest uppercase block mb-3">OUR
                    SERVICES</span>
                <h1 class="text-3xl lg:text-5xl font-extrabold text-gray-900 mb-5 leading-tight">
                    Integrated Solutions.<br>Sustainable Impact.
                </h1>
                <p class="text-sm lg:text-base text-gray-700 leading-relaxed max-w-2xl mb-6">
                    We provide end-to-end solutions to help industries measure, manage, and reduce environmental impact
                    while improving operational performance and creating long-term value.
                </p>
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-[2px] bg-accent-lightgreen"></div>
                    <span class="text-xs font-bold text-gray-900 tracking-widest uppercase">DRIVE YOUR SUSTAINABLE
                        VALUE</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== 4 STATS BAR ====== -->
    <section class="w-full py-8 bg-primary-dark border-b border-gray-700">
        <div class="max-w-[1600px] mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Engineering Excellence -->
                <div class="flex items-center space-x-3 justify-center">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0">
                        <i class="fa-solid fa-gear text-accent-lightgreen text-sm"></i>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-white uppercase tracking-wide">Engineering</h4>
                        <h4 class="text-xs font-bold text-white uppercase tracking-wide">Excellence</h4>
                    </div>
                </div>

                <!-- Data-Driven Solutions -->
                <div class="flex items-center space-x-3 justify-center">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0">
                        <i class="fa-solid fa-chart-line text-accent-lightgreen text-sm"></i>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-white uppercase tracking-wide">Data-Driven</h4>
                        <h4 class="text-xs font-bold text-white uppercase tracking-wide">Solutions</h4>
                    </div>
                </div>

                <!-- Sustainability Focused -->
                <div class="flex items-center space-x-3 justify-center">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0">
                        <i class="fa-solid fa-leaf text-accent-lightgreen text-sm"></i>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-white uppercase tracking-wide">Sustainability</h4>
                        <h4 class="text-xs font-bold text-white uppercase tracking-wide">Focused</h4>
                    </div>
                </div>

                <!-- Trusted Partnership -->
                <div class="flex items-center space-x-3 justify-center">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0">
                        <i class="fa-solid fa-handshake text-accent-lightgreen text-sm"></i>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-white uppercase tracking-wide">Trusted</h4>
                        <h4 class="text-xs font-bold text-white uppercase tracking-wide">Partnership</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== OUR CORE SERVICES ====== -->
    <section class="w-full py-16 bg-white">
        <div class="max-w-[1600px] mx-auto px-4 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12">
                <span class="text-xs font-bold text-accent-lightgreen tracking-widest uppercase block mb-2">OUR CORE
                    SERVICES</span>
                <h2 class="text-2xl lg:text-3xl font-extrabold text-gray-900">Comprehensive solutions across sustainability,
                    engineering, data, and capacity building.</h2>
            </div>

            <!-- 5 Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">

                <!-- Service 01 -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-leaf text-2xl text-primary"></i>
                    </div>
                    <div class="mb-4">
                        <span class="text-2xl font-extrabold text-accent-lightgreen">01</span>
                        <h3 class="text-sm font-bold text-gray-900 mt-1 mb-2">Sustainability Consulting</h3>
                        <p class="text-xs text-gray-600 leading-relaxed mb-3">Strategic advisory to build sustainability
                            roadmaps and achieve ESG and Net Zero goals.</p>
                    </div>
                    <ul class="space-y-2 mb-4">
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Sustainability Strategy & Roadmap</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">ESG Advisory</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Net Zero & Decarbonization Strategy</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Climate Risk Assessment</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Materiality Assessment</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Sustainability Reporting (GRI, SASB, TCFD)</span></li>
                    </ul>
                    <div class="h-32 rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?q=80&w=400&auto=format&fit=crop"
                            alt="Sustainability" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Service 02 -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-gear text-2xl text-primary"></i>
                    </div>
                    <div class="mb-4">
                        <span class="text-2xl font-extrabold text-accent-lightgreen">02</span>
                        <h3 class="text-sm font-bold text-gray-900 mt-1 mb-2">Engineering Services</h3>
                        <p class="text-xs text-gray-600 leading-relaxed mb-3">Engineering design and implementation for
                            measurement and monitoring systems.</p>
                    </div>
                    <ul class="space-y-2 mb-4">
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Measurement System Design</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Monitoring & Data Acquisition System</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Instrumentation & Control</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Energy Assessment & Audit</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Process Optimization</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Technical Study & Feasibility</span></li>
                    </ul>
                    <div class="h-32 rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=400&auto=format&fit=crop"
                            alt="Engineering" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Service 03 -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-cloud text-2xl text-primary"></i>
                    </div>
                    <div class="mb-4">
                        <span class="text-2xl font-extrabold text-accent-lightgreen">03</span>
                        <h3 class="text-sm font-bold text-gray-900 mt-1 mb-2">Carbon Accounting</h3>
                        <p class="text-xs text-gray-600 leading-relaxed mb-3">Accurate carbon accounting services to
                            measure and manage emissions across the value chain.</p>
                    </div>
                    <ul class="space-y-2 mb-4">
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Corporate Carbon Footprint (ISO 14064-1, GHG
                                Protocol)</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Product Carbon Footprint (ISO 14067)</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Life Cycle Assessment (LCA)</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Emission Factor Development</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Carbon Reduction Plan & Verification Support</span></li>
                    </ul>
                    <div class="h-32 rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=400&auto=format&fit=crop"
                            alt="Carbon Accounting" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Service 04 -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-chart-line text-2xl text-primary"></i>
                    </div>
                    <div class="mb-4">
                        <span class="text-2xl font-extrabold text-accent-lightgreen">04</span>
                        <h3 class="text-sm font-bold text-gray-900 mt-1 mb-2">Digital Solutions & Data Intelligence</h3>
                        <p class="text-xs text-gray-600 leading-relaxed mb-3">Data-driven platforms and analytics to turn
                            information into actionable insights.</p>
                    </div>
                    <ul class="space-y-2 mb-4">
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Carbon Management Platform</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Dashboard & Visualization</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Data Analytics & Modeling</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">IoT Monitoring Solutions</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Reporting Automation</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Decision Support System</span></li>
                    </ul>
                    <div class="h-32 rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=400&auto=format&fit=crop"
                            alt="Digital Solutions" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Service 05 -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg transition">
                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-graduation-cap text-2xl text-primary"></i>
                    </div>
                    <div class="mb-4">
                        <span class="text-2xl font-extrabold text-accent-lightgreen">05</span>
                        <h3 class="text-sm font-bold text-gray-900 mt-1 mb-2">Training & Capacity Building</h3>
                        <p class="text-xs text-gray-600 leading-relaxed mb-3">Build awareness, capability, and competence
                            for sustainable organizational growth.</p>
                    </div>
                    <ul class="space-y-2 mb-4">
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Public & In-House Training</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Workshop & Seminar</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Awareness Program</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Certification Program</span></li>
                        <li class="flex items-start space-x-2"><i
                                class="fa-solid fa-check text-accent-lightgreen text-[8px] mt-1"></i><span
                                class="text-[10px] text-gray-600">Training Needs Analysis</span></li>
                    </ul>
                    <div class="h-32 rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=400&auto=format&fit=crop"
                            alt="Training" class="w-full h-full object-cover">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ====== TRAINING & CAPACITY BUILDING PROGRAMS ====== -->
    <section class="w-full py-16 bg-gray-50">
        <div class="max-w-[1600px] mx-auto px-4 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-2xl lg:text-3xl font-extrabold text-gray-900 mb-2">TRAINING & CAPACITY BUILDING PROGRAMS
                </h2>
                <p class="text-sm text-gray-600 max-w-3xl mx-auto">Comprehensive programs designed to build capability,
                    ensure compliance, and accelerate sustainable performance.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Left: Carbontalk Academy Info -->
                <div
                    class="lg:col-span-4 bg-white p-8 rounded-xl shadow-sm border border-gray-100 flex flex-col justify-between">
                    <div>
                        <!-- Logo Image -->
                        <div class="mb-6">
                            <img src="{{ asset('images/Carbon talk academy Horizontal.svg') }}"
                                alt="Carbontalk Academy Logo" class="h-14 w-auto object-contain">
                        </div>

                        <p class="text-sm text-gray-600 leading-relaxed mb-6">
                            Carbontalk Academy is our learning and development platform dedicated to empowering individuals
                            and organizations with the knowledge and skills needed to drive sustainability and operational
                            excellence.
                        </p>
                    </div>
                    <a href="#"
                        class="inline-flex items-center space-x-2 bg-primary-dark text-white px-5 py-3 rounded text-sm font-bold hover:bg-[#0a3a2a] transition w-fit">
                        <span>EXPLORE ACADEMY</span>
                        <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>

                <!-- Right: 5 Categories Grid -->
                <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
                    <!-- Category 1 -->
                    <div class="bg-white p-5 rounded-lg border border-gray-100 shadow-sm">
                        <div class="w-8 h-8 bg-primary/10 rounded flex items-center justify-center mb-3"><i
                                class="fa-solid fa-leaf text-primary text-sm"></i></div>
                        <h4 class="text-[10px] font-bold text-gray-900 uppercase mb-3 leading-tight">SUSTAINABILITY &
                            CARBON</h4>
                        <ul class="space-y-1.5">
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> Carbon Accounting (ISO 14064)</li>
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> GHG Protocol & Emission Measurement</li>
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> Life Cycle Assessment (LCA)</li>
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> Climate Change & Net Zero Strategy</li>
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> ESG Fundamentals</li>
                        </ul>
                    </div>

                    <!-- Category 2 -->
                    <div class="bg-white p-5 rounded-lg border border-gray-100 shadow-sm">
                        <div class="w-8 h-8 bg-primary/10 rounded flex items-center justify-center mb-3"><i
                                class="fa-solid fa-certificate text-primary text-sm"></i></div>
                        <h4 class="text-[10px] font-bold text-gray-900 uppercase mb-3 leading-tight">MANAGEMENT SYSTEMS
                            (ISO)</h4>
                        <ul class="space-y-1.5">
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> ISO 9001 - Quality Management</li>
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> ISO 14001 - Environmental</li>
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> ISO 45001 - Occupational Health & Safety</li>
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> ISO 50001 - Energy Management</li>
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> Other Management Systems</li>
                        </ul>
                    </div>

                    <!-- Category 3 -->
                    <div class="bg-white p-5 rounded-lg border border-gray-100 shadow-sm">
                        <div class="w-8 h-8 bg-primary/10 rounded flex items-center justify-center mb-3"><i
                                class="fa-solid fa-chart-line text-primary text-sm"></i></div>
                        <h4 class="text-[10px] font-bold text-gray-900 uppercase mb-3 leading-tight">OPERATIONAL EXCELLENCE
                        </h4>
                        <ul class="space-y-1.5">
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> Risk Management</li>
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> Internal Audit & Compliance</li>
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> Root Cause Analysis</li>
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> Process Improvement</li>
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> Project Management</li>
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> Supply Chain Sustainability</li>
                        </ul>
                    </div>

                    <!-- Category 4 -->
                    <div class="bg-white p-5 rounded-lg border border-gray-100 shadow-sm">
                        <div class="w-8 h-8 bg-primary/10 rounded flex items-center justify-center mb-3"><i
                                class="fa-solid fa-users text-primary text-sm"></i></div>
                        <h4 class="text-[10px] font-bold text-gray-900 uppercase mb-3 leading-tight">SOFT SKILLS &
                            LEADERSHIP</h4>
                        <ul class="space-y-1.5">
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> Leadership & Communication</li>
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> Change Management</li>
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> Problem Solving & Decision Making</li>
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> Effective Presentation</li>
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> Teamwork & Collaboration</li>
                            <li class="text-[9px] text-gray-600 leading-tight flex items-start"><span
                                    class="mr-1">•</span> Coaching & Mentoring</li>
                        </ul>
                    </div>

                    <!-- Category 5 -->
                    <div class="bg-white p-5 rounded-lg border border-gray-100 shadow-sm">
                        <div class="w-8 h-8 bg-primary/10 rounded flex items-center justify-center mb-3"><i
                                class="fa-solid fa-star text-primary text-sm"></i></div>
                        <h4 class="text-[10px] font-bold text-gray-900 uppercase mb-3 leading-tight">CUSTOM PROGRAMS</h4>
                        <p class="text-[9px] text-gray-600 leading-relaxed">We also develop customized training programs
                            tailored to your organization's needs, industry, and strategic objectives.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== OUR APPROACH (TIMELINE) ====== -->
    <section class="w-full py-16 bg-white border-t border-gray-100">
        <div class="max-w-[1600px] mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">

                <!-- Left: Text -->
                <div class="lg:col-span-4">
                    <span class="text-xs font-bold text-accent-lightgreen tracking-widest uppercase block mb-3">OUR
                        APPROACH</span>
                    <h2 class="text-2xl font-extrabold text-gray-900 mb-4 leading-tight">How We Deliver Results</h2>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        We combine engineering excellence, data intelligence, and industry experience to deliver practical,
                        measurable, and sustainable solutions.
                    </p>
                </div>

                <!-- Right: 5 Steps Timeline -->
                <div
                    class="lg:col-span-8 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6 sm:gap-4 relative">

                    <!-- Step 1 -->
                    <div class="flex flex-col items-center text-center w-full sm:w-auto flex-1">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-3">
                            <i class="fa-solid fa-magnifying-glass text-primary text-lg"></i>
                        </div>
                        <h4 class="text-xs font-bold text-gray-900 uppercase mb-1">Understand</h4>
                        <p class="text-[10px] text-gray-500 leading-tight max-w-[100px]">We analyze your needs, challenges,
                            and objectives.</p>
                    </div>

                    <!-- Arrow -->
                    <div class="hidden sm:block text-gray-300 mt-[-20px]"><i class="fa-solid fa-arrow-right"></i></div>

                    <!-- Step 2 -->
                    <div class="flex flex-col items-center text-center w-full sm:w-auto flex-1">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-3">
                            <i class="fa-solid fa-pen-ruler text-primary text-lg"></i>
                        </div>
                        <h4 class="text-xs font-bold text-gray-900 uppercase mb-1">Design</h4>
                        <p class="text-[10px] text-gray-500 leading-tight max-w-[100px]">We design the right solution with
                            a robust methodology.</p>
                    </div>

                    <!-- Arrow -->
                    <div class="hidden sm:block text-gray-300 mt-[-20px]"><i class="fa-solid fa-arrow-right"></i></div>

                    <!-- Step 3 -->
                    <div class="flex flex-col items-center text-center w-full sm:w-auto flex-1">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-3">
                            <i class="fa-solid fa-gears text-primary text-lg"></i>
                        </div>
                        <h4 class="text-xs font-bold text-gray-900 uppercase mb-1">Implement</h4>
                        <p class="text-[10px] text-gray-500 leading-tight max-w-[100px]">We implement solutions with
                            precision and professionalism.</p>
                    </div>

                    <!-- Arrow -->
                    <div class="hidden sm:block text-gray-300 mt-[-20px]"><i class="fa-solid fa-arrow-right"></i></div>

                    <!-- Step 4 -->
                    <div class="flex flex-col items-center text-center w-full sm:w-auto flex-1">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-3">
                            <i class="fa-solid fa-chart-line text-primary text-lg"></i>
                        </div>
                        <h4 class="text-xs font-bold text-gray-900 uppercase mb-1">Improve</h4>
                        <p class="text-[10px] text-gray-500 leading-tight max-w-[100px]">We continuously monitor, evaluate,
                            and improve for better outcomes.</p>
                    </div>

                    <!-- Arrow -->
                    <div class="hidden sm:block text-gray-300 mt-[-20px]"><i class="fa-solid fa-arrow-right"></i></div>

                    <!-- Step 5 -->
                    <div class="flex flex-col items-center text-center w-full sm:w-auto flex-1">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-3">
                            <i class="fa-solid fa-bullseye text-primary text-lg"></i>
                        </div>
                        <h4 class="text-xs font-bold text-gray-900 uppercase mb-1">Impact</h4>
                        <p class="text-[10px] text-gray-500 leading-tight max-w-[100px]">We deliver measurable impact for
                            your business, people, and the planet.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ====== CTA SECTION ====== -->
    <section class="w-full py-12 bg-primary-dark">
        <div class="max-w-[1600px] mx-auto px-4 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <!-- Left: Text -->
                <div class="flex items-start space-x-4 text-white">
                    <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fa-solid fa-comment-dots text-accent-lightgreen text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-extrabold mb-1">Ready to Start Your Sustainability Journey?</h3>
                        <p class="text-sm text-gray-300 leading-relaxed max-w-xl">Our team is ready to support you with
                            integrated solutions that drive sustainable impact and long-term value.</p>
                    </div>
                </div>
                <!-- Right: Button -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}#contact"
                        class="inline-flex items-center space-x-2 bg-accent-lightgreen text-primary-dark px-6 py-3 rounded text-sm font-bold hover:bg-white transition">
                        <span>CONTACT US</span>
                        <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
