<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidates - BayanMo2025.ph</title>
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
    <section class="relative h-[400px] md:h-[500px] flex items-center justify-center text-white">
        <img src="images/PHheroBG.jpg" alt="Philippines Hero" class="absolute inset-0 w-full h-full object-cover z-0" />
        <div class="absolute inset-0 bg-gradient-to-r from-yellow-600/80 to-blue-800/80 z-10"></div>
        <div class="relative z-20 text-center px-4 max-w-5xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6 drop-shadow-lg">Know the Candidates</h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto drop-shadow-lg">Research and compare the candidates for the 2025 Philippine elections. Make an informed choice based on their platforms, track records, and positions on key issues.</p>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="py-8 bg-white shadow-lg sticky top-20 z-40 backdrop-blur-sm bg-white/90">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center justify-between gap-6">
                <h2 class="text-2xl font-bold text-gray-800">Filter Candidates</h2>
                <div class="flex flex-wrap gap-4">
                    <select id="coalition-filter" class="px-4 py-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300">
                        <option value="all">All Coalitions</option>
                        <option value="administration">Administration-Endorsed</option>
                        <option value="duterte">DuterTen Coalition</option>
                        <option value="opposition">Opposition/Progressive</option>
                    </select>
                    <select id="party-filter" class="px-4 py-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300">
                        <option value="all">All Parties</option>
                        <option value="nacionalista">Nacionalista Party</option>
                        <option value="federal">Partido Federal ng Pilipinas</option>
                        <option value="lakas">Lakas-CMD</option>
                        <option value="npc">Nationalist People's Coalition</option>
                        <option value="pdp">PDP-Laban</option>
                        <option value="liberal">Liberal Party</option>
                        <option value="makabayan">Makabayan</option>
                        <option value="independent">Independent</option>
                    </select>
                    <input type="text" placeholder="Search by name" class="px-4 py-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300">
                </div>
            </div>
        </div>
    </section>

    <!-- Administration Coalition -->
    <section class="py-16" id="administration-coalition">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4 text-gray-800">Administration-Endorsed Candidates</h2>
                <p class="text-xl text-gray-600">Alyansa para sa Bagong Pilipinas</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Imee Marcos -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-[1.02] transition duration-300">
                    <div class="h-64 bg-gray-200 overflow-hidden">
                        <img src="images/ImeeMarcos.jpg" alt="Imee Marcos" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-2 text-gray-800">Imee Marcos</h3>
                        <p class="text-blue-600 font-medium mb-6">Nacionalista Party</p>
                        
                        <div class="mb-6">
                            <h4 class="font-bold text-lg mb-3 text-gray-700">Background:</h4>
                            <ul class="list-disc pl-5 space-y-2 text-gray-600">
                                <li>Incumbent senator</li>
                                <li>Sister of President Marcos</li>
                                <li>Former Ilocos Norte Governor</li>
                            </ul>
                        </div>
                        
                        <div class="flex items-center mb-6">
                            <span class="text-sm font-bold mr-2 text-gray-700">On WPS Issue:</span>
                            <span class="px-4 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">Diplomatic Approach</span>
                        </div>
                        
                        <a href="candidate-detail.php?id=1" class="inline-block w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 text-center transform hover:translate-y-[-2px] hover:shadow-lg">View Full Profile</a>
                    </div>
                </div>
                
                <!-- Pia Cayetano -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-[1.02] transition duration-300">
                    <div class="h-64 bg-gray-200 overflow-hidden">
                        <img src="images/PiaCayteano.JPG" alt="Pia Cayetano" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-2 text-gray-800">Pia Cayetano</h3>
                        <p class="text-blue-600 font-medium mb-6">Nacionalista Party</p>
                        
                        <div class="mb-6">
                            <h4 class="font-bold text-lg mb-3 text-gray-700">Background:</h4>
                            <ul class="list-disc pl-5 space-y-2 text-gray-600">
                                <li>Incumbent senator</li>
                                <li>Women's rights advocate</li>
                                <li>Former Deputy Speaker</li>
                            </ul>
                        </div>
                        
                        <div class="flex items-center mb-6">
                            <span class="text-sm font-bold mr-2 text-gray-700">On WPS Issue:</span>
                            <span class="px-4 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">Diplomatic Approach</span>
                        </div>
                        
                        <a href="candidate-detail.php?id=2" class="inline-block w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 text-center transform hover:translate-y-[-2px] hover:shadow-lg">View Full Profile</a>
                    </div>
                </div>
                
                <!-- Manny Pacquiao -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-[1.02] transition duration-300">
                    <div class="h-64 bg-gray-200 overflow-hidden">
                        <img src="images/MannyPacquiao.JPG" alt="Manny Pacquiao" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-2 text-gray-800">Manny Pacquiao</h3>
                        <p class="text-blue-600 font-medium mb-6">Partido Federal ng Pilipinas</p>
                        
                        <div class="mb-6">
                            <h4 class="font-bold text-lg mb-3 text-gray-700">Background:</h4>
                            <ul class="list-disc pl-5 space-y-2 text-gray-600">
                                <li>Former senator (2016-2022)</li>
                                <li>Boxing champion and sports icon</li>
                                <li>Former presidential candidate</li>
                            </ul>
                        </div>
                        
                        <div class="flex items-center mb-6">
                            <span class="text-sm font-bold mr-2 text-gray-700">On WPS Issue:</span>
                            <span class="px-4 py-1 bg-red-100 text-red-800 rounded-full text-sm font-medium">Assertive Stance</span>
                        </div>
                        
                        <a href="candidate-detail.php?id=3" class="inline-block w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 text-center transform hover:translate-y-[-2px] hover:shadow-lg">View Full Profile</a>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-lg transition duration-300 transform hover:translate-y-[-2px] hover:shadow-lg text-lg">View All Administration Candidates</button>
            </div>
        </div>
    </section>

    <!-- DuterTen Coalition -->
    <section class="py-12 bg-gray-50" id="duterten-coalition">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-3 text-center">DuterTen Coalition</h2>
            <p class="text-center text-gray-600 mb-10">Duterte-Aligned Candidates</p>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Bato dela Rosa -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-64 bg-gray-200 overflow-hidden">
                        <img src="images/RonaldBatoDelaRosa.jpg" alt="Ronald 'Bato' dela Rosa" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Ronald "Bato" dela Rosa</h3>
                        <p class="text-gray-600 mb-4">PDP-Laban</p>
                        
                        <div class="mb-4">
                            <h4 class="font-bold text-lg mb-2">Background:</h4>
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Incumbent senator</li>
                                <li>Former PNP Chief</li>
                                <li>Led War on Drugs campaign</li>
                            </ul>
                        </div>
                        
                        <div class="flex items-center mb-4">
                            <span class="text-sm font-bold mr-2">On WPS Issue:</span>
                            <span class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-sm">Assertive Stance</span>
                        </div>
                        
                        <a href="candidate-detail.php?id=4" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View Full Profile</a>
                    </div>
                </div>
                
                <!-- Bong Go -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-64 bg-gray-200 overflow-hidden">
                        <img src="images/BongGo.JPG" alt="Christopher 'Bong' Go" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Christopher "Bong" Go</h3>
                        <p class="text-gray-600 mb-4">PDP-Laban</p>
                        
                        <div class="mb-4">
                            <h4 class="font-bold text-lg mb-2">Background:</h4>
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Incumbent senator</li>
                                <li>Former Special Assistant to President Duterte</li>
                                <li>Chair of Senate Health Committee</li>
                            </ul>
                        </div>
                        
                        <div class="flex items-center mb-4">
                            <span class="text-sm font-bold mr-2">On WPS Issue:</span>
                            <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">Balanced Approach</span>
                        </div>
                        
                        <a href="candidate-detail.php?id=5" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View Full Profile</a>
                    </div>
                </div>
                
                <!-- Rodante Marcoleta -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-64 bg-gray-200 overflow-hidden">
                        <img src="images/RodanteMarcoleta.jpg" alt="Rodante Marcoleta" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Rodante Marcoleta</h3>
                        <p class="text-gray-600 mb-4">Independent</p>
                        
                        <div class="mb-4">
                            <h4 class="font-bold text-lg mb-2">Background:</h4>
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Former SAGIP Party-list Representative</li>
                                <li>Key figure in ABS-CBN franchise denial</li>
                                <li>Advocate for religious sector</li>
                            </ul>
                        </div>
                        
                        <div class="flex items-center mb-4">
                            <span class="text-sm font-bold mr-2">On WPS Issue:</span>
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm">Pragmatic</span>
                        </div>
                        
                        <a href="candidate-detail.php?id=6" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View Full Profile</a>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 text-center">
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">View All DuterTen Candidates</button>
            </div>
        </div>
    </section>

    <!-- Opposition Coalition -->
    <section class="py-12" id="opposition-coalition">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-3 text-center">Opposition & Progressive Candidates</h2>
            <p class="text-center text-gray-600 mb-10">Various Opposition Alliances</p>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Bam Aquino -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-64 bg-gray-200 overflow-hidden">
                        <img src="images/BamAquino.jpeg" alt="Bam Aquino" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Bam Aquino</h3>
                        <p class="text-gray-600 mb-4">Katipunan ng Nagkakaisang Pilipino</p>
                        
                        <div class="mb-4">
                            <h4 class="font-bold text-lg mb-2">Background:</h4>
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Former senator (2013-2019)</li>
                                <li>Youth advocate and social entrepreneur</li>
                                <li>Author of key economic legislation</li>
                            </ul>
                        </div>
                        
                        <div class="flex items-center mb-4">
                            <span class="text-sm font-bold mr-2">On WPS Issue:</span>
                            <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">Multilateral Approach</span>
                        </div>
                        
                        <a href="candidate-detail.php?id=7" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View Full Profile</a>
                    </div>
                </div>
                
                <!-- Kiko Pangilinan -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-64 bg-gray-200 overflow-hidden">
                        <img src="images/KikoPangilinan.png" alt="Kiko Pangilinan" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Francis "Kiko" Pangilinan</h3>
                        <p class="text-gray-600 mb-4">Liberal Party</p>
                        
                        <div class="mb-4">
                            <h4 class="font-bold text-lg mb-2">Background:</h4>
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Former senator (2001-2013, 2016-2022)</li>
                                <li>Former Presidential Assistant on Food Security</li>
                                <li>Agriculture reform advocate</li>
                            </ul>
                        </div>
                        
                        <div class="flex items-center mb-4">
                            <span class="text-sm font-bold mr-2">On WPS Issue:</span>
                            <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">Multilateral Approach</span>
                        </div>
                        
                        <a href="candidate-detail.php?id=8" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View Full Profile</a>
                    </div>
                </div>
                
                <!-- Leody de Guzman -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-64 bg-gray-200 overflow-hidden">
                        <img src="images/LeodyDeGuzman.png" alt="Leody de Guzman" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2">Leody de Guzman</h3>
                        <p class="text-gray-600 mb-4">Partido Lakas ng Masa</p>
                        
                        <div class="mb-4">
                            <h4 class="font-bold text-lg mb-2">Background:</h4>
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Labor leader and activist</li>
                                <li>Former presidential candidate (2022)</li>
                                <li>Advocate for workers' rights and welfare</li>
                            </ul>
                        </div>
                        
                        <div class="flex items-center mb-4">
                            <span class="text-sm font-bold mr-2">On WPS Issue:</span>
                            <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">People-centered</span>
                        </div>
                        
                        <a href="candidate-detail.php?id=9" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View Full Profile</a>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 text-center">
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">View All Opposition Candidates</button>
            </div>
        </div>
    </section>

    <!-- Comparison Tool Promo -->
    <section class="py-16 bg-gradient-to-br from-blue-50 via-white to-blue-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2 space-y-6">
                    <h2 class="text-4xl font-bold mb-6 text-gray-800">Compare Candidates Side by Side</h2>
                    <p class="text-xl text-gray-600 leading-relaxed">Our comparison tool allows you to select multiple candidates and compare their positions on key issues, including the West Philippine Sea, economic policy, education, and more.</p>
                    <a href="compare.php" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-lg transition duration-300 transform hover:translate-y-[-2px] hover:shadow-lg text-lg">Try the Comparison Tool</a>
                </div>
                <div class="md:w-1/2">
                    <img src="images/comparison-tool.jpg" alt="Candidate Comparison Tool" class="rounded-2xl shadow-2xl hover:shadow-3xl transition duration-300 transform hover:scale-[1.02]" width="500">
                </div>
            </div>
        </div>
    </section>

    <!-- Fact-Check Section -->
    <section class="py-16 bg-gradient-to-r from-yellow-500 to-yellow-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-8">Fact-Checking Candidate Claims</h2>
            <p class="text-xl mb-12 max-w-3xl mx-auto">We're committed to verifying the statements and claims made by candidates to help you make an informed decision.</p>
            <a href="fact-check.php" class="inline-block bg-white hover:bg-gray-100 text-yellow-600 font-bold py-4 px-8 rounded-lg transition duration-300 transform hover:translate-y-[-2px] hover:shadow-lg text-lg">View Fact Checks</a>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <script>
        // Basic filtering functionality
        document.getElementById('coalition-filter').addEventListener('change', function() {
            const value = this.value;
            const sections = {
                'administration': document.getElementById('administration-coalition'),
                'duterte': document.getElementById('duterten-coalition'),
                'opposition': document.getElementById('opposition-coalition')
            };
            
            if (value === 'all') {
                for (const key in sections) {
                    sections[key].style.display = 'block';
                }
            } else {
                for (const key in sections) {
                    sections[key].style.display = key === value ? 'block' : 'none';
                }
            }
        });
    </script>
</body>
</html> 