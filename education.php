<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter Education - BayanMo2025.ph</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap');
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Navigation -->
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-700 to-blue-900 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Voter Education</h1>
            <p class="text-xl max-w-3xl mx-auto">Learn about the voting process, your rights as a voter, and how to make informed decisions in the 2025 Philippine elections.</p>
        </div>
    </section>

    <!-- Voter Eligibility Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-lg shadow-lg p-6 md:p-8 mb-10">
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="md:w-2/3">
                        <h2 class="text-3xl font-bold mb-6">Who Can Vote?</h2>
                        <p class="text-gray-700 mb-4">To be eligible to vote in the Philippines, you must meet the following criteria:</p>
                        
                        <ul class="list-disc pl-5 space-y-2 mb-6">
                            <li>Be a Filipino citizen</li>
                            <li>Be at least 18 years old on or before Election Day</li>
                            <li>Have resided in the Philippines for at least one year</li>
                            <li>Have resided in the place where you intend to vote for at least six months before Election Day</li>
                            <li>Not be disqualified by law</li>
                        </ul>
                        
                        <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 mb-6">
                            <p class="font-bold">Important Note:</p>
                            <p>If you will be turning 18 between now and the 2025 elections, you can register to vote once you reach the eligible age.</p>
                        </div>
                        
                        <h3 class="text-2xl font-bold mb-4">Overseas Filipino Voters</h3>
                        <p class="text-gray-700 mb-4">Filipinos residing or working abroad can also participate in the national elections through the Overseas Voting System. To be eligible, you must:</p>
                        
                        <ul class="list-disc pl-5 space-y-2 mb-6">
                            <li>Be a Filipino citizen</li>
                            <li>Be at least 18 years old on Election Day</li>
                            <li>Not have renounced your Filipino citizenship</li>
                            <li>Not be disqualified by law</li>
                            <li>Be registered with the Commission on Elections (COMELEC) as an overseas voter</li>
                        </ul>
                    </div>
                    <div class="md:w-1/3">
                        <div class="bg-blue-50 p-6 rounded-lg mb-6">
                            <h4 class="font-bold text-lg mb-4">Key Dates for Voters</h4>
                            <ul class="space-y-4">
                                <li class="border-b border-blue-100 pb-2">
                                    <span class="font-bold block">Voter Registration Deadline</span>
                                    <span class="text-blue-700">September 30, 2024</span>
                                </li>
                                <li class="border-b border-blue-100 pb-2">
                                    <span class="font-bold block">Filing of Certificates of Candidacy</span>
                                    <span class="text-blue-700">October 1-8, 2024</span>
                                </li>
                                <li class="border-b border-blue-100 pb-2">
                                    <span class="font-bold block">Campaign Period Starts</span>
                                    <span class="text-blue-700">February 9, 2025</span>
                                </li>
                                <li>
                                    <span class="font-bold block">Election Day</span>
                                    <span class="text-blue-700">May 12, 2025</span>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-red-50 p-6 rounded-lg">
                            <h4 class="font-bold text-lg mb-4">Who Cannot Vote?</h4>
                            <ul class="list-disc pl-5 space-y-2">
                                <li>Those who have been sentenced to imprisonment for at least one year (unless pardoned or granted amnesty)</li>
                                <li>Those who have been declared insane or incompetent by a court of competent jurisdiction</li>
                                <li>Those who have renounced their Filipino citizenship and have not reacquired it</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Process Section -->
    <section class="py-12 bg-blue-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-10 text-center">How to Register to Vote</h2>
            
            <div class="grid md:grid-cols-4 gap-6">
                <!-- Step 1 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-xl mb-4">1</div>
                    <h3 class="text-xl font-bold mb-3">Check Your Status</h3>
                    <p class="text-gray-700 mb-4">First, verify if you are already registered by visiting the COMELEC Precinct Finder or your local COMELEC office.</p>
                    <a href="https://voterverifier.comelec.gov.ph/" target="_blank" class="text-blue-600 hover:underline font-medium">Visit Precinct Finder</a>
                </div>
                
                <!-- Step 2 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-xl mb-4">2</div>
                    <h3 class="text-xl font-bold mb-3">Prepare Documents</h3>
                    <p class="text-gray-700 mb-4">Bring a valid government-issued ID that shows your address and personal details.</p>
                    <ul class="list-disc pl-5 space-y-1 text-sm">
                        <li>Philippine Passport</li>
                        <li>Driver's License</li>
                        <li>SSS/GSIS UMID Card</li>
                        <li>PhilHealth ID</li>
                        <li>Philippine National ID</li>
                    </ul>
                </div>
                
                <!-- Step 3 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-xl mb-4">3</div>
                    <h3 class="text-xl font-bold mb-3">Visit COMELEC Office</h3>
                    <p class="text-gray-700 mb-4">Go to the Office of the Election Officer in your city or municipality during office hours.</p>
                    <p class="text-sm font-medium">Office Hours: Monday to Saturday, 8:00 AM to 5:00 PM</p>
                </div>
                
                <!-- Step 4 -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-xl mb-4">4</div>
                    <h3 class="text-xl font-bold mb-3">Complete Registration</h3>
                    <p class="text-gray-700 mb-4">Fill out the application form, submit your biometrics (photo, fingerprints, and signature), and get your acknowledgment receipt.</p>
                    <p class="text-sm text-green-600 font-medium">Keep your receipt safe until Election Day!</p>
                </div>
            </div>
            
            <div class="mt-10 text-center">
                <a href="https://governmentph.com/comelec-precinct-finder/" target="_blank" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">Check Your Registration Status</a>
            </div>
        </div>
    </section>

    <!-- Making Informed Choices Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-10 text-center">Making an Informed Vote</h2>
            
            <div class="bg-white rounded-lg shadow-lg p-6 md:p-8 mb-10">
                <div class="grid md:grid-cols-3 gap-8">
                    <div>
                        <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mb-4 mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-center mb-4">Research Candidates</h3>
                        <ul class="list-disc pl-5 space-y-2 text-gray-700">
                            <li>Review candidates' backgrounds, qualifications, and experience</li>
                            <li>Examine their track records in public service</li>
                            <li>Evaluate their platforms and policy proposals</li>
                            <li>Look beyond social media presence and campaign slogans</li>
                            <li>Consider their stance on key issues, especially those that matter to you</li>
                        </ul>
                    </div>
                    
                    <div>
                        <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mb-4 mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-center mb-4">Verify Information</h3>
                        <ul class="list-disc pl-5 space-y-2 text-gray-700">
                            <li>Be skeptical of unverified claims and sensational headlines</li>
                            <li>Cross-check information from multiple reliable sources</li>
                            <li>Watch out for fake news and disinformation campaigns</li>
                            <li>Use fact-checking resources and credible news outlets</li>
                            <li>Be wary of content that triggers strong emotional reactions</li>
                        </ul>
                    </div>
                    
                    <div>
                        <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mb-4 mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-center mb-4">Ask Critical Questions</h3>
                        <ul class="list-disc pl-5 space-y-2 text-gray-700">
                            <li>How clear and specific are the candidate's plans and policies?</li>
                            <li>Are their promises realistic and backed by concrete plans?</li>
                            <li>What is their position on key issues like the West Philippine Sea?</li>
                            <li>How have they responded to criticism and opposing views?</li>
                            <li>Do they demonstrate integrity and ethical leadership?</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section class="py-12 bg-gray-800 text-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-10 text-center">Voter Resources</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <a href="#" class="bg-gray-700 hover:bg-gray-600 p-6 rounded-lg transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                    </svg>
                    <h3 class="text-xl font-bold mb-2">Voter's Guide</h3>
                    <p>Comprehensive information about voting procedures, rights, and responsibilities</p>
                </a>
                
                <a href="#" class="bg-gray-700 hover:bg-gray-600 p-6 rounded-lg transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <h3 class="text-xl font-bold mb-2">Election Calendar</h3>
                    <p>Important dates and deadlines for the 2025 election cycle</p>
                </a>
                
                <a href="#" class="bg-gray-700 hover:bg-gray-600 p-6 rounded-lg transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                    </svg>
                    <h3 class="text-xl font-bold mb-2">Precinct Locator</h3>
                    <p>Find your assigned voting precinct and polling place</p>
                </a>
                
                <a href="#" class="bg-gray-700 hover:bg-gray-600 p-6 rounded-lg transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    <h3 class="text-xl font-bold mb-2">Election Laws</h3>
                    <p>Key legislation and regulations governing Philippine elections</p>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-10 text-center">Frequently Asked Questions</h2>
            
            <div class="bg-white rounded-lg shadow-lg p-6 md:p-8">
                <div class="space-y-6">
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-2">What if I can't vote on Election Day?</h3>
                        <p class="text-gray-700">Unfortunately, the Philippines does not currently have early voting or absentee voting for local citizens (only for overseas voters). You must vote on Election Day at your designated precinct. If you cannot vote, your absence will be recorded but there is no penalty.</p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-2">How do I know if my voter registration is still active?</h3>
                        <p class="text-gray-700">You can check your voter registration status through the COMELEC Precinct Finder website. Alternatively, you can visit your local COMELEC office. If you failed to vote in two consecutive regular elections, your registration might have been deactivated.</p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-2">What is vote buying and why is it illegal?</h3>
                        <p class="text-gray-700">Vote buying is the act of giving or promising money or material goods in exchange for a vote. It is illegal because it undermines the democratic process by allowing wealthy candidates to effectively purchase positions of power rather than earning them through merit and popular support.</p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="text-xl font-bold mb-2">How can I report election-related violations?</h3>
                        <p class="text-gray-700">You can report violations to the COMELEC, the Philippine National Police, or the Parish Pastoral Council for Responsible Voting (PPCRV). Document the violation with photos or videos if possible, and note the time, place, and people involved.</p>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-bold mb-2">What's the difference between national and local elections?</h3>
                        <p class="text-gray-700">National elections involve positions that govern the entire country (President, Vice President, Senators, and Party-list Representatives). Local elections cover positions within specific geographic areas (Governors, Mayors, Council Members, etc.). Both are important for governance at different levels.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-12 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Make Your Voice Heard?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">Register to vote, stay informed, and participate in the 2025 elections. Your vote is your power to shape the future of the Philippines.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="https://voterverifier.comelec.gov.ph/" target="_blank" class="bg-white hover:bg-gray-100 text-blue-700 font-bold py-3 px-6 rounded-lg transition duration-300">Check Registration Status</a>
                <a href="candidates.php" class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">Research Candidates</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>
</html> 