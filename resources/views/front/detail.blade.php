<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Portfolio Project</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-900 text-white">

    <!-- Header -->
    <header class="bg-gray-800 p-6">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold text-white">refaadstack</h1>
            <nav class="hidden lg:block">
                <ul class="flex space-x-6">
                    <li><a href="#home" class="hover:text-yellow-500">Home</a></li>
                    <li><a href="#about" class="hover:text-yellow-500">About</a></li>
                    <li><a href="#portfolio" class="hover:text-yellow-500">Portfolio</a></li>
                    <li><a href="#contact" class="hover:text-yellow-500">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <nav class="lg:hidden fixed bottom-0 inset-x-0 bg-gray-800 text-white z-50 shadow-lg">
        <div class="flex justify-around items-center py-3">
            <a href="#home" class="flex flex-col items-center text-gray-400 hover:text-yellow-500 active:text-yellow-500">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6"></path>
                </svg>
                <span class="text-sm">Home</span>
            </a>
            <a href="#about" class="flex flex-col items-center text-gray-400 hover:text-yellow-500 active:text-yellow-500">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A3 3 0 016 15.879V12a9 9 0 1118 0v3.879a3 3 0 01.879 1.926l.121 1.996M16 22h1M12 22h1M8 22h1"></path>
                </svg>
                <span class="text-sm">About</span>
            </a>
            <a href="#portfolio" class="flex flex-col items-center text-gray-400 hover:text-yellow-500 active:text-yellow-500">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 7l9-4 9 4M4 10h16M4 20h16M4 15h16"></path>
                </svg>
                <span class="text-sm">Portfolio</span>
            </a>
            <a href="#contact" class="flex flex-col items-center text-gray-400 hover:text-yellow-500 active:text-yellow-500">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 2a2 2 0 012 2v12a2 2 0 01-2 2h-4l-4 4v-4H8a2 2 0 01-2-2V4a2 2 0 012-2h8z"></path>
                </svg>
                <span class="text-sm">Contact</span>
            </a>
        </div>
    </nav>

    <!-- Detail Project -->
    <section class="pt-16">
        <div class="container mx-auto text-center">
            <!-- Image Section -->
            <h2 class="text-4xl font-bold text-yellow-500">{{ $portfolios->title }}</h2>
            <div class="h-screen flex items-center justify-center">
                <img src="{{ Storage::url($portfolios->thumbnail) }}" alt="Daisee Crafting Website" class="justify-center">
            </div>
            <!-- Project Info -->
            <div class="mt-8 mx-auto">
                <div class="text-gray-300 text-center">{!! $portfolios->description !!}</div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 py-6 text-center mt-10">
        <p class="text-gray-400">&copy; 2024 Redho Fadillah Adha. All rights reserved.</p>
    </footer>

</body>

</html>
