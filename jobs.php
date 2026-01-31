<?php
$pageTitle = "Available Jobs - Vigor Manpower Solutions";
include 'includes/header.php';
?>

<!-- Page Header -->
<section class="page-header text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <h1 class="text-5xl md:text-6xl font-bold mb-4">Available Jobs</h1>
        <p class="text-xl text-blue-100">Explore opportunities across diverse industries and sectors</p>
    </div>
</section>

<!-- Job Listings -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Filters -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <div class="grid md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Category</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>All Categories</option>
                        <option>Healthcare & Medical</option>
                        <option>Hospitality & Tourism</option>
                        <option>IT & Technology</option>
                        <option>Construction & Engineering</option>
                        <option>Education & Training</option>
                        <option>Security Services</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Location</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>All Locations</option>
                        <option>Kenya</option>
                        <option>UAE</option>
                        <option>Saudi Arabia</option>
                        <option>Qatar</option>
                        <option>Kuwait</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Job Type</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>All Types</option>
                        <option>Full-time</option>
                        <option>Part-time</option>
                        <option>Contract</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button class="w-full bg-blue-900 hover:bg-blue-800 text-white px-6 py-2 rounded-lg font-semibold transition-all">
                        Search Jobs
                    </button>
                </div>
            </div>
        </div>

        <?php
        $jobs = [
            [
                "title" => "Registered Nurse - ICU",
                "company" => "King Fahd Medical City",
                "location" => "Riyadh, Saudi Arabia",
                "type" => "Full-time",
                "category" => "Healthcare",
                "salary" => "$3,500 - $4,500/month",
                "description" => "Experienced ICU nurse needed for a leading medical facility. Minimum 3 years experience required.",
                "requirements" => ["Bachelor's degree in Nursing", "Valid nursing license", "ICU experience", "Excellent communication skills"],
                "posted" => "2 days ago"
            ],
            [
                "title" => "Hotel Manager",
                "company" => "Jumeirah Group",
                "location" => "Dubai, UAE",
                "type" => "Full-time",
                "category" => "Hospitality",
                "salary" => "$4,000 - $6,000/month",
                "description" => "Seeking an experienced hotel manager for a luxury 5-star property.",
                "requirements" => ["10+ years hospitality experience", "Hotel management degree", "Leadership skills", "Fluent in English"],
                "posted" => "3 days ago"
            ],
            [
                "title" => "Civil Engineer",
                "company" => "Qatar Construction",
                "location" => "Doha, Qatar",
                "type" => "Contract",
                "category" => "Construction",
                "salary" => "$5,000 - $7,000/month",
                "description" => "Civil engineer needed for major infrastructure project. 2-year contract.",
                "requirements" => ["Bachelor's in Civil Engineering", "5+ years experience", "Project management", "AutoCAD proficiency"],
                "posted" => "5 days ago"
            ],
            [
                "title" => "Software Developer",
                "company" => "Tech Innovators Ltd",
                "location" => "Nairobi, Kenya",
                "type" => "Full-time",
                "category" => "IT",
                "salary" => "KSh 150,000 - 250,000/month",
                "description" => "Full-stack developer for growing tech startup. Exciting opportunity!",
                "requirements" => ["Computer Science degree", "3+ years experience", "JavaScript, React, Node.js", "Problem-solving skills"],
                "posted" => "1 week ago"
            ],
            [
                "title" => "Security Supervisor",
                "company" => "Gulf Security Services",
                "location" => "Kuwait City, Kuwait",
                "type" => "Full-time",
                "category" => "Security",
                "salary" => "$2,500 - $3,500/month",
                "description" => "Supervisor role for corporate security team. Leadership experience essential.",
                "requirements" => ["Security management experience", "Supervisory skills", "First aid certified", "Clean record"],
                "posted" => "1 week ago"
            ],
            [
                "title" => "Accountant - Senior Level",
                "company" => "Finance Corp Kenya",
                "location" => "Nairobi, Kenya",
                "type" => "Full-time",
                "category" => "Finance",
                "salary" => "KSh 180,000 - 300,000/month",
                "description" => "Senior accountant for multinational corporation. CPA required.",
                "requirements" => ["CPA qualification", "7+ years experience", "Financial reporting", "ERP systems knowledge"],
                "posted" => "2 weeks ago"
            ],
            [
                "title" => "English Teacher",
                "company" => "International School Dubai",
                "location" => "Dubai, UAE",
                "type" => "Full-time",
                "category" => "Education",
                "salary" => "$3,000 - $4,000/month",
                "description" => "English teacher for international curriculum. Native speaker preferred.",
                "requirements" => ["Teaching degree/certificate", "Native English speaker", "2+ years experience", "TEFL certification"],
                "posted" => "3 days ago"
            ],
            [
                "title" => "Chef de Partie",
                "company" => "Luxury Resort Maldives",
                "location" => "Maldives",
                "type" => "Full-time",
                "category" => "Hospitality",
                "salary" => "$2,800 - $3,800/month",
                "description" => "Experienced chef for luxury resort kitchen. International cuisine expertise.",
                "requirements" => ["Culinary diploma", "5+ years experience", "International cuisine", "Team player"],
                "posted" => "1 week ago"
            ],
            [
                "title" => "Warehouse Manager",
                "company" => "Logistics Plus",
                "location" => "Mombasa, Kenya",
                "type" => "Full-time",
                "category" => "Logistics",
                "salary" => "KSh 120,000 - 180,000/month",
                "description" => "Warehouse manager for busy logistics operation. Inventory management essential.",
                "requirements" => ["Logistics/supply chain degree", "Warehouse management", "Inventory systems", "Leadership skills"],
                "posted" => "4 days ago"
            ]
        ];

        foreach ($jobs as $index => $job):
        ?>
        <div class="bg-white rounded-lg shadow-md p-6 mb-4 card-hover job-card">
            <div class="flex justify-between items-start mb-4">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2"><?php echo $job['title']; ?></h3>
                    <p class="text-gray-600 font-medium"><?php echo $job['company']; ?></p>
                </div>
                <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-3 py-1 rounded-full">
                    <?php echo $job['category']; ?>
                </span>
            </div>
            
            <div class="grid md:grid-cols-3 gap-4 mb-4">
                <div class="flex items-center text-gray-600">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <?php echo $job['location']; ?>
                </div>
                <div class="flex items-center text-gray-600">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <?php echo $job['type']; ?>
                </div>
                <div class="flex items-center text-gray-600">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <?php echo $job['salary']; ?>
                </div>
            </div>
            
            <p class="text-gray-600 mb-4"><?php echo $job['description']; ?></p>
            
            <div class="mb-4">
                <p class="font-semibold text-gray-900 mb-2">Requirements:</p>
                <ul class="list-disc list-inside text-gray-600 space-y-1">
                    <?php foreach ($job['requirements'] as $req): ?>
                    <li><?php echo $req; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                <span class="text-sm text-gray-500">Posted <?php echo $job['posted']; ?></span>
                <a href="apply.php" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-lg font-semibold transition-all">
                    Apply Now
                </a>
            </div>
        </div>
        <?php endforeach; ?>

        <!-- Pagination -->
        <div class="flex justify-center items-center space-x-2 mt-8">
            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">Previous</button>
            <button class="px-4 py-2 bg-blue-900 text-white rounded-lg">1</button>
            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">2</button>
            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">3</button>
            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">Next</button>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-blue-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Didn't Find What You're Looking For?</h2>
        <p class="text-xl text-blue-200 mb-8 max-w-2xl mx-auto">
            Submit your CV and we'll match you with suitable opportunities
        </p>
        <a href="apply.php" class="inline-block bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-all">
            Submit Your CV
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
