<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community - BayanMo2025.ph</title>
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
        <div class="absolute inset-0 bg-gradient-to-r from-purple-600/80 to-blue-800/80 z-10"></div>
        <div class="relative z-20 text-center px-4 max-w-5xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6 drop-shadow-lg">Community Voices</h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto drop-shadow-lg">Join the conversation! Share your thoughts, engage with fellow voters, and become part of the movement for an informed electorate in 2025.</p>
        </div>
    </section>

    <!-- Forum Tabs Section -->
    <section class="py-8 bg-white shadow-lg sticky top-20 z-40 backdrop-blur-sm bg-white/90">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap border-b-2 border-gray-200 gap-2">
                <button class="px-6 py-3 text-blue-600 font-bold border-b-2 border-blue-600 hover:bg-blue-50 transition duration-300">All Discussions</button>
                <button class="px-6 py-3 text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition duration-300">West Philippine Sea</button>
                <button class="px-6 py-3 text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition duration-300">Economy</button>
                <button class="px-6 py-3 text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition duration-300">Education</button>
                <button class="px-6 py-3 text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition duration-300">Healthcare</button>
                <button class="px-6 py-3 text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition duration-300">Environment</button>
            </div>
        </div>
    </section>

    <!-- Discussion Form -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h2 class="text-3xl font-bold mb-8 text-gray-800">Start a Discussion</h2>
                <form action="#" method="post" class="space-y-6">
                    <div>
                        <label for="name" class="block text-gray-700 font-bold mb-2">Your Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300" required>
                    </div>
                    <div>
                        <label for="topic" class="block text-gray-700 font-bold mb-2">Topic</label>
                        <select id="topic" name="topic" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300">
                            <option value="general">General Discussion</option>
                            <option value="wps">West Philippine Sea</option>
                            <option value="economy">Economy</option>
                            <option value="education">Education</option>
                            <option value="healthcare">Healthcare</option>
                            <option value="environment">Environment</option>
                        </select>
                    </div>
                    <div>
                        <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                        <input type="text" id="title" name="title" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300" required>
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700 font-bold mb-2">Your Message</label>
                        <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300" required></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="px-8 py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition duration-300 transform hover:translate-y-[-2px] hover:shadow-lg">Post Discussion</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Recent Discussions -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold mb-12 text-center text-gray-800">Recent Discussions</h2>
            
            <!-- Discussion Cards -->
            <div class="space-y-8">
                <!-- Discussion 1 -->
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition duration-300 transform hover:scale-[1.01]">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <span class="px-4 py-1.5 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mr-2">West Philippine Sea</span>
                            <h3 class="text-2xl font-bold mt-3 text-gray-800">What diplomatic approaches could work with China?</h3>
                        </div>
                        <div class="text-gray-500 text-sm">Posted 2 days ago</div>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">I've been following the recent developments in the West Philippine Sea and wondered what diplomatic strategies could actually make progress with China. Does anyone have insights on effective multilateral approaches or previous successful models?</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-blue-700 rounded-full flex items-center justify-center text-white font-bold mr-3">M</div>
                            <span class="text-gray-700 font-medium">Miguel Santos</span>
                        </div>
                        <div class="flex items-center space-x-6">
                            <div class="flex items-center text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                                <span>12 comments</span>
                            </div>
                            <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold transition duration-300">Join Discussion →</a>
                        </div>
                    </div>
                </div>

                <!-- Discussion 2 -->
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition duration-300 transform hover:scale-[1.01]">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <span class="px-4 py-1.5 bg-green-100 text-green-800 rounded-full text-sm font-medium mr-2">Education</span>
                            <h3 class="text-2xl font-bold mt-3 text-gray-800">How should we reform our education system?</h3>
                        </div>
                        <div class="text-gray-500 text-sm">Posted 3 days ago</div>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">With the pandemic highlighting many challenges in our education system, what reforms should candidates be proposing for 2025? I believe we need to focus more on digital literacy and critical thinking skills.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-br from-green-600 to-green-700 rounded-full flex items-center justify-center text-white font-bold mr-3">A</div>
                            <span class="text-gray-700 font-medium">Ana Reyes</span>
                        </div>
                        <div class="flex items-center space-x-6">
                            <div class="flex items-center text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                                <span>24 comments</span>
                            </div>
                            <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold transition duration-300">Join Discussion →</a>
                        </div>
                    </div>
                </div>

                <!-- Discussion 3 -->
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition duration-300 transform hover:scale-[1.01]">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <span class="px-4 py-1.5 bg-red-100 text-red-800 rounded-full text-sm font-medium mr-2">Economy</span>
                            <h3 class="text-2xl font-bold mt-3 text-gray-800">Post-pandemic economic recovery priorities</h3>
                        </div>
                        <div class="text-gray-500 text-sm">Posted 5 days ago</div>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">What sectors should the next administration prioritize for economic recovery? Tourism has been devastated, but there are also opportunities in manufacturing and digital services. What do you think?</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-br from-red-600 to-red-700 rounded-full flex items-center justify-center text-white font-bold mr-3">J</div>
                            <span class="text-gray-700 font-medium">Jay Torres</span>
                        </div>
                        <div class="flex items-center space-x-6">
                            <div class="flex items-center text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                                <span>18 comments</span>
                            </div>
                            <a href="#" class="text-blue-600 hover:text-blue-700 font-semibold transition duration-300">Join Discussion →</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <button class="px-8 py-4 bg-purple-600 text-white font-bold rounded-lg hover:bg-purple-700 transition duration-300 transform hover:translate-y-[-2px] hover:shadow-lg text-lg">Load More Discussions</button>
            </div>
        </div>
    </section>

    <!-- Community Guidelines -->
    <section class="py-16 bg-gradient-to-br from-blue-50 via-white to-blue-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold mb-12 text-center text-gray-800">Community Guidelines</h2>
            <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg p-8">
                <div class="grid md:grid-cols-2 gap-12">
                    <div class="space-y-6">
                        <h3 class="text-2xl font-bold flex items-center text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Do's
                        </h3>
                        <ul class="list-disc pl-8 space-y-3 text-gray-600">
                            <li>Be respectful and civil in all interactions</li>
                            <li>Base arguments on facts and credible sources</li>
                            <li>Listen to different perspectives</li>
                            <li>Stay on topic in discussion threads</li>
                            <li>Report inappropriate content</li>
                            <li>Verify information before sharing</li>
                        </ul>
                    </div>
                    <div class="space-y-6">
                        <h3 class="text-2xl font-bold flex items-center text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Don'ts
                        </h3>
                        <ul class="list-disc pl-8 space-y-3 text-gray-600">
                            <li>Use hate speech, personal attacks, or harassment</li>
                            <li>Share fake news or unverified information</li>
                            <li>Spam or post promotional content</li>
                            <li>Violate others' privacy</li>
                            <li>Engage in trolling or disruptive behavior</li>
                            <li>Post offensive or inappropriate content</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Integration -->
    <section class="py-12 bg-purple-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-8">Join the Conversation Elsewhere</h2>
            <p class="text-xl mb-10 max-w-3xl mx-auto">Follow us on social media to stay updated on election news, events, and discussions.</p>
            
            <div class="flex flex-wrap justify-center gap-6">
                <a href="#" class="flex flex-col items-center p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600 mb-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    <span class="font-bold">Facebook</span>
                </a>
                
                <a href="#" class="flex flex-col items-center p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-400 mb-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723 10.054 10.054 0 01-3.127 1.184 4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                    </svg>
                    <span class="font-bold">Twitter</span>
                </a>
                
                <a href="#" class="flex flex-col items-center p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-pink-600 mb-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                    </svg>
                    <span class="font-bold">Instagram</span>
                </a>
                
                <a href="#" class="flex flex-col items-center p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-red-600 mb-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                    </svg>
                    <span class="font-bold">YouTube</span>
                </a>
                
                <a href="#" class="flex flex-col items-center p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-black mb-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.53.02C13.84 0 15.14.19 16.4.57c1.25.38 2.35.94 3.29 1.67a7.75 7.75 0 012.3 2.56c.56.99.95 2.05 1.18 3.2.24 1.15.34 2.35.32 3.6-.01 1.8-.15 3.33-.4 4.58a11.3 11.3 0 01-1.14 3.34c-.5.92-1.14 1.68-1.9 2.27a8.57 8.57 0 01-2.7 1.48c-1.06.35-2.2.52-3.44.51-.5 0-1.01-.03-1.53-.08-.53-.05-1.04-.13-1.55-.25-.86-.2-1.66-.51-2.4-.93a9.97 9.97 0 01-1.94-1.43 7.99 7.99 0 01-1.4-1.88 7.67 7.67 0 01-.77-2.27 15.59 15.59 0 01-.24-2.2c-.04-.8-.03-1.64 0-2.52.06-.88.16-1.73.33-2.56.23-1.13.62-2.18 1.17-3.16.55-.98 1.28-1.83 2.18-2.55a9.58 9.58 0 013.21-1.7 12.98 12.98 0 014.03-.57zM9.42 8.25c0 .15-.08.28-.24.4-.16.13-.4.2-.73.2a1 1 0 01-.62-.18.7.7 0 01-.24-.59v-3.9a.69.69 0 01.26-.59c.16-.13.38-.2.67-.2.29 0 .53.07.72.2.2.13.3.28.3.45v.5a6.13 6.13 0 01-1.61 4.05c.17.15.38.22.65.22.2 0 .39-.07.58-.2.2-.13.29-.25.29-.37 0-.07-.03-.13-.08-.18a3.8 3.8 0 00-.79-.74 5.13 5.13 0 001.16-3.37V8.13l.01.12h.36zm8.4 2.94c0 .33-.13.62-.4.87-.26.25-.63.37-1.1.37-.31 0-.59-.05-.85-.17a1.3 1.3 0 01-.59-.48 1.4 1.4 0 01-.21-.78c0-.34.09-.63.28-.87.2-.25.45-.37.78-.37.05 0 .11 0 .19.02.07 0 .11.02.15.02.04 0 .08-.01.12-.05a.2.2 0 00.06-.16.4.4 0 00-.11-.28c-.07-.07-.16-.14-.25-.2l-.26-.16-.28-.18a1.39 1.39 0 01-.56-1.16c0-.31.11-.59.33-.82.22-.23.53-.35.93-.35.36 0 .66.1.89.3.23.2.35.44.35.74a.91.91 0 01-.15.52.5.5 0 01-.44.24c-.14 0-.25-.06-.32-.17a.6.6 0 01-.1-.35c0-.08 0-.15.02-.2a.36.36 0 00.02-.12c0-.08-.03-.15-.1-.2-.05-.06-.14-.08-.25-.08-.14 0-.25.05-.33.16a.66.66 0 00-.13.4c0 .17.05.32.16.43.1.11.22.2.35.3l.32.22.31.25c.1.08.18.18.24.3.07.1.1.22.1.36zM11 8.29c.02-.11.04-.24.04-.39V4.78c0-.21-.09-.4-.27-.55a.9.9 0 00-.6-.23.82.82 0 00-.62.25.9.9 0 00-.24.63v3.71c.35.21.7.32 1.03.32.33 0 .55-.2.66-.61z"/>
                    </svg>
                    <span class="font-bold">TikTok</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>
</html> 