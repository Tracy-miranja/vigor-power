<?php
$pageTitle = "Available Jobs - Vigor Manpower Solutions";
include 'includes/header.php';
?>

<style>
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Fraunces:wght@600;700;900&display=swap');

:root {
    --primary-dark: #1a1f3a;
    --primary-blue: #2563eb;
    --accent-pink: #E91E8C;
    --accent-orange: #f97316;
    --bg-light: #f8fafc;
    --text-dark: #1e293b;
    --text-muted: #64748b;
    --border-color: #e2e8f0;
}

body {
    font-family: 'DM Sans', sans-serif;
}

h1, h2, h3 {
    font-family: 'Fraunces', serif;
}

.page-header {
    background: linear-gradient(135deg, var(--primary-dark) 0%, #2563eb 100%);
    padding: 10rem 0 5rem;
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
    background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><rect width="2" height="2" fill="rgba(255,255,255,0.1)"/></svg>');
    background-size: 20px 20px;
    opacity: 0.3;
}

.jobs-container {
    display: flex;
    gap: 2rem;
    max-width: 1400px;
    margin: 0 auto;
    padding: 3rem 1rem;
}

/* Sidebar Styles */
.advert-sidebar {
    flex-shrink: 0;
    width: 300px;
    position: sticky;
    top: 2rem;
    height: fit-content;
    max-height: calc(100vh - 4rem);
    overflow: hidden;
}

.sidebar-header {
    background: linear-gradient(135deg, var(--accent-pink), var(--accent-orange));
    color: white;
    padding: 1.5rem;
    border-radius: 1rem 1rem 0 0;
    text-align: center;
}

.sidebar-header h3 {
    font-size: 1.25rem;
    font-weight: 700;
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.adverts-scroll {
    background: white;
    border-radius: 0 0 1rem 1rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    overflow: hidden;
}

.adverts-container {
    max-height: 600px;
    overflow-y: auto;
    padding: 1rem;
    scroll-behavior: smooth;
}

.adverts-container::-webkit-scrollbar {
    width: 6px;
}

.adverts-container::-webkit-scrollbar-track {
    background: #f1f5f9;
}

.adverts-container::-webkit-scrollbar-thumb {
    background: var(--accent-pink);
    border-radius: 10px;
}

.advert-item {
    margin-bottom: 1rem;
    border-radius: 0.75rem;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    animation: slideIn 0.5s ease forwards;
    opacity: 0;
}

.advert-item:nth-child(1) { animation-delay: 0.1s; }
.advert-item:nth-child(2) { animation-delay: 0.2s; }
.advert-item:nth-child(3) { animation-delay: 0.3s; }

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateX(-20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.advert-item:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 24px rgba(233, 30, 140, 0.2);
}

.advert-item img {
    width: 100%;
    height: auto;
    display: block;
    cursor: pointer;
}

/* Main Content Area */
.jobs-main {
    flex: 1;
    min-width: 0;
}

/* Filter Section */
.filter-section {
    background: white;
    border-radius: 1rem;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    padding: 2rem;
    margin-bottom: 2rem;
    border: 1px solid var(--border-color);
}

.filter-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
}

.filter-group label {
    display: block;
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 0.5rem;
    font-size: 0.875rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.filter-group select,
.filter-group input {
    width: 100%;
    padding: 0.75rem 1rem;
    border: 2px solid var(--border-color);
    border-radius: 0.5rem;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    background: white;
}

.filter-group select:focus,
.filter-group input:focus {
    outline: none;
    border-color: var(--primary-blue);
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
}

.btn-search {
    background: linear-gradient(135deg, var(--primary-blue), #1e40af);
    color: white;
    border: none;
    padding: 0.75rem 2rem;
    border-radius: 0.5rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-size: 0.875rem;
}

.btn-search:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(37, 99, 235, 0.3);
}

/* Job Cards */
.job-card {
    background: white;
    border-radius: 1rem;
    padding: 2rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 4px 15px rgba(0,0,0,0.06);
    border: 1px solid var(--border-color);
    transition: all 0.3s ease;
    animation: fadeInUp 0.5s ease forwards;
    opacity: 0;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.job-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.12);
}

.job-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1.5rem;
}

.job-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 0.5rem;
}

.job-company {
    color: var(--text-muted);
    font-weight: 500;
}

.job-category {
    background: linear-gradient(135deg, #dbeafe, #bfdbfe);
    color: var(--primary-blue);
    padding: 0.5rem 1rem;
    border-radius: 2rem;
    font-size: 0.875rem;
    font-weight: 600;
    white-space: nowrap;
}

.job-details {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.job-detail-item {
    display: flex;
    align-items: center;
    color: var(--text-muted);
    font-size: 0.95rem;
}

.job-detail-item svg {
    margin-right: 0.5rem;
    flex-shrink: 0;
}

.job-description {
    color: var(--text-muted);
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.job-requirements {
    margin-bottom: 1.5rem;
}

.job-requirements h4 {
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 0.75rem;
    font-size: 1rem;
}

.job-requirements ul {
    list-style: none;
    padding: 0;
}

.job-requirements li {
    padding-left: 1.5rem;
    position: relative;
    color: var(--text-muted);
    margin-bottom: 0.5rem;
}

.job-requirements li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--accent-pink);
    font-weight: bold;
}

.job-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 1.5rem;
    border-top: 2px solid var(--border-color);
}

.job-posted {
    color: var(--text-muted);
    font-size: 0.875rem;
}

.btn-apply {
    background: linear-gradient(135deg, var(--accent-pink), var(--accent-orange));
    color: white;
    padding: 0.75rem 2rem;
    border-radius: 0.5rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
}

.btn-apply:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(233, 30, 140, 0.4);
}

/* Pagination */
.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 0.5rem;
    margin-top: 3rem;
}

.pagination button {
    padding: 0.75rem 1.25rem;
    border: 2px solid var(--border-color);
    background: white;
    border-radius: 0.5rem;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
    color: var(--text-dark);
}

.pagination button:hover:not(:disabled) {
    border-color: var(--primary-blue);
    color: var(--primary-blue);
    transform: translateY(-2px);
}

.pagination button.active {
    background: linear-gradient(135deg, var(--primary-blue), #1e40af);
    color: white;
    border-color: var(--primary-blue);
}

.pagination button:disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

/* CTA Section */
.cta-section {
    background: linear-gradient(135deg, var(--primary-dark), var(--primary-blue));
    color: white;
    padding: 5rem 2rem;
    text-align: center;
    margin-top: 4rem;
    position: relative;
    overflow: hidden;
}

.cta-section::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
    background-size: 50px 50px;
    animation: pulse 15s ease-in-out infinite;
}

@keyframes pulse {
    0%, 100% { opacity: 0.5; }
    50% { opacity: 1; }
}

.cta-content {
    position: relative;
    z-index: 1;
    max-width: 800px;
    margin: 0 auto;
}

.cta-section h2 {
    font-size: 2.5rem;
    margin-bottom: 1.5rem;
}

.cta-section p {
    font-size: 1.25rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.btn-cta {
    background: linear-gradient(135deg, var(--accent-orange), #E91E8C);
    color: white;
    padding: 1rem 3rem;
    border-radius: 0.5rem;
    font-weight: 700;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s ease;
    font-size: 1.1rem;
}

.btn-cta:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(249, 115, 22, 0.4);
}

/* Responsive */
@media (max-width: 1024px) {
    .jobs-container {
        flex-direction: column;
    }
    
    .advert-sidebar {
        width: 100%;
        position: relative;
        top: 0;
        max-height: none;
    }
    
    .adverts-container {
        max-height: 400px;
    }
}

@media (max-width: 768px) {
    .filter-grid {
        grid-template-columns: 1fr;
    }
    
    .job-header {
        flex-direction: column;
        gap: 1rem;
    }
    
    .job-category {
        align-self: flex-start;
    }
    
    .cta-section h2 {
        font-size: 2rem;
    }
}

.no-results {
    text-align: center;
    padding: 4rem 2rem;
    color: var(--text-muted);
}

.no-results h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
}
</style>

<!-- Page Header -->
<section class="page-header text-white">
    <!-- Background Image on Right - Clear and visible -->
<div class="absolute inset-0 z-0">
    <div class="absolute right-0 top-6 h-full w-full md:w-1/2 bg-cover bg-center" 
         style="background-image: url('./assets/images/job.jpeg');"></div>
</div>

<!-- Gradient Overlay - Seamlessly blends into the image -->
<div class="absolute inset-0 bg-gradient-to-r from-[#1e3a8a] from-0% via-[#1e3a8a]/95 via-35% via-[#1e3a8a]/60 via-60% to-transparent to-99% z-5"></div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 relative z-10">
    <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
       
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <h1 class="text-5xl md:text-6xl font-bold mb-4">Available Jobs</h1>
        <p class="text-xl text-blue-100">Explore opportunities across diverse industries and sectors</p>
    </div>
        
        <!-- Right side - space for clear image -->
        <div class="hidden md:block"></div>
    </div>
</div>
   
</section>


<!-- Job Listings with Sidebar -->
<div class="jobs-container">
    <!-- Left Sidebar for Adverts -->
    <aside class="advert-sidebar">
        <div class="sidebar-header">
            <h3>🔥 Hot Jobs</h3>
        </div>
        <div class="adverts-scroll">
            <div class="adverts-container" id="advertsContainer">
                <!-- 
                TO ADD YOUR OWN IMAGE ADVERTS:
                1. Upload your image to the server (recommended path: images/adverts/)
                2. Copy the div structure below and paste it here
                3. Replace "images/adverts/your-image.jpg" with your image path
                4. You can add as many adverts as you want
                
                Example:
                <div class="advert-item">
                    <img src="images/adverts/your-advert.jpg" alt="Job Title" onclick="window.location.href='apply.php'">
                </div>
                -->
                
                <div class="advert-item">
                    <img src="./assets/images/advert.jpeg" alt="Civil Jobs Saudi Arabia" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
                </div>
                
                <!-- Example additional adverts with custom HTML -->
                <div class="advert-item">
                    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 2rem; color: white; text-align: center;">
                        <h4 style="font-size: 1.25rem; margin-bottom: 1rem;">Nursing Jobs UAE</h4>
                        <p style="margin-bottom: 1rem;">Competitive Salary + Benefits</p>
                        <a href="apply.php" style="background: white; color: #667eea; padding: 0.5rem 1.5rem; border-radius: 0.5rem; text-decoration: none; font-weight: 600; display: inline-block;">Apply Now</a>
                    </div>
                </div>
                
                <div class="advert-item">
                    <div style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); padding: 2rem; color: white; text-align: center;">
                        <h4 style="font-size: 1.25rem; margin-bottom: 1rem;">IT Professionals</h4>
                        <p style="margin-bottom: 1rem;">Qatar - Immediate Start</p>
                        <a href="apply.php" style="background: white; color: #f5576c; padding: 0.5rem 1.5rem; border-radius: 0.5rem; text-decoration: none; font-weight: 600; display: inline-block;">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="jobs-main">
        <!-- Filters -->
        <div class="filter-section">
            <div class="filter-grid">
                <div class="filter-group">
                    <label>Category</label>
                    <select id="filterCategory">
                        <option value="">All Categories</option>
                        <option value="Healthcare">Healthcare & Medical</option>
                        <option value="Hospitality">Hospitality & Tourism</option>
                        <option value="IT">IT & Technology</option>
                        <option value="Construction">Construction & Engineering</option>
                        <option value="Education">Education & Training</option>
                        <option value="Security">Security Services</option>
                        <option value="Finance">Finance & Accounting</option>
                        <option value="Logistics">Logistics & Supply Chain</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label>Location</label>
                    <select id="filterLocation">
                        <option value="">All Locations</option>
                        <option value="Kenya">Kenya</option>
                        <option value="UAE">UAE</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Maldives">Maldives</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label>Job Type</label>
                    <select id="filterType">
                        <option value="">All Types</option>
                        <option value="Full-time">Full-time</option>
                        <option value="Part-time">Part-time</option>
                        <option value="Contract">Contract</option>
                    </select>
                </div>
                <div class="filter-group" style="display: flex; align-items: flex-end;">
                    <button class="btn-search" onclick="filterJobs()" style="width: 100%;">
                        Search Jobs
                    </button>
                </div>
            </div>
        </div>

        <!-- Job Listings -->
        <div id="jobListings">
            <?php
           $allJobs = [
    [
        "id" => 1,
        "title" => "Labourer",
        "company" => "Saudi Construction Company",
        "location" => "Saudi Arabia",
        "type" => "Full-time",
        "category" => "Construction",
        "salary" => "1400 SAR/month",
        "description" => "General labourers required for ongoing civil construction projects in Saudi Arabia.",
        "requirements" => ["Physically fit", "Construction site experience preferred", "Valid passport"],
        "posted" => "1 day ago"
    ],
    [
        "id" => 2,
        "title" => "Electrical Technician",
        "company" => "Saudi Construction Company",
        "location" => "Saudi Arabia",
        "type" => "Full-time",
        "category" => "Construction",
        "salary" => "1700 SAR/month",
        "description" => "Electrical technicians needed for industrial and civil construction works.",
        "requirements" => ["Electrical certification", "Minimum 2 years experience", "Ability to read wiring diagrams"],
        "posted" => "1 day ago"
    ],
    [
        "id" => 3,
        "title" => "Boom Truck Driver",
        "company" => "Saudi Construction Company",
        "location" => "Saudi Arabia",
        "type" => "Full-time",
        "category" => "Construction",
        "salary" => "2000 SAR/month",
        "description" => "Boom truck drivers required for material lifting and transport at project sites.",
        "requirements" => ["Valid heavy vehicle license", "Boom truck experience", "Safety awareness"],
        "posted" => "1 day ago"
    ],
    [
        "id" => 4,
        "title" => "Tea Boy",
        "company" => "Saudi Construction Company",
        "location" => "Saudi Arabia",
        "type" => "Full-time",
        "category" => "Support Staff",
        "salary" => "1400 SAR/month",
        "description" => "Tea boys required to support site staff with refreshments and cleaning duties.",
        "requirements" => ["Basic communication skills", "Hardworking", "Presentable"],
        "posted" => "1 day ago"
    ],
    [
        "id" => 5,
        "title" => "Pipe Fabricator",
        "company" => "Saudi Construction Company",
        "location" => "Saudi Arabia",
        "type" => "Full-time",
        "category" => "Construction",
        "salary" => "1600 SAR/month",
        "description" => "Pipe fabricators needed for industrial piping and civil construction projects.",
        "requirements" => ["Pipe fabrication experience", "Ability to read drawings", "Technical skills"],
        "posted" => "1 day ago"
    ],
    [
        "id" => 6,
        "title" => "Pipe Welder",
        "company" => "Saudi Construction Company",
        "location" => "Saudi Arabia",
        "type" => "Full-time",
        "category" => "Construction",
        "salary" => "1600 SAR/month",
        "description" => "Pipe welders required for on-site welding and installation works.",
        "requirements" => ["Welding certification", "Pipeline welding experience", "Safety compliance"],
        "posted" => "1 day ago"
    ],
    [
        "id" => 7,
        "title" => "Piping Foreman",
        "company" => "Saudi Construction Company",
        "location" => "Saudi Arabia",
        "type" => "Full-time",
        "category" => "Construction",
        "salary" => "2300 SAR/month",
        "description" => "Experienced piping foreman required to supervise piping teams and site activities.",
        "requirements" => ["5+ years piping supervision experience", "Leadership skills", "Drawing interpretation"],
        "posted" => "1 day ago"
    ]
];


            // Convert to JSON for JavaScript
            echo "<script>const allJobsData = " . json_encode($allJobs) . ";</script>";

            // Display all jobs initially
            foreach ($allJobs as $index => $job):
            ?>
            <div class="job-card" data-category="<?php echo $job['category']; ?>" data-location="<?php echo $job['location']; ?>" data-type="<?php echo $job['type']; ?>" style="animation-delay: <?php echo ($index * 0.1); ?>s;">
                <div class="job-header">
                    <div>
                        <h3 class="job-title"><?php echo $job['title']; ?></h3>
                        <p class="job-company"><?php echo $job['company']; ?></p>
                    </div>
                    <span class="job-category"><?php echo $job['category']; ?></span>
                </div>
                
                <div class="job-details">
                    <div class="job-detail-item">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <?php echo $job['location']; ?>
                    </div>
                    <div class="job-detail-item">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <?php echo $job['type']; ?>
                    </div>
                    <div class="job-detail-item">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <?php echo $job['salary']; ?>
                    </div>
                </div>
                
                <p class="job-description"><?php echo $job['description']; ?></p>
                
                <div class="job-requirements">
                    <h4>Requirements:</h4>
                    <ul>
                        <?php foreach ($job['requirements'] as $req): ?>
                        <li><?php echo $req; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <div class="job-footer">
                    <span class="job-posted">Posted <?php echo $job['posted']; ?></span>
                    <!-- <a href="apply.php" class="btn-apply">Apply Now</a> -->
                     <a href="javascript:void(0)" 
   onclick="openApplyModal('<?php echo $job['title']; ?>')" 
   class="text-[#E91E8C] font-semibold hover:text-[#D4145A]">
   Apply Now →
</a>

                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <div class="pagination" id="pagination">
            <button onclick="changePage('prev')" id="prevBtn">Previous</button>
            <button class="active" onclick="goToPage(1)">1</button>
            <button onclick="goToPage(2)">2</button>
            <button onclick="goToPage(3)">3</button>
            <button onclick="changePage('next')" id="nextBtn">Next</button>
        </div>
    </main>
</div>

<!-- CTA Section -->
<section class="cta-section">
    <div class="cta-content">
        <h2>Didn't Find What You're Looking For?</h2>
        <p>Submit your CV and we'll match you with suitable opportunities</p>
        <!-- <a href="apply.php" class="btn-cta">Submit Your CV</a> -->
         <a href="javascript:void(0)" 
   onclick="openApplyModal('<?php echo $job['title']; ?>')" 
   class="text-[#E91E8C] font-semibold hover:text-[#D4145A]">
   Submit CV →
</a>

    </div>
</section>

<script>
let currentPage = 1;
const jobsPerPage = 6;
let filteredJobs = [...allJobsData];

// Filter functionality
function filterJobs() {
    const category = document.getElementById('filterCategory').value;
    const location = document.getElementById('filterLocation').value;
    const type = document.getElementById('filterType').value;
    
    filteredJobs = allJobsData.filter(job => {
        const categoryMatch = !category || job.category === category;
        const locationMatch = !location || job.location.includes(location);
        const typeMatch = !type || job.type === type;
        return categoryMatch && locationMatch && typeMatch;
    });
    
    currentPage = 1;
    displayJobs();
    updatePagination();
}

// Display jobs based on current page
function displayJobs() {
    const startIndex = (currentPage - 1) * jobsPerPage;
    const endIndex = startIndex + jobsPerPage;
    const jobsToDisplay = filteredJobs.slice(startIndex, endIndex);
    
    const jobListings = document.getElementById('jobListings');
    
    if (jobsToDisplay.length === 0) {
        jobListings.innerHTML = `
            <div class="no-results">
                <h3>No jobs found</h3>
                <p>Try adjusting your filters or check back later for new opportunities.</p>
            </div>
        `;
        return;
    }
    
    jobListings.innerHTML = jobsToDisplay.map((job, index) => `
        <div class="job-card" style="animation-delay: ${index * 0.1}s;">
            <div class="job-header">
                <div>
                    <h3 class="job-title">${job.title}</h3>
                    <p class="job-company">${job.company}</p>
                </div>
                <span class="job-category">${job.category}</span>
            </div>
            
            <div class="job-details">
                <div class="job-detail-item">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    ${job.location}
                </div>
                <div class="job-detail-item">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    ${job.type}
                </div>
                <div class="job-detail-item">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    ${job.salary}
                </div>
            </div>
            
            <p class="job-description">${job.description}</p>
            
            <div class="job-requirements">
                <h4>Requirements:</h4>
                <ul>
                    ${job.requirements.map(req => `<li>${req}</li>`).join('')}
                </ul>
            </div>
            
            <div class="job-footer">
                <span class="job-posted">Posted ${job.posted}</span>
                <a href="apply.php" class="btn-apply">Apply Now</a>
            </div>
        </div>
    `).join('');
    
    // Scroll to top of job listings
    document.querySelector('.jobs-main').scrollIntoView({ behavior: 'smooth', block: 'start' });
}

// Update pagination buttons
function updatePagination() {
    const totalPages = Math.ceil(filteredJobs.length / jobsPerPage);
    const pagination = document.getElementById('pagination');
    
    let paginationHTML = `
        <button onclick="changePage('prev')" id="prevBtn" ${currentPage === 1 ? 'disabled' : ''}>Previous</button>
    `;
    
    for (let i = 1; i <= totalPages; i++) {
        paginationHTML += `
            <button onclick="goToPage(${i})" class="${currentPage === i ? 'active' : ''}">${i}</button>
        `;
    }
    
    paginationHTML += `
        <button onclick="changePage('next')" id="nextBtn" ${currentPage === totalPages ? 'disabled' : ''}>Next</button>
    `;
    
    pagination.innerHTML = paginationHTML;
}

// Change page
function changePage(direction) {
    const totalPages = Math.ceil(filteredJobs.length / jobsPerPage);
    
    if (direction === 'prev' && currentPage > 1) {
        currentPage--;
    } else if (direction === 'next' && currentPage < totalPages) {
        currentPage++;
    }
    
    displayJobs();
    updatePagination();
}

// Go to specific page
function goToPage(page) {
    currentPage = page;
    displayJobs();
    updatePagination();
}

// Smooth scrolling for advert sidebar
let scrollInterval;
const advertsContainer = document.getElementById('advertsContainer');

function autoScroll() {
    scrollInterval = setInterval(() => {
        if (advertsContainer.scrollTop + advertsContainer.clientHeight >= advertsContainer.scrollHeight) {
            advertsContainer.scrollTop = 0;
        } else {
            advertsContainer.scrollTop += 1;
        }
    }, 50);
}

// Pause scrolling on hover
advertsContainer.addEventListener('mouseenter', () => {
    clearInterval(scrollInterval);
});

advertsContainer.addEventListener('mouseleave', () => {
    autoScroll();
});

// Start auto-scroll
autoScroll();
</script>

<!-- Apply Modal -->
<div id="applyModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">

    <div class="bg-white rounded-lg p-6 w-full max-w-md text-center relative">

        <!-- Close Button -->
        <button onclick="closeApplyModal()" 
                class="absolute top-2 right-3 text-gray-500 text-xl">
            &times;
        </button>

        <h3 class="text-2xl font-bold mb-4 text-gray-800">
            Apply for This Job
        </h3>

        <p class="text-gray-600 mb-4">
            Send your CV to:
        </p>

       <a id="applyEmailLink"
   href="mailto:info@vigormanpower.com"
   target="_blank"
   class="text-[#E91E8C] font-semibold text-lg hover:underline">
   info@vigormanpower.com
        </a>

        <!-- <p class="text-sm text-gray-500 mt-4">
            Click the email to send your CV
        </p> -->

    </div>

</div>
<script>
function openApplyModal(jobTitle) {

    const modal = document.getElementById('applyModal');
    const emailLink = document.getElementById('applyEmailLink');

    const email = "info@vigormanpower.com"; 
    const subject = "Job Application - " + jobTitle;

    // Properly encode subject
    const mailtoLink = "mailto:" + email + "?subject=" + encodeURIComponent(subject);

    emailLink.setAttribute("href", mailtoLink);

    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeApplyModal() {

    const modal = document.getElementById('applyModal');

    modal.classList.add('hidden');
    modal.classList.remove('flex');
}
</script>


<?php include 'includes/footer.php'; ?>