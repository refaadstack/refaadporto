<header class="bg-primary dark:bg-elegant-black p-4 border-b border-secondary w-full fixed z-10 mb-2">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold"><span><a href="/">Refaadstack</a></span></h1>
            <nav class="hidden lg:block">
                <ul class="flex space-x-6 ">
                    <li><a href="/" class="hover:text-secondary">Home</a></li>
                    <li><a href="/#about" class="hover:text-secondary">About</a></li>
                    <li><a href="{{ route('portfolios') }}" class="hover:text-secondary">Portfolio</a></li>
                    <li><a href="{{ route('blog') }}" class="hover:text-secondary">Blog</a></li>
                </ul>
            </nav>
            <nav class="fixed bottom-0 left-0 right-0 bg-gray-200 dark:bg-gray-900 shadow-lg md:hidden z-50">
                <div class="flex justify-around py-2">
                    <a href="/" class="flex flex-col items-center text-secondary dark:text-gray-300 hover:text-secondary-dark dark:hover:text-primary">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        <span class="text-xs mt-1">Home</span>
                    </a>
                    <a href="/#about" class="flex flex-col items-center text-secondary dark:text-gray-300 hover:text-secondary-dark dark:hover:text-primary">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-xs mt-1">About</span>
                    </a>
                    <a href="{{ route('portfolios') }}" class="flex flex-col items-center text-secondary dark:text-gray-300 hover:text-secondary-dark dark:hover:text-primary">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-xs mt-1">Portfolio</span>
                    </a>
                    <a href="{{ route('blog') }}" class="flex flex-col items-center text-secondary dark:text-gray-300 hover:text-secondary-dark dark:hover:text-primary">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        <span class="text-xs mt-1">Blog</span>
                    </a>
                </div>
            </nav>
            <button onclick="toggleTheme()" class=" rounded-full hover:bg-secondary focus:outline-none focus:ring-2 focus:ring-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden dark:block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 block dark:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                </svg>
            </button>
        </div>
    </header>