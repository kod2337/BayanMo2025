<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BayanMo2025.ph - Your Voice, Your Vote</title>
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
    <section class="relative h-[600px] md:h-[700px] flex items-center justify-center text-white">
        <img src="images/PHheroBG.jpg" alt="Philippines Hero" class="absolute inset-0 w-full h-full object-cover z-0" />
        <div class="absolute inset-0 bg-gradient-to-r from-yellow-600/80 to-blue-800/80 z-10"></div>
        <div class="relative z-20 text-center px-4 max-w-5xl mx-auto">
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6 drop-shadow-lg">Ang Boto Mo, Boses ng Bayan 🇵🇭</h1>
            <p class="text-xl md:text-2xl mb-12 drop-shadow-lg max-w-3xl mx-auto">Get informed. Get involved. Vote wisely this 2025.</p>
            <div class="flex flex-col md:flex-row justify-center gap-6">
                <a href="candidates.php" class="bg-yellow-500 hover:bg-yellow-400 text-blue-900 font-bold py-4 px-8 rounded-lg transition duration-300 transform hover:translate-y-[-2px] hover:shadow-lg text-lg">Know the Candidates</a>
                <a href="issues.php" class="bg-red-600 hover:bg-red-500 text-white font-bold py-4 px-8 rounded-lg transition duration-300 transform hover:translate-y-[-2px] hover:shadow-lg text-lg">Understand the Issues</a>
                <a href="join.php" class="bg-white hover:bg-gray-100 text-blue-800 font-bold py-4 px-8 rounded-lg transition duration-300 transform hover:translate-y-[-2px] hover:shadow-lg text-lg">Join the Movement</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16 text-gray-800">Why Your Vote Matters</h2>
            <div class="grid md:grid-cols-3 gap-12">
                <div class="bg-gradient-to-br from-blue-50 to-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl flex items-center justify-center mb-6 mx-auto transform rotate-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-center mb-4 text-gray-800">Protect Our Sovereignty</h3>
                    <p class="text-gray-600 text-center leading-relaxed">Your vote helps determine who will stand up for the West Philippine Sea and protect our national interests.</p>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl flex items-center justify-center mb-6 mx-auto transform -rotate-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-center mb-4 text-gray-800">Shape Economic Policy</h3>
                    <p class="text-gray-600 text-center leading-relaxed">Elect leaders who will create jobs, reduce inequality, and build a stronger economy for all Filipinos.</p>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition duration-300">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl flex items-center justify-center mb-6 mx-auto transform rotate-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-center mb-4 text-gray-800">Improve Education</h3>
                    <p class="text-gray-600 text-center leading-relaxed">Support candidates who prioritize quality education and opportunities for the Filipino youth.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- West Philippine Sea Section -->
    <section class="py-24 bg-gradient-to-br from-blue-50 via-white to-blue-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2 space-y-6">
                    <h2 class="text-4xl font-bold mb-6 text-gray-800">The West Philippine Sea Issue</h2>
                    <p class="text-xl text-gray-600 leading-relaxed">Understanding our territorial rights and the ongoing challenges in the West Philippine Sea is crucial for the 2025 elections.</p>
                    <a href="wps.php" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-lg transition duration-300 transform hover:translate-y-[-2px] hover:shadow-lg text-lg">Learn More</a>
                </div>
                <div class="md:w-1/2">
                    <img src="images/west-ph-sea-map.jpg" alt="West Philippine Sea Map" class="rounded-2xl shadow-2xl hover:shadow-3xl transition duration-300 transform hover:scale-[1.02]" width="500">
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-24 bg-gradient-to-r from-red-600 to-red-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-8">Ready to Make a Difference?</h2>
            <p class="text-xl mb-12 max-w-3xl mx-auto">Register to vote, get informed, and help shape the future of the Philippines.</p>
            <a href="register.php" class="inline-block bg-white hover:bg-gray-100 text-red-600 font-bold py-4 px-8 rounded-lg transition duration-300 transform hover:translate-y-[-2px] hover:shadow-lg text-lg">Check Your Voter Status</a>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>
</html> 