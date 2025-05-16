<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Philippine Environment - BayanMo2025.ph</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap');
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="relative h-[500px] flex items-center justify-center text-white">
        <img src="images/ph-environment.jpg" alt="Philippine Environment" class="absolute inset-0 w-full h-full object-cover z-0" />
        <div class="absolute inset-0 bg-gradient-to-r from-green-800/80 to-green-600/80 z-10"></div>
        <div class="relative z-20 text-center px-4 max-w-5xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6 drop-shadow-lg">Protecting Our Natural Heritage</h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto drop-shadow-lg">Join the movement to preserve and protect the Philippines' rich biodiversity and natural resources for future generations.</p>
        </div>
    </section>

    <!-- Key Issues Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold mb-12 text-center text-gray-800">Environmental Challenges</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Deforestation -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gray-200">
                        <img src="images/deforestation.jpg" alt="Deforestation" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4 text-gray-800">Deforestation</h3>
                        <p class="text-gray-600 mb-4">The Philippines has lost over 10 million hectares of forest cover in the past century due to logging, mining, and land conversion.</p>
                        <ul class="list-disc pl-5 space-y-2 text-gray-600 mb-6">
                            <li>Illegal logging activities</li>
                            <li>Mining operations</li>
                            <li>Agricultural expansion</li>
                            <li>Urban development</li>
                        </ul>
                        <a href="#" class="text-green-600 font-bold hover:text-green-700">Learn how to help →</a>
                    </div>
                </div>

                <!-- Marine Pollution -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gray-200">
                        <img src="images/marine-pollution.jpg" alt="Marine Pollution" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4 text-gray-800">Marine Pollution</h3>
                        <p class="text-gray-600 mb-4">Our oceans face severe threats from plastic pollution, industrial waste, and unsustainable fishing practices.</p>
                        <ul class="list-disc pl-5 space-y-2 text-gray-600 mb-6">
                            <li>Plastic waste in oceans</li>
                            <li>Chemical pollution</li>
                            <li>Coral reef destruction</li>
                            <li>Overfishing</li>
                        </ul>
                        <a href="#" class="text-green-600 font-bold hover:text-green-700">Learn how to help →</a>
                    </div>
                </div>

                <!-- Climate Change -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gray-200">
                        <img src="images/climate-change.jpg" alt="Climate Change" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4 text-gray-800">Climate Change</h3>
                        <p class="text-gray-600 mb-4">The Philippines is one of the most vulnerable countries to climate change impacts, facing rising sea levels and extreme weather events.</p>
                        <ul class="list-disc pl-5 space-y-2 text-gray-600 mb-6">
                            <li>Rising sea levels</li>
                            <li>Stronger typhoons</li>
                            <li>Drought and flooding</li>
                            <li>Agricultural impacts</li>
                        </ul>
                        <a href="#" class="text-green-600 font-bold hover:text-green-700">Learn how to help →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Take Action Section -->
    <section class="py-16 bg-green-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold mb-12 text-center text-gray-800">How You Can Help</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Individual Actions -->
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Individual Actions</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li>• Reduce plastic use</li>
                        <li>• Practice proper waste segregation</li>
                        <li>• Use eco-friendly products</li>
                        <li>• Save water and electricity</li>
                        <li>• Support local environmental groups</li>
                    </ul>
                </div>

                <!-- Community Initiatives -->
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Community Initiatives</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li>• Organize clean-up drives</li>
                        <li>• Start community gardens</li>
                        <li>• Conduct awareness programs</li>
                        <li>• Support local recycling</li>
                        <li>• Tree planting activities</li>
                    </ul>
                </div>

                <!-- Policy Support -->
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Policy Support</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li>• Support environmental laws</li>
                        <li>• Vote for green initiatives</li>
                        <li>• Sign environmental petitions</li>
                        <li>• Report violations</li>
                        <li>• Advocate for change</li>
                    </ul>
                </div>

                <!-- Education -->
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Education</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li>• Share knowledge</li>
                        <li>• Join workshops</li>
                        <li>• Read environmental news</li>
                        <li>• Follow eco-organizations</li>
                        <li>• Teach others</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold mb-12 text-center text-gray-800">Success Stories</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Story 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gray-200">
                        <img src="images/success-1.jpg" alt="Boracay Rehabilitation" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-4">Boracay Rehabilitation</h3>
                        <p class="text-gray-600">The successful rehabilitation of Boracay Island shows how determined environmental action can restore natural beauty and sustainability.</p>
                    </div>
                </div>

                <!-- Story 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gray-200">
                        <img src="images/success-2.jpg" alt="Manila Bay Cleanup" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-4">Manila Bay Cleanup</h3>
                        <p class="text-gray-600">Ongoing efforts to clean Manila Bay demonstrate the power of collective action in environmental conservation.</p>
                    </div>
                </div>

                <!-- Story 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="h-48 bg-gray-200">
                        <img src="images/success-3.jpg" alt="Masungi Georeserve" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-4">Masungi Georeserve</h3>
                        <p class="text-gray-600">The protection and restoration of Masungi Georeserve showcases successful conservation through sustainable tourism.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Get Involved CTA -->
    <section class="py-16 bg-gradient-to-r from-green-600 to-green-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-8">Join the Movement</h2>
            <p class="text-xl mb-12 max-w-3xl mx-auto">Every action counts in protecting our environment. Start making a difference today by joining local environmental initiatives.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="#" class="bg-white text-green-700 hover:bg-gray-100 font-bold py-3 px-8 rounded-lg transition duration-300">Find Local Groups</a>
                <a href="#" class="bg-green-800 text-white hover:bg-green-900 font-bold py-3 px-8 rounded-lg transition duration-300">Report Environmental Issues</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>
</html> 