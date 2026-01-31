<?php
$pageTitle = "Apply Now - Vigor Manpower Solutions";
include 'includes/header.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Here you would typically process the form data and handle file uploads
    $success_message = "Your application has been submitted successfully! We will review your details and get back to you soon.";
}
?>

<!-- Page Header -->
<section class="page-header text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <h1 class="text-5xl md:text-6xl font-bold mb-4">Apply Now</h1>
        <p class="text-xl text-blue-100">Start your journey to your dream job</p>
    </div>
</section>

<!-- Application Form -->
<section class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <?php if (isset($success_message)): ?>
        <div class="mb-8 bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg">
            <p class="font-semibold"><?php echo $success_message; ?></p>
        </div>
        <?php endif; ?>
        
        <div class="bg-white rounded-2xl p-8 md:p-12 shadow-lg">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Job Application Form</h2>
                <p class="text-gray-600">Fill in your details below. All fields marked with * are required.</p>
            </div>

            <form action="apply.php" method="POST" enctype="multipart/form-data" class="space-y-8">
                
                <!-- Personal Information -->
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 pb-2 border-b-2 border-blue-600">Personal Information</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">First Name *</label>
                            <input type="text" name="first_name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Last Name *</label>
                            <input type="text" name="last_name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Email Address *</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Phone Number *</label>
                            <input type="tel" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Date of Birth *</label>
                            <input type="date" name="dob" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Gender *</label>
                            <select name="gender" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">ID/Passport Number *</label>
                            <input type="text" name="id_number" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Nationality *</label>
                            <input type="text" name="nationality" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 pb-2 border-b-2 border-blue-600">Contact Information</h3>
                    <div class="space-y-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Current Address *</label>
                            <textarea name="address" rows="3" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">City *</label>
                                <input type="text" name="city" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Country *</label>
                                <input type="text" name="country" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Education -->
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 pb-2 border-b-2 border-blue-600">Education</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Highest Level of Education *</label>
                            <select name="education_level" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Select Level</option>
                                <option value="high_school">High School</option>
                                <option value="diploma">Diploma</option>
                                <option value="bachelors">Bachelor's Degree</option>
                                <option value="masters">Master's Degree</option>
                                <option value="phd">PhD</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Field of Study *</label>
                            <input type="text" name="field_of_study" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>

                <!-- Work Experience -->
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 pb-2 border-b-2 border-blue-600">Work Experience</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Years of Experience *</label>
                            <select name="years_experience" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Select Years</option>
                                <option value="0-1">0-1 years</option>
                                <option value="1-3">1-3 years</option>
                                <option value="3-5">3-5 years</option>
                                <option value="5-10">5-10 years</option>
                                <option value="10+">10+ years</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Current/Last Job Title *</label>
                            <input type="text" name="job_title" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>

                <!-- Position Applied For -->
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 pb-2 border-b-2 border-blue-600">Position Information</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Job Category *</label>
                            <select name="job_category" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Select Category</option>
                                <option value="healthcare">Healthcare & Medical</option>
                                <option value="hospitality">Hospitality & Tourism</option>
                                <option value="it">IT & Technology</option>
                                <option value="construction">Construction & Engineering</option>
                                <option value="education">Education & Training</option>
                                <option value="security">Security Services</option>
                                <option value="finance">Banking & Finance</option>
                                <option value="agriculture">Agriculture & Farming</option>
                                <option value="domestic">Domestic Services</option>
                                <option value="logistics">Logistics & Transport</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Preferred Location *</label>
                            <select name="preferred_location" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Select Location</option>
                                <option value="kenya">Kenya</option>
                                <option value="uae">UAE</option>
                                <option value="saudi">Saudi Arabia</option>
                                <option value="qatar">Qatar</option>
                                <option value="kuwait">Kuwait</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Skills -->
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 pb-2 border-b-2 border-blue-600">Skills & Qualifications</h3>
                    <div class="space-y-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Key Skills (comma separated) *</label>
                            <input type="text" name="skills" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g. Communication, Leadership, Technical Skills">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Professional Certifications (if any)</label>
                            <textarea name="certifications" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="List any relevant certifications"></textarea>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Languages Spoken *</label>
                            <input type="text" name="languages" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g. English, Swahili, Arabic">
                        </div>
                    </div>
                </div>

                <!-- Documents Upload -->
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 pb-2 border-b-2 border-blue-600">Upload Documents</h3>
                    <div class="space-y-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Upload CV/Resume * (PDF, DOC, DOCX - Max 5MB)</label>
                            <input type="file" name="cv" required accept=".pdf,.doc,.docx" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Cover Letter (PDF, DOC, DOCX - Max 5MB)</label>
                            <input type="file" name="cover_letter" accept=".pdf,.doc,.docx" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">ID/Passport Copy (PDF, JPG, PNG - Max 2MB)</label>
                            <input type="file" name="id_copy" accept=".pdf,.jpg,.jpeg,.png" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>

                <!-- Additional Information -->
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 pb-2 border-b-2 border-blue-600">Additional Information</h3>
                    <div class="space-y-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">How did you hear about us? *</label>
                            <select name="source" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Select Option</option>
                                <option value="website">Website</option>
                                <option value="social_media">Social Media</option>
                                <option value="referral">Friend/Referral</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Additional Comments</label>
                            <textarea name="comments" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Any additional information you'd like to share"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Terms & Conditions -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <div class="flex items-start">
                        <input type="checkbox" name="terms" required class="mt-1 mr-3 w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label class="text-sm text-gray-700">
                            I agree to the terms and conditions and confirm that the information provided is accurate. I understand that providing false information may result in disqualification. *
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center pt-6">
                    <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white px-12 py-4 rounded-lg font-semibold text-lg transition-all shadow-lg hover:shadow-xl">
                        Submit Application
                    </button>
                </div>
            </form>
        </div>

        <!-- Additional Help -->
        <div class="mt-8 bg-blue-50 rounded-lg p-6 text-center">
            <h3 class="text-xl font-bold text-gray-900 mb-3">Need Help with Your Application?</h3>
            <p class="text-gray-600 mb-4">Our team is here to assist you with any questions</p>
            <a href="contact.php" class="inline-block bg-blue-900 hover:bg-blue-800 text-white px-6 py-3 rounded-lg font-semibold transition-all">
                Contact Support
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
