<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $blog->title }}">
    <title>{{ $blog->title }}</title>
    @vite('resources/css/app.css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        .gallery-top {
            max-width: 768px;
            margin: 0 auto;
        }
        .gallery-thumbs img {
            max-width: 200px;
            height: auto;
        }
        nav {
            background-color: #1a202c;
        }
    </style>
</head>
<body class="bg-gray-900 text-white">

    <!-- Navbar -->
    <header class="bg-gray-800 p-6">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold text-white"><a href="/">refaadstack</a></h1>
            <nav class="hidden lg:block">
                <ul class="flex space-x-6">
                    <li><a href="#home" class="hover:text-yellow-500">Home</a></li>
                    <li><a href="#about" class="hover:text-yellow-500">About</a></li>
                    <li><a href="#portfolio" class="hover:text-yellRFABlog</a></li>
                    <li><a href="#contact" class="hover:text-yellow-500">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Bottom Navbar for Mobile -->
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

    <!-- Blog Detail -->
    <section class="pt-16">
        <div class="container mx-auto">
            <div class="bg-gray-500 p-8 rounded-lg">
                <h2 class="text-4xl font-bold text-yellow-500">{{ $blog->title }}</h2>
                <p class="text-gray-300 mt-4">{{ $blog->created_at->format('d M Y') }}</p>
                <!-- Photo Galleries Section with Swiper -->
                <!-- Swiper Large Image (Initially shows the smallest ID image) -->
                <div class="gallery-top ">
                    <img id="mainImage" src="{{ Storage::url($pict->url) }}" alt="{{ $blog->slug }}" class="w-full h-[auto] object-cover  shadow-lg mt-10">
                </div>
                
                <!-- Thumbnails Section -->
                <div class="gallery-thumbs mt-6 grid grid-cols-4 gap-4">
                    @foreach($blog->photoGalleries as $photo)
                    <img src="{{ Storage::url($photo->url) }}" alt="{{ $blog->slug }}" class="thumbnail object-cover rounded-lg cursor-pointer" data-id="{{ $photo->id }}">
                    @endforeach
                </div>
            </div>
            <div class="mt-10">
                <div class="prose prose-lg prose-yellow max-w-none text-gray-800 bg-gray-400 rounded-lg p-6">
                    {!! $blog->content !!}
                </div>
            </div>
        </div>
        <!-- Blog Content -->
    </section>
    <footer class="bg-gray-800 py-6 text-center mt-10">
        <p class="text-gray-400">&copy; 2024 Redho Fadillah Adha. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const thumbnails = document.querySelectorAll('.thumbnail'); // Select all thumbnails
            const mainImage = document.getElementById('mainImage'); // Get the main image element
    
            // Add click event to each thumbnail
            thumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', function() {
                    // Change the src of the main image to the src of the clicked thumbnail
                    mainImage.src = this.src;
                });
            });
        });
    </script>
</body>
</html>
