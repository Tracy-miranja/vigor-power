<?php
$pageTitle = "Home - Vigor Manpower Solutions";
include 'includes/header.php';
?>

<!-- Hero Section with Gradient Background - RESPONSIVE -->
<section id="home" class="hero-section relative pt-32 pb-48 md:pb-40 overflow-visible">
<!-- Background Image on Right - Clear and visible -->
<div class="absolute inset-0 z-0">
    <div class="absolute right-0 top-10 h-full w-full md:w-1/2 bg-cover bg-center" 
         style="background-image: url('./assets/images/banner.jpeg');"></div>
</div>

<!-- Gradient Overlay - Seamlessly blends into the image -->
<div class="absolute inset-0 bg-gradient-to-r from-[#1e3a8a] from-0% via-[#1e3a8a]/95 via-35% via-[#1e3a8a]/60 via-60% to-transparent to-99% z-5"></div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 relative z-10">
    <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
        <!-- Text Content -->
        <div class="text-white text-center md:text-left">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-4 md:mb-6 fade-in-up leading-tight">
                Connecting Talent<br>With Opportunity
            </h1>
            <p class="text-lg sm:text-xl mb-6 md:mb-8 fade-in-up stagger-1 text-white leading-relaxed">
                Professional Recruitment & HR Outsourcing Solutions
            </p>
            <div class="flex flex-col sm:flex-row flex-wrap gap-4 fade-in-up stagger-2 justify-center md:justify-start">
                <a href="jobs.php" class="bg-[#E91E8C] hover:bg-[#D4145A] text-white px-8 py-4 rounded-lg font-semibold transition-all transform hover:scale-105 shadow-lg text-center">
                    Browse Jobs
                </a>
                <a href="services.php" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-[#1e3a8a] transition-all text-center">
                    Hire Talent
                </a>
            </div>
        </div>
        
        <!-- Right side - space for clear image -->
        <div class="hidden md:block"></div>
    </div>
</div>
    <!-- Service Icons Bar - Fixed positioning with higher z-index -->
    <div class="absolute -bottom-28 sm:-bottom-24 md:-bottom-20 left-0 right-0 z-50 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-6">
                <!-- Recruitment Card -->
                <div class="service-icon-item bg-white rounded-lg md:rounded-xl p-4 md:p-6 shadow-lg transform hover:-translate-y-1 transition-all">
                    <div class="icon-wrapper mx-auto w-12 h-12 md:w-16 md:h-16 bg-[#1e3a8a]/10 rounded-lg flex items-center justify-center mb-3 md:mb-4">
                        <svg class="w-6 h-6 md:w-8 md:h-8 text-[#1e3a8a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-700 font-semibold text-center text-sm md:text-base">Recruitment</p>
                </div>
                
                <!-- HR Outsourcing Card -->
                <div class="service-icon-item bg-white rounded-lg md:rounded-xl p-4 md:p-6 shadow-lg transform hover:-translate-y-1 transition-all">
                    <div class="icon-wrapper mx-auto w-12 h-12 md:w-16 md:h-16 bg-[#E91E8C]/10 rounded-lg flex items-center justify-center mb-3 md:mb-4">
                        <svg class="w-6 h-6 md:w-8 md:h-8 text-[#E91E8C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-700 font-semibold text-center text-sm md:text-base">HR Outsourcing</p>
                </div>
                
                <!-- Visa Processing Card -->
                <div class="service-icon-item bg-white rounded-lg md:rounded-xl p-4 md:p-6 shadow-lg transform hover:-translate-y-1 transition-all">
                    <div class="icon-wrapper mx-auto w-12 h-12 md:w-16 md:h-16 bg-[#1e3a8a]/10 rounded-lg flex items-center justify-center mb-3 md:mb-4">
                        <svg class="w-6 h-6 md:w-8 md:h-8 text-[#1e3a8a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-700 font-semibold text-center text-sm md:text-base">Visa Processing</p>
                </div>
                
                <!-- Training Card -->
                <div class="service-icon-item bg-white rounded-lg md:rounded-xl p-4 md:p-6 shadow-lg transform hover:-translate-y-1 transition-all">
                    <div class="icon-wrapper mx-auto w-12 h-12 md:w-16 md:h-16 bg-[#E91E8C]/10 rounded-lg flex items-center justify-center mb-3 md:mb-4">
                        <svg class="w-6 h-6 md:w-8 md:h-8 text-[#E91E8C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <p class="text-gray-700 font-semibold text-center text-sm md:text-base">Training</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section - Fixed to prevent covering the service cards -->
<section class="pt-36 sm:pt-32 md:pt-28 pb-16 md:pb-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 text-center">
            <div class="fade-in-up">
                <div class="text-4xl md:text-5xl font-bold text-[#1e3a8a] mb-2">5000+</div>
                <p class="text-gray-600 font-medium text-sm md:text-base">Candidates Placed</p>
            </div>
            <div class="fade-in-up">
                <div class="text-4xl md:text-5xl font-bold text-[#1e3a8a] mb-2">120+</div>
                <p class="text-gray-600 font-medium text-sm md:text-base">Client Companies</p>
            </div>
            <div class="fade-in-up">
                <div class="text-4xl md:text-5xl font-bold text-[#1e3a8a] mb-2">15+</div>
                <p class="text-gray-600 font-medium text-sm md:text-base">Industries Served</p>
            </div>
            <div class="fade-in-up">
                <div class="text-4xl md:text-5xl font-bold text-[#1e3a8a] mb-2">98%</div>
                <p class="text-gray-600 font-medium text-sm md:text-base">Success Rate</p>
            </div>
        </div>
    </div>
</section>

<!-- Quick Services Overview -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Core Services</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Comprehensive solutions for all your recruitment and HR needs</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl p-8 card-hover shadow-lg border border-gray-100">
                <div class="w-16 h-16 bg-[#E91E8C]/10 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-[#E91E8C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Recruitment Solutions</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Expert talent acquisition and placement services across all industries and experience levels.</p>
                <a href="services.php#recruitment" class="text-[#E91E8C] font-semibold hover:text-[#D4145A]">Learn More →</a>
            </div>

            <div class="bg-white rounded-xl p-8 card-hover shadow-lg border border-gray-100">
                <div class="w-16 h-16 bg-[#1e3a8a]/10 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-[#1e3a8a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">HR Outsourcing</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Complete HR management solutions to streamline your operations and reduce overhead.</p>
                <a href="services.php#hr-outsourcing" class="text-[#1e3a8a] font-semibold hover:text-[#2563eb]">Learn More →</a>
            </div>

            <div class="bg-white rounded-xl p-8 card-hover shadow-lg border border-gray-100">
                <div class="w-16 h-16 bg-[#E91E8C]/10 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-[#E91E8C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Visa Processing</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Streamlined visa and work permit services for international employment opportunities.</p>
                <a href="services.php#visa-processing" class="text-[#E91E8C] font-semibold hover:text-[#D4145A]">Learn More →</a>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="services.php" class="inline-block bg-[#1e3a8a] hover:bg-[#2563eb] text-white px-8 py-4 rounded-lg font-semibold transition-all">
                View All Services
            </a>
        </div>
    </div>
</section>

<!-- Featured Jobs Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Featured Opportunities</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Latest job openings across various industries</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $featuredJobs = [
                ["title" => "Registered Nurse", "location" => "Saudi Arabia", "type" => "Full-time", "category" => "Healthcare"],
                ["title" => "Hotel Manager", "location" => "UAE", "type" => "Full-time", "category" => "Hospitality"],
                ["title" => "Civil Engineer", "location" => "Qatar", "type" => "Contract", "category" => "Construction"],
                ["title" => "Software Developer", "location" => "Kenya", "type" => "Full-time", "category" => "IT"],
                ["title" => "Security Supervisor", "location" => "Kuwait", "type" => "Full-time", "category" => "Security"],
                ["title" => "Accountant", "location" => "Nairobi", "type" => "Full-time", "category" => "Finance"],
            ];

            foreach ($featuredJobs as $job):
            ?>
            <div class="bg-white rounded-lg p-6 card-hover shadow-md">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2"><?php echo $job['title']; ?></h3>
                        <p class="text-gray-600"><?php echo $job['location']; ?></p>
                    </div>
                    <span class="bg-[#1e3a8a]/10 text-[#1e3a8a] text-xs font-semibold px-3 py-1 rounded-full">
                        <?php echo $job['category']; ?>
                    </span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-500"><?php echo $job['type']; ?></span>
                    <a href="apply.php" class="text-[#E91E8C] font-semibold hover:text-[#D4145A]">Apply Now →</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-12">
            <a href="jobs.php" class="inline-block bg-[#E91E8C] hover:bg-[#D4145A] text-white px-8 py-4 rounded-lg font-semibold transition-all shadow-lg">
                View All Jobs
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-[#1e3a8a] to-[#2563eb] text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Get Started?</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Whether you're looking for talent or seeking opportunities, we're here to help
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="apply.php" class="bg-[#E91E8C] hover:bg-[#D4145A] text-white px-8 py-4 rounded-lg font-semibold transition-all shadow-lg">
                Apply for Jobs
            </a>
            <a href="contact.php" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-[#1e3a8a] transition-all">
                Contact Us
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>