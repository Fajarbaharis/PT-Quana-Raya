<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Quana Raya Shakatama - Integrated Solutions</title>
    
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts - Inter + Playfair Display -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            dark: '#064e3b',
                            DEFAULT: '#1a5f4a',
                            light: '#2d8a6e',
                        },
                        accent: {
                            gold: '#d4a84c',
                            yellow: '#f0c84a',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    },
                }
            }
        }
    </script>
    
    <style>
        body { 
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
        }
        
        html { scroll-behavior: smooth; }
        
        /* ============================================
           SCROLL REVEAL ANIMATIONS
           ============================================ */
        
        /* Initial state: hidden dan geser ke bawah */
        .reveal {
            opacity: 0;
            transform: translateY(60px);
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }
        
        /* Active state: visible dan posisi normal */
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Variant: dari kiri */
        .reveal-left {
            opacity: 0;
            transform: translateX(-60px);
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }
        
        .reveal-left.active {
            opacity: 1;
            transform: translateX(0);
        }
        
        /* Variant: dari kanan */
        .reveal-right {
            opacity: 0;
            transform: translateX(60px);
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }
        
        .reveal-right.active {
            opacity: 1;
            transform: translateX(0);
        }
        
        /* Variant: scale up */
        .reveal-scale {
            opacity: 0;
            transform: scale(0.9);
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }
        
        .reveal-scale.active {
            opacity: 1;
            transform: scale(1);
        }
        
        /* Stagger delay untuk child elements */
        .reveal-delay-1 { transition-delay: 0.1s; }
        .reveal-delay-2 { transition-delay: 0.2s; }
        .reveal-delay-3 { transition-delay: 0.3s; }
        .reveal-delay-4 { transition-delay: 0.4s; }
        .reveal-delay-5 { transition-delay: 0.5s; }
        .reveal-delay-6 { transition-delay: 0.6s; }
        
        /* ============================================
           EXISTING STYLES
           ============================================ */
        
        /* Pattern Background untuk Section Hijau */
        .pattern-bg {
            position: relative;
            overflow: hidden;
        }
        
        .pattern-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                radial-gradient(circle at 20% 50%, rgba(212, 168, 76, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 40% 20%, rgba(212, 168, 76, 0.05) 0%, transparent 50%);
            pointer-events: none;
            z-index: 0;
        }
        
        .pattern-bg > * {
            position: relative;
            z-index: 1;
        }
        
        /* Dots Pattern untuk Footer */
        .dots-pattern {
            position: relative;
        }
        
        .dots-pattern::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: radial-gradient(circle, rgba(255, 255, 255, 0.08) 1px, transparent 1px);
            background-size: 30px 30px;
            pointer-events: none;
            z-index: 0;
        }
        
        .dots-pattern > * {
            position: relative;
            z-index: 1;
        }
        
        /* Gradient untuk Icon Circles */
        .gradient-icon-circle {
            background: linear-gradient(135deg, #064e3b 0%, #1a5f4a 100%);
            position: relative;
            overflow: hidden;
        }
        
        .gradient-icon-circle::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(212, 168, 76, 0.2) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .gradient-icon-circle:hover::before {
            opacity: 1;
        }
        
        /* Gradient untuk Buttons */
        .gradient-btn {
            background: linear-gradient(135deg, #064e3b 0%, #1a5f4a 100%);
            position: relative;
            overflow: hidden;
        }
        
        .gradient-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }
        
        .gradient-btn:hover::before {
            left: 100%;
        }
        
        /* Navbar Logo Gradient */
        .logo-gradient {
            background: linear-gradient(135deg, #d4a84c 0%, #064e3b 100%);
            position: relative;
            overflow: hidden;
        }
        
        .logo-gradient::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
        }
        
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 50%;
            background: linear-gradient(90deg, #064e3b, #d4a84c);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .btn-primary {
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(6, 78, 59, 0.3);
        }
        
        .btn-secondary {
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            background-color: rgba(6, 78, 59, 0.05);
            transform: translateY(-2px);
        }
        
        /* Service Card Styles */
        .service-card {
            transition: all 0.3s ease;
            border: 1px solid #e5e7eb;
        }
        
        .service-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08);
            border-color: #1a5f4a;
        }
        
        .service-icon-circle {
            background: linear-gradient(135deg, #064e3b 0%, #1a5f4a 100%);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .service-icon-circle::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 30%, rgba(212, 168, 76, 0.3) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .service-card:hover .service-icon-circle::before {
            opacity: 1;
        }
        
        .service-card:hover .service-icon-circle {
            transform: scale(1.05);
        }
        
        .learn-more-link {
            transition: all 0.3s ease;
        }
        
        .learn-more-link:hover {
            color: #064e3b;
            letter-spacing: 0.5px;
        }
        
        .feature-item {
            transition: all 0.3s ease;
        }
        
        .feature-item:hover {
            transform: translateX(5px);
        }
        
        .feature-icon-box {
            background: white;
            border: 1px solid #e5e7eb;
            transition: all 0.3s ease;
        }
        
        .feature-item:hover .feature-icon-box {
            border-color: #064e3b;
            box-shadow: 0 4px 12px rgba(6, 78, 59, 0.1);
        }
        
        .value-item {
            position: relative;
        }
        
        .value-item:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            height: 60%;
            width: 1px;
            background: linear-gradient(to bottom, transparent, rgba(212, 168, 76, 0.5), transparent);
        }
        
        .value-icon-circle {
            border: 2px solid #d4a84c;
            background: linear-gradient(135deg, rgba(6, 78, 59, 0.8) 0%, rgba(26, 95, 74, 0.6) 100%);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .value-icon-circle::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(212, 168, 76, 0.4) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .value-item:hover .value-icon-circle::before {
            opacity: 1;
        }
        
        .value-item:hover .value-icon-circle {
            transform: scale(1.05);
        }
        
        .checkmark-item {
            transition: all 0.3s ease;
        }
        
        .checkmark-item:hover {
            transform: translateX(5px);
        }
        
        .checkmark-icon {
            background: linear-gradient(135deg, #064e3b 0%, #1a5f4a 100%);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .checkmark-icon::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 30%, rgba(212, 168, 76, 0.3) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .checkmark-item:hover .checkmark-icon::before {
            opacity: 1;
        }
        
        .checkmark-item:hover .checkmark-icon {
            transform: scale(1.1);
        }
        
        /* Contact CTA Styles */
        .contact-icon-circle {
            background: linear-gradient(135deg, #064e3b 0%, #1a5f4a 100%);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .contact-icon-circle::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(212, 168, 76, 0.3) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .contact-icon-circle:hover::before {
            opacity: 1;
        }
        
        .contact-icon-circle:hover {
            transform: rotate(-5deg) scale(1.05);
        }
        
        .contact-method {
            transition: all 0.3s ease;
        }
        
        .contact-method:hover {
            transform: translateX(5px);
        }
        
        .contact-method:hover .contact-icon {
            color: #d4a84c;
        }
        
        /* Footer Styles */
        .footer-link {
            transition: all 0.3s ease;
            position: relative;
        }
        
        .footer-link::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 0;
            height: 1px;
            background: linear-gradient(90deg, #d4a84c, transparent);
            transition: width 0.3s ease;
        }
        
        .footer-link:hover::before {
            width: 100%;
        }
        
        .footer-link:hover {
            color: #d4a84c;
        }
        
        .social-icon {
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            transform: translateY(-3px);
            color: #d4a84c;
        }
    </style>
</head>
<body class="bg-white text-gray-800">

    <!-- Navbar -->
        <nav class="bg-white shadow-sm fixed w-full z-50 border-b border-gray-100">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="flex justify-between items-center py-4">
                <!-- Logo Section -->
                <div class="flex items-center space-x-4">
                    <!-- Logo Placeholder - Hexagon Shape dengan Gradient -->
                    <div class="relative w-16 h-16 flex items-center justify-center">
                        <div class="logo-gradient absolute inset-0 transform rotate-45 rounded-lg opacity-90"></div>
                        <div class="relative z-10 text-white font-bold text-2xl">Q</div>
                    </div>
                    <!-- Company Name -->
                    <div class="flex flex-col">
                        <span class="text-lg font-bold text-primary-dark leading-tight tracking-tight">PT. QUANA RAYA</span>
                        <span class="text-lg font-bold text-primary-dark leading-tight tracking-tight">SHAKATAMA</span>
                        <span class="text-[10px] font-semibold text-gray-600 tracking-wider mt-1">INTEGRATED SOLUTIONS</span>
                        <span class="text-[10px] font-semibold text-gray-600 tracking-wider">FOR A SUSTAINABLE FUTURE</span>
                    </div>
                </div>
                
                <!-- Navigation Links - Desktop -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#home" class="nav-link text-gray-700 hover:text-primary-dark font-semibold text-sm">Home</a>
                    <a href="#about" class="nav-link text-gray-700 hover:text-primary-dark font-semibold text-sm">About Us</a>
                    <a href="#services" class="nav-link text-gray-700 hover:text-primary-dark font-semibold text-sm">Our Services</a>
                    <a href="#platform" class="nav-link text-gray-700 hover:text-primary-dark font-semibold text-sm">Carbontalk.id</a>
                    <a href="#why-us" class="nav-link text-gray-700 hover:text-primary-dark font-semibold text-sm">Why Us</a>
                    <a href="#contact" class="nav-link text-gray-700 hover:text-primary-dark font-semibold text-sm">Contact</a>
                    
                    <!-- CTA Button dengan Gradient -->
                    <a href="#contact" class="gradient-btn text-white px-6 py-3 rounded-lg font-semibold text-sm flex items-center space-x-2">
                        <span>Get in Touch</span>
                        <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button class="lg:hidden text-primary-dark focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-24 pb-16 lg:pt-28 lg:pb-20 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
                
                <!-- Left Content -->
                <div class="lg:w-5/12 reveal-left">
                    <!-- Main Heading -->
                    <h1 class="text-2xl lg:text-4xl font-black text-primary-dark mb-5 leading-[1.15] tracking-tight">
                        DRIVING SUSTAINABLE<br>
                        GROWTH FOR<br>
                        A BETTER FUTURE
                    </h1>
                    
                    <!-- Yellow Accent Line -->
                    <div class="w-16 h-1 bg-[#d4a84c] mb-6 reveal reveal-delay-1"></div>
                    
                    <!-- Description -->
                    <p class="text-base lg:text-lg text-gray-600 mb-8 leading-relaxed font-normal reveal reveal-delay-2">
                        PT. Quana Raya Shakatama is a consulting and engineering company that delivers integrated solutions to help industries operate safely, efficiently, and sustainably.
                    </p>
                    
                    <!-- CTA Buttons dengan Gradient -->
                    <div class="flex flex-col sm:flex-row gap-3 reveal reveal-delay-3">
                        <a href="#services" class="gradient-btn text-white px-7 py-3.5 rounded-lg font-semibold text-sm flex items-center justify-center space-x-2">
                            <span>Our Services</span>
                            <i class="fas fa-arrow-right text-xs"></i>
                        </a>
                        <a href="#about" class="btn-secondary border-2 border-[#064e3b] text-[#064e3b] px-7 py-3.5 rounded-lg font-semibold text-sm flex items-center justify-center space-x-2 hover:bg-[#064e3b] hover:text-white">
                            <i class="fas fa-play-circle text-base"></i>
                            <span>About Us</span>
                        </a>
                    </div>
                </div>
                
                <!-- Right Content - Image -->
                <div class="lg:w-7/12 relative reveal-right">
                    <div class="relative z-10">
                        <img src="{{ asset('images/sustainability-bg.jpg') }}" 
                             alt="Sustainable Energy" 
                             class="w-full h-auto rounded-2xl shadow-xl">
                        
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-dark via-transparent to-transparent opacity-10 rounded-2xl pointer-events-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR SERVICES Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center mb-14 reveal">
                <h2 class="text-4xl lg:text-5xl font-black text-primary-dark mb-4 tracking-tight">OUR SERVICES</h2>
                <div class="w-16 h-1 bg-accent-yellow mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-3xl mx-auto text-base lg:text-lg leading-relaxed">
                    We provide a wide range of consulting, engineering, inspection, training, and construction services to support your business performance and compliance.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                
                <!-- Service 1 -->
                <div class="service-card bg-white p-7 rounded-xl reveal reveal-delay-1">
                    <div class="flex items-start space-x-4 mb-4">
                        <div class="service-icon-circle w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-leaf text-white text-2xl relative z-10"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 leading-tight pt-2">
                            Carbon Solutions<br>
                            <span class="text-base font-semibold text-gray-700">via carbontalk.id</span>
                        </h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-5">
                        Carbon accounting, analysis, training, engineering of CO₂e measurement and construction.
                    </p>
                    <a href="#" class="learn-more-link inline-flex items-center text-primary-dark font-semibold text-sm">
                        Learn More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>

                <!-- Service 2 -->
                <div class="service-card bg-white p-7 rounded-xl reveal reveal-delay-2">
                    <div class="flex items-start space-x-4 mb-4">
                        <div class="service-icon-circle w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-user-friends text-white text-2xl relative z-10"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 leading-tight pt-2">
                            Management System<br>
                            <span class="text-base font-semibold text-gray-700">Consulting & Training</span>
                        </h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-5">
                        ISO implementation, audits, and training to build robust and effective management systems.
                    </p>
                    <a href="#" class="learn-more-link inline-flex items-center text-primary-dark font-semibold text-sm">
                        Learn More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>

                <!-- Service 3 -->
                <div class="service-card bg-white p-7 rounded-xl reveal reveal-delay-3">
                    <div class="flex items-start space-x-4 mb-4">
                        <div class="service-icon-circle w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-search text-white text-2xl relative z-10"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 leading-tight pt-2">
                            Inspection &<br>
                            <span class="text-base font-semibold text-gray-700">Technical Testing</span>
                        </h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-5">
                        Inspection and technical testing of equipment to ensure safety, reliability, and regulatory compliance.
                    </p>
                    <a href="#" class="learn-more-link inline-flex items-center text-primary-dark font-semibold text-sm">
                        Learn More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>

                <!-- Service 4 -->
                <div class="service-card bg-white p-7 rounded-xl reveal reveal-delay-4">
                    <div class="flex items-start space-x-4 mb-4">
                        <div class="service-icon-circle w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-hard-hat text-white text-2xl relative z-10"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 leading-tight pt-2">
                            NDT Training
                        </h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-5">
                        Certified Non-Destructive Testing training programs to develop competent and qualified personnel.
                    </p>
                    <a href="#" class="learn-more-link inline-flex items-center text-primary-dark font-semibold text-sm">
                        Learn More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>

                <!-- Service 5 -->
                <div class="service-card bg-white p-7 rounded-xl reveal reveal-delay-5">
                    <div class="flex items-start space-x-4 mb-4">
                        <div class="service-icon-circle w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-shopping-cart text-white text-2xl relative z-10"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 leading-tight pt-2">
                            General Trading
                        </h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-5">
                        Providing industrial equipment, materials, and supporting products for your operational needs.
                    </p>
                    <a href="#" class="learn-more-link inline-flex items-center text-primary-dark font-semibold text-sm">
                        Learn More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>

                <!-- Service 6 -->
                <div class="service-card bg-white p-7 rounded-xl reveal reveal-delay-6">
                    <div class="flex items-start space-x-4 mb-4">
                        <div class="service-icon-circle w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-building text-white text-2xl relative z-10"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 leading-tight pt-2">
                            General Contractor
                        </h3>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-5">
                        Engineering, procurement, construction, and commissioning services with a commitment to quality and safety.
                    </p>
                    <a href="#" class="learn-more-link inline-flex items-center text-primary-dark font-semibold text-sm">
                        Learn More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- OUR PLATFORM Section -->
    <section id="platform" class="py-20 bg-slate-100">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
                
                <div class="lg:w-1/2 reveal-left">
                    <span class="text-sm font-bold text-primary-dark tracking-widest uppercase mb-4 block">OUR PLATFORM</span>
                    
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="relative w-14 h-14 flex items-center justify-center">
                            <div class="gradient-icon-circle absolute inset-0 rounded-full"></div>
                            <i class="fas fa-leaf text-accent-gold text-2xl relative z-10"></i>
                        </div>
                        <div>
                            <div class="text-3xl font-black text-primary-dark tracking-tight">carbontalk.id</div>
                            <div class="text-xs font-semibold text-gray-500 tracking-widest uppercase">Measure. Analyze. Decarbonize.</div>
                        </div>
                    </div>
                    
                    <p class="text-gray-700 text-base leading-relaxed mb-8">
                        Carbontalk.id is our dedicated platform for carbon solutions. We help organizations measure, analyze, and reduce their carbon footprint through data-driven strategies, innovative engineering, and capacity building.
                    </p>
                    
                    <a href="https://carbontalk.id" target="_blank" class="gradient-btn inline-flex items-center text-white px-8 py-4 rounded-lg font-semibold space-x-2">
                        <span>Explore carbontalk.id</span>
                        <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                </div>
                
                <div class="lg:w-1/2 reveal-right">
                    <div class="flex flex-col lg:flex-row items-center gap-8">
                        
                        <div class="flex flex-col space-y-5 lg:w-2/5">
                            <!-- Feature 1 -->
                            <div class="feature-item flex items-center space-x-4 reveal reveal-delay-1">
                                <div class="feature-icon-box w-14 h-14 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-cloud text-primary-dark text-2xl"></i>
                                </div>
                                <div>
                                    <div class="font-bold text-gray-900 text-sm">Carbon</div>
                                    <div class="font-bold text-gray-900 text-sm">Accounting</div>
                                </div>
                            </div>
                            
                            <!-- Feature 2 -->
                            <div class="feature-item flex items-center space-x-4 reveal reveal-delay-2">
                                <div class="feature-icon-box w-14 h-14 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-chart-bar text-primary-dark text-2xl"></i>
                                </div>
                                <div>
                                    <div class="font-bold text-gray-900 text-sm">Emissions</div>
                                    <div class="font-bold text-gray-900 text-sm">Analysis</div>
                                </div>
                            </div>
                            
                            <!-- Feature 3 -->
                            <div class="feature-item flex items-center space-x-4 reveal reveal-delay-3">
                                <div class="feature-icon-box w-14 h-14 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-tachometer-alt text-primary-dark text-2xl"></i>
                                </div>
                                <div>
                                    <div class="font-bold text-gray-900 text-sm">CO₂e Measurement</div>
                                    <div class="font-bold text-gray-900 text-sm">Engineering</div>
                                </div>
                            </div>
                            
                            <!-- Feature 4 -->
                            <div class="feature-item flex items-center space-x-4 reveal reveal-delay-4">
                                <div class="feature-icon-box w-14 h-14 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-graduation-cap text-primary-dark text-2xl"></i>
                                </div>
                                <div>
                                    <div class="font-bold text-gray-900 text-sm">Training & Capacity</div>
                                    <div class="font-bold text-gray-900 text-sm">Building</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Device Mockup -->
                        <div class="lg:w-3/5 relative reveal-scale reveal-delay-2">
                            <div class="relative">
                                <div class="bg-gray-800 rounded-t-xl p-2 pb-0 shadow-2xl">
                                    <div class="bg-white rounded-t-lg overflow-hidden">
                                        </div>
                                        <div class="p-4 bg-gray-50 min-h-[200px]">
                                            <div class="text-xs font-bold text-gray-700 mb-3">Dashboard</div>
                                            <div class="grid grid-cols-3 gap-2 mb-3">
                                                <div class="bg-white p-2 rounded shadow-sm">
                                                    <div class="text-[10px] text-gray-500">Emissions</div>
                                                    <div class="text-lg font-black text-primary-dark">12,450</div>
                                                </div>
                                                <div class="bg-white p-2 rounded shadow-sm">
                                                    <div class="text-[10px] text-gray-500">Reduction</div>
                                                    <div class="text-lg font-black text-green-600">-23%</div>
                                                </div>
                                                <div class="bg-white p-2 rounded shadow-sm">
                                                    <div class="text-[10px] text-gray-500">Projects</div>
                                                    <div class="text-lg font-black text-primary-dark">48</div>
                                                </div>
                                            </div>
                                            <div class="bg-white p-3 rounded shadow-sm">
                                                <div class="flex items-end space-x-1 h-16">
                                                    <div class="bg-primary-dark w-4 rounded-t" style="height: 40%"></div>
                                                    <div class="bg-primary-dark w-4 rounded-t" style="height: 65%"></div>
                                                    <div class="bg-primary-dark w-4 rounded-t" style="height: 45%"></div>
                                                    <div class="bg-primary-dark w-4 rounded-t" style="height: 80%"></div>
                                                    <div class="bg-primary-dark w-4 rounded-t" style="height: 55%"></div>
                                                    <div class="bg-primary-dark w-4 rounded-t" style="height: 90%"></div>
                                                    <div class="bg-primary-dark w-4 rounded-t" style="height: 70%"></div>
                                                    <div class="bg-primary-dark w-4 rounded-t" style="height: 95%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-700 h-3 rounded-b-lg mx-4"></div>
                                <div class="bg-gray-600 h-1.5 rounded-b-lg mx-8"></div>
                            </div>
                            
                            <div class="absolute -right-4 bottom-4 w-24 shadow-2xl">
                                <div class="bg-gray-800 rounded-2xl p-1.5">
                                    <div class="bg-white rounded-xl overflow-hidden">
                                        <div class="bg-gray-100 px-2 py-1 text-center">
                                            <div class="w-8 h-1 bg-gray-400 rounded-full mx-auto"></div>
                                        </div>
                                        <div class="p-2">
                                            <div class="text-[8px] font-bold text-gray-700 mb-1">Dashboard</div>
                                            <div class="bg-gray-50 p-1.5 rounded mb-1">
                                                <div class="text-[7px] text-gray-500">Emissions</div>
                                                <div class="text-sm font-black text-primary-dark">5,430</div>
                                            </div>
                                            <div class="bg-gray-50 p-1.5 rounded">
                                                <div class="flex items-end space-x-0.5 h-8">
                                                    <div class="bg-primary-dark w-1.5 rounded-t" style="height: 30%"></div>
                                                    <div class="bg-primary-dark w-1.5 rounded-t" style="height: 50%"></div>
                                                    <div class="bg-primary-dark w-1.5 rounded-t" style="height: 40%"></div>
                                                    <div class="bg-primary-dark w-1.5 rounded-t" style="height: 70%"></div>
                                                    <div class="bg-primary-dark w-1.5 rounded-t" style="height: 60%"></div>
                                                    <div class="bg-primary-dark w-1.5 rounded-t" style="height: 85%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Value Proposition Section dengan Pattern Background -->
    <section class="py-10 bg-primary-dark pattern-bg">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-6">
                
                <div class="value-item flex items-center space-x-4 reveal reveal-delay-1">
                    <div class="value-icon-circle w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-globe text-accent-gold text-2xl relative z-10"></i>
                    </div>
                    <div>
                        <div class="text-white font-bold text-sm leading-tight">Helping Industries</div>
                        <div class="text-white font-bold text-sm leading-tight">Build a Sustainable</div>
                        <div class="text-white font-bold text-sm leading-tight">Future</div>
                    </div>
                </div>
                
                <div class="value-item flex items-center space-x-4 reveal reveal-delay-2">
                    <div class="value-icon-circle w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-leaf text-accent-gold text-2xl relative z-10"></i>
                    </div>
                    <div>
                        <div class="text-white font-bold text-sm leading-tight">Integrated Solutions</div>
                        <div class="text-white font-bold text-sm leading-tight">for Safety, Efficiency</div>
                        <div class="text-white font-bold text-sm leading-tight">& Sustainability</div>
                    </div>
                </div>
                
                <div class="value-item flex items-center space-x-4 reveal reveal-delay-3">
                    <div class="value-icon-circle w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-user text-accent-gold text-2xl relative z-10"></i>
                    </div>
                    <div>
                        <div class="text-white font-bold text-sm leading-tight">Experienced Team</div>
                        <div class="text-white font-bold text-sm leading-tight">with Multi-Industry</div>
                        <div class="text-white font-bold text-sm leading-tight">Expertise</div>
                    </div>
                </div>
                
                <div class="value-item flex items-center space-x-4 reveal reveal-delay-4">
                    <div class="value-icon-circle w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-handshake-angle text-accent-gold text-2xl relative z-10"></i>
                    </div>
                    <div>
                        <div class="text-white font-bold text-sm leading-tight">Committed to Quality,</div>
                        <div class="text-white font-bold text-sm leading-tight">Integrity & Long-Term</div>
                        <div class="text-white font-bold text-sm leading-tight">Partnership</div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US Section -->
    <section id="why-us" class="py-20 bg-white">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
                
                <div class="lg:w-1/2 reveal-left">
                    <div class="relative">
                        <img src="{{ asset('images/why-choose-us.jpg') }}" 
                             alt="Sustainable Globe" 
                             class="rounded-2xl shadow-xl w-full h-auto"
                             onerror="this.src='https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&w=800&q=80'">
                    </div>
                </div>
                
                <div class="lg:w-1/2 reveal-right">
                    <span class="text-sm font-bold text-accent-gold tracking-widest uppercase mb-4 block">WHY CHOOSE US</span>
                    
                    <h2 class="text-3xl lg:text-4xl font-black text-gray-900 mb-6 leading-tight">
                        Your Trusted Partner for<br>
                        <span class="text-primary-dark">Sustainable Performance</span>
                    </h2>
                    
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        We combine expertise, innovation, and integrity to deliver solutions that create real impact for your business and the environment.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="checkmark-item flex items-center space-x-4 reveal reveal-delay-1">
                            <div class="checkmark-icon w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check text-white text-sm relative z-10"></i>
                            </div>
                            <span class="text-gray-800 font-semibold">Holistic and Integrated Services</span>
                        </div>
                        
                        <div class="checkmark-item flex items-center space-x-4 reveal reveal-delay-2">
                            <div class="checkmark-icon w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check text-white text-sm relative z-10"></i>
                            </div>
                            <span class="text-gray-800 font-semibold">Practical Solutions with Measurable Impact</span>
                        </div>
                        
                        <div class="checkmark-item flex items-center space-x-4 reveal reveal-delay-3">
                            <div class="checkmark-icon w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check text-white text-sm relative z-10"></i>
                            </div>
                            <span class="text-gray-800 font-semibold">Experienced Professionals</span>
                        </div>
                        
                        <div class="checkmark-item flex items-center space-x-4 reveal reveal-delay-4">
                            <div class="checkmark-icon w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-check text-white text-sm relative z-10"></i>
                            </div>
                            <span class="text-gray-800 font-semibold">Commitment to Sustainability</span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- HAPPY TO HELP YOUR BUSINESS (Contact CTA) Section -->
    <section id="contact" class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-12">
                
                <!-- Left: Icon + Text -->
                <div class="flex items-center space-x-6 lg:w-2/5 reveal-left">
                    <!-- Handshake Icon Circle dengan Gradient -->
                    <div class="contact-icon-circle w-20 h-20 rounded-full flex items-center justify-center flex-shrink-0 shadow-lg">
                        <i class="fas fa-handshake text-white text-4xl relative z-10"></i>
                    </div>
                    
                    <!-- Text Content -->
                    <div>
                        <h2 class="font-serif text-2xl lg:text-3xl font-bold text-gray-900 italic mb-2 leading-tight">
                            Happy to Help Your Business
                        </h2>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            We are ready to support your business with the right solutions. Feel free to contact us anytime. We look forward to working with you!
                        </p>
                    </div>
                </div>
                
                <!-- Middle: Contact Info -->
                <div class="flex flex-col space-y-3 lg:w-1/3 reveal">
                    <!-- Email -->
                    <div class="contact-method flex items-center space-x-3">
                        <i class="fas fa-envelope contact-icon text-primary-dark text-xl w-6"></i>
                        <a href="mailto:office@qrstama.com" class="text-gray-800 font-semibold hover:text-primary-dark transition">
                            office@qrstama.com
                        </a>
                    </div>
                    
                    <!-- WhatsApp -->
                    <div class="contact-method flex items-center space-x-3">
                        <i class="fab fa-whatsapp contact-icon text-primary-dark text-2xl w-6"></i>
                        <a href="https://wa.me/6281119051196" target="_blank" class="text-gray-800 font-semibold hover:text-primary-dark transition">
                            081119051196
                        </a>
                    </div>
                </div>
                
                <!-- Right: CTA Button dengan Gradient -->
                <div class="lg:w-1/5 flex justify-center lg:justify-end reveal-right">
                    <a href="mailto:office@qrstama.com" class="gradient-btn inline-flex items-center text-white px-8 py-4 rounded-lg font-semibold space-x-2 shadow-lg">
                        <span>Contact Us</span>
                        <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                </div>
                
            </div>
        </div>
    </section>

    <!-- FOOTER dengan Dots Pattern -->
    <footer class="bg-primary-dark text-white pt-10 pb-6 dots-pattern">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 lg:gap-8 mb-8">
                
                <!-- Column 1: Company Info -->
                <div class="reveal reveal-delay-1">
                    <div class="flex items-center space-x-4 mb-5">
                        <!-- Logo Placeholder dengan Gradient -->
                        <div class="relative w-14 h-14 flex items-center justify-center flex-shrink-0">
                            <div class="logo-gradient absolute inset-0 transform rotate-45 rounded-lg opacity-90"></div>
                            <div class="relative z-10 text-white font-bold text-2xl">Q</div>
                        </div>
                        <div>
                            <div class="text-lg font-bold leading-tight tracking-tight">PT. QUANA RAYA</div>
                            <div class="text-lg font-bold leading-tight tracking-tight">SHAKATAMA</div>
                            <div class="text-[9px] font-semibold text-gray-300 tracking-wider mt-1">INTEGRATED SOLUTIONS</div>
                            <div class="text-[9px] font-semibold text-gray-300 tracking-wider">FOR A SUSTAINABLE FUTURE</div>
                        </div>
                    </div>
                    
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Delivering integrated consulting, engineering, inspection, training, and construction solutions for a safer, smarter, and more sustainable future.
                    </p>
                </div>
                
                <!-- Column 2: Quick Links -->
                <div class="reveal reveal-delay-2">
                    <h4 class="text-lg font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2.5">
                        <li><a href="#home" class="footer-link text-gray-300 text-sm inline-block">Home</a></li>
                        <li><a href="#about" class="footer-link text-gray-300 text-sm inline-block">About Us</a></li>
                        <li><a href="#services" class="footer-link text-gray-300 text-sm inline-block">Our Services</a></li>
                        <li><a href="#platform" class="footer-link text-gray-300 text-sm inline-block">Carbontalk.id</a></li>
                        <li><a href="#why-us" class="footer-link text-gray-300 text-sm inline-block">Why Us</a></li>
                        <li><a href="#contact" class="footer-link text-gray-300 text-sm inline-block">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Column 3: Our Platform -->
                <div class="reveal reveal-delay-3">
                    <h4 class="text-lg font-bold mb-4">Our Platform</h4>
                    
                    <!-- Carbontalk.id Logo dengan Gradient -->
                    <div class="flex items-center space-x-3 mb-3">
                        <div class="relative w-12 h-12 flex items-center justify-center flex-shrink-0">
                            <div class="gradient-icon-circle absolute inset-0 rounded-full"></div>
                            <i class="fas fa-leaf text-primary-dark text-xl relative z-10"></i>
                        </div>
                        <div>
                            <div class="text-2xl font-black tracking-tight">carbontalk.id</div>
                            <div class="text-[9px] font-semibold text-gray-300 tracking-widest uppercase">Measure. Analyze. Decarbonize.</div>
                        </div>
                    </div>
                    
                    <p class="text-gray-300 text-sm leading-relaxed mb-4">
                        The business platform that help organizations measure, analyze, and reduce their carbon footprint.
                    </p>
                    
                    <a href="https://carbontalk.id" target="_blank" class="inline-flex items-center text-white font-semibold text-sm hover:text-accent-gold transition group">
                        <span>Visit Website</span>
                        <i class="fas fa-arrow-right ml-2 text-xs group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
                
            </div>
            
            <!-- Divider -->
            <div class="border-t border-white border-opacity-20 pt-6 reveal">
                <div class="flex flex-col lg:flex-row justify-between items-center gap-4">
                    
                    <!-- Copyright -->
                    <div class="text-gray-400 text-sm text-center lg:text-left">
                        <p>&copy; 2025 PT. Quana Raya Shakatama. All rights reserved.</p>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="flex items-center space-x-6">
                        <div class="flex items-center space-x-2 text-gray-300 text-sm">
                            <span class="font-semibold">LinkedIn:</span>
                            <a href="#" class="social-icon hover:text-accent-gold font-semibold">QRSTC</a>
                            <i class="fab fa-linkedin text-lg"></i>
                        </div>
                        <div class="flex items-center space-x-2 text-gray-300 text-sm">
                            <span class="font-semibold">Instagram:</span>
                            <a href="#" class="social-icon hover:text-accent-gold font-semibold">@carbontalk</a>
                            <i class="fab fa-instagram text-lg"></i>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- ============================================
         SCROLL REVEAL JAVASCRIPT
         ============================================ -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Konfigurasi Intersection Observer
            const observerOptions = {
                root: null, // viewport
                rootMargin: '0px',
                threshold: 0.15 // Elemen harus 15% terlihat untuk trigger
            };
            
            // Callback function saat elemen masuk/keluar viewport
            const observerCallback = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Elemen masuk viewport → tambahkan class active
                        entry.target.classList.add('active');
                    } else {
                        // Elemen keluar viewport → hapus class active (animasi ulang saat scroll kembali)
                        entry.target.classList.remove('active');
                    }
                });
            };
            
            // Buat observer
            const observer = new IntersectionObserver(observerCallback, observerOptions);
            
            // Observe semua elemen dengan class reveal
            const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');
            revealElements.forEach(el => observer.observe(el));
        });
    </script>

</body>
</html>