<header class="bg-white/90 backdrop-blur-sm shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <nav class="flex flex-wrap items-center justify-between py-4">
            <div class="flex items-center flex-shrink-0 mr-6">
                <a href="index.php" class="flex items-center group">
                    <span class="font-bold text-2xl tracking-tight">
                        <span class="text-blue-700 group-hover:text-blue-800 transition duration-300">BayanMo</span>
                        <span class="text-red-600 group-hover:text-red-700 transition duration-300">2025</span>
                        <span class="text-blue-700 group-hover:text-blue-800 transition duration-300">.ph</span>
                    </span>
                </a>
            </div>
            <div class="block lg:hidden">
                <button id="mobile-menu-button" class="flex items-center px-3 py-2 border-2 rounded-lg text-blue-700 border-blue-700 hover:text-blue-900 hover:border-blue-900 transition duration-300">
                    <svg class="fill-current h-4 w-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
            </div>
            <div id="menu" class="w-full hidden flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="lg:flex-grow">
                    <a href="candidates.php" class="block mt-4 lg:inline-block lg:mt-0 text-blue-700 hover:text-blue-900 mr-6 font-medium transition duration-300 hover:translate-y-[-2px]">
                        Candidates
                    </a>
                    <a href="issues.php" class="block mt-4 lg:inline-block lg:mt-0 text-blue-700 hover:text-blue-900 mr-6 font-medium transition duration-300 hover:translate-y-[-2px]">
                        Issues
                    </a>
                    <a href="wps.php" class="block mt-4 lg:inline-block lg:mt-0 text-blue-700 hover:text-blue-900 mr-6 font-medium transition duration-300 hover:translate-y-[-2px]">
                        West PH Sea
                    </a>
                    <a href="education.php" class="block mt-4 lg:inline-block lg:mt-0 text-blue-700 hover:text-blue-900 mr-6 font-medium transition duration-300 hover:translate-y-[-2px]">
                        Voter Education
                    </a>
                    <a href="community.php" class="block mt-4 lg:inline-block lg:mt-0 text-blue-700 hover:text-blue-900 font-medium transition duration-300 hover:translate-y-[-2px]">
                        Community
                    </a>
                </div>
                <div>
                    <a href="join.php" class="inline-block text-sm px-6 py-3 leading-none rounded-lg text-white bg-blue-700 border-2 border-blue-700 hover:bg-blue-800 hover:border-blue-800 transition duration-300 mt-4 lg:mt-0 font-bold shadow-md hover:shadow-lg transform hover:translate-y-[-2px]">Join the Movement</a>
                </div>
            </div>
        </nav>
    </div>
</header>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('menu').classList.toggle('hidden');
    });
</script> 