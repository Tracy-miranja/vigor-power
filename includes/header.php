<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Vigor Manpower Solutions Ltd'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- AOS Animation -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    
    <style>
        /* Font Family Setup */
        body {
            font-family: 'DM Sans', sans-serif;
        }
        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }
        
        /* Hero Section Styles */
        .hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 50%, #3b82f6 100%);
            position: relative;
            overflow: hidden;
            min-height: 600px;
        }
        
        /* Job Carousel Background */
        .job-carousel-bg {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            opacity: 0.1;
        }
        
        .carousel-track {
            display: flex;
            animation: scroll 40s linear infinite;
            white-space: nowrap;
        }
        
        .job-card-bg {
            flex-shrink: 0;
            padding: 20px 40px;
            margin: 10px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            font-size: 24px;
            font-weight: bold;
            color: white;
            backdrop-filter: blur(5px);
        }
        
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(30, 58, 138, 0.7);
        }
        
        /* Service Icons Bar */
        .service-icons-bar {
            position: absolute;
            bottom: -50px;
            left: 0;
            right: 0;
            z-index: 20;
        }
        
        .service-icon-item {
            background: white;
            padding: 2rem;
            border-radius: 0.75rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .service-icon-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }
        
        .icon-wrapper {
            width: 60px;
            height: 60px;
            background: #eff6ff;
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }
        
        /* Dropdown Menu */
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        
        /* Card Hover Effects */
        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(30, 64, 175, 0.15);
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
        }
        
        .stagger-1 { animation-delay: 0.1s; }
        .stagger-2 { animation-delay: 0.2s; }
        .stagger-3 { animation-delay: 0.3s; }
        
        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            padding: 8rem 0 4rem 0;
            position: relative;
            overflow: hidden;
        }
        
        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse"><path d="M 40 0 L 0 0 0 40" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            opacity: 0.3;
        }
        
        /* Job Card Border Effect */
        .job-card {
            border-left: 4px solid #3b82f6;
            transition: all 0.3s ease;
        }
        
        .job-card:hover {
            border-left-color: #f97316;
            transform: translateX(5px);
        }
        
        /* Service Card Icons */
        .service-card .service-icon {
            transition: all 0.3s ease;
        }
        
        .service-card:hover .service-icon {
            transform: rotate(5deg) scale(1.1);
        }
        
        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Responsive Mobile Adjustments */
        @media (max-width: 768px) {
            .hero-section {
                min-height: 500px;
            }
            .job-card-bg {
                font-size: 18px;
                padding: 15px 30px;
            }
            .service-icons-bar {
                position: static;
                margin-top: 2rem;
            }
        }
    </style>
</head>
<body class="bg-white">
    <!-- Navigation -->
    <nav class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center">
    <a href="index.php" class="flex items-center gap-3">
        <div class="flex-shrink-0">
          
            <img class="h-12 w-auto" src="assets/images/logo.jpeg" alt="Vigor Manpower Solutions">
          
        </div>
        <div>
            <h1 class="text-2xl font-bold text-[#1e3a8a]">Vigor Manpower</h1>
            <p class="text-xs text-gray-600 -mt-1">Solutions Ltd</p>
        </div>
    </a>
</div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8 z-10">
                        <a href="index.php" class="nav-link text-gray-700 hover:text-blue-600 font-medium">Home</a>
                        
                        <!-- Services Dropdown -->
                        <div class="relative dropdown">
                            <button class="nav-link text-gray-700 hover:text-blue-600 font-medium flex items-center">
                                Services
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="dropdown-menu absolute left-0 mt-0 w-64 bg-white rounded-lg shadow-xl py-2 hidden">
                                <a href="services.php#recruitment" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                                    <div class="font-semibold">Recruitment & Selection</div>
                                    <div class="text-sm text-gray-500">Strategic talent acquisition</div>
                                </a>
                                <a href="services.php#hr-consulting" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                                    <div class="font-semibold">HR Consulting</div>
                                    <div class="text-sm text-gray-500">Expert HR guidance</div>
                                </a>
                                <a href="services.php#visa-processing" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                                    <div class="font-semibold">Visa & Work Permits</div>
                                    <div class="text-sm text-gray-500">Immigration services</div>
                                </a>
                                <a href="services.php#pre-departure" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                                    <div class="font-semibold">Pre-Departure Training</div>
                                    <div class="text-sm text-gray-500">Cultural orientation</div>
                                </a>
                                <a href="services.php#hr-outsourcing" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                                    <div class="font-semibold">HR Outsourcing</div>
                                    <div class="text-sm text-gray-500">Full HR management</div>
                                </a>
                                <a href="services.php#job-portal" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                                    <div class="font-semibold">Job Portal Access</div>
                                    <div class="text-sm text-gray-500">Updated opportunities</div>
                                </a>
                            </div>
                        </div>
                        
                        <a href="jobs.php" class="nav-link text-gray-700 hover:text-blue-600 font-medium">Jobs</a>
                        <a href="about.php" class="nav-link text-gray-700 hover:text-blue-600 font-medium">About</a>
                        <a href="contact.php" class="nav-link text-gray-700 hover:text-blue-600 font-medium">Contact</a>
                    </div>
                </div>
                <div class="hidden md:block">
                    <a href="jobs.php" class="btn-primary bg-[#E91E8C] hover:bg-[#D4145A]  text-white px-6 py-3 rounded-lg font-medium relative transition-all">
                        Apply Now
                    </a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-blue-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
            <div class="px-4 pt-2 pb-3 space-y-1">
                <a href="index.php" class="block px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Home</a>
                <a href="services.php" class="block px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Services</a>
                <a href="jobs.php" class="block px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Jobs</a>
                <a href="about.php" class="block px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">About</a>
                <a href="contact.php" class="block px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Contact</a>
                <a href="jobs.php" class="block px-3 py-2 bg-orange-500 text-white hover:bg-orange-600 rounded-md text-center font-medium">Apply Now</a>
            </div>
        </div>
    </nav>