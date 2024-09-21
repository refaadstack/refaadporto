<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $blog->title }}">
    <title>{{ $blog->title }}</title>
    @vite('resources/css/app.css')
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
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        }
        .fade-in.appear {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    <script>
        function toggleTheme() {
            if (localStorage.theme === 'dark') {
                document.documentElement.classList.remove('dark');
                localStorage.theme = 'light';
            } else {
                document.documentElement.classList.add('dark');
                localStorage.theme = 'dark';
            }
        }

        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: light)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>
<body class="flex flex-col min-h-screen bg-primary text-elegant-black dark:bg-elegant-black dark:text-primary transition-colors duration-200">

    <!-- Navbar -->
    <header class="bg-primary dark:bg-elegant-black p-4 border-b border-secondary w-full fixed z-10 mb-2">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold"><a href="/">Refaadstack</a></h1>
            <nav class="hidden lg:block">
                <ul class="flex space-x-6 ">
                    <li><a href="#home" class="hover:text-secondary">Home</a></li>
                    <li><a href="#about" class="hover:text-secondary">About</a></li>
                    <li><a href="#portfolio" class="hover:text-secondary">Portfolio</a></li>
                    <li><a href="#blog" class="hover:text-secondary">Blog</a></li>
                </ul>
            </nav>
            <nav class="fixed bottom-0 left-0 right-0 bg-gray-200 dark:bg-gray-900 shadow-lg md:hidden z-50">
                <div class="flex justify-around py-2">
                    <a href="#" class="flex flex-col items-center text-secondary dark:text-gray-300 hover:text-secondary-dark dark:hover:text-primary">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        <span class="text-xs mt-1">Home</span>
                    </a>
                    <a href="#" class="flex flex-col items-center text-secondary dark:text-gray-300 hover:text-secondary-dark dark:hover:text-primary">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-xs mt-1">About</span>
                    </a>
                    <a href="#" class="flex flex-col items-center text-secondary dark:text-gray-300 hover:text-secondary-dark dark:hover:text-primary">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-xs mt-1">Portfolio</span>
                    </a>
                    <a href="#" class="flex flex-col items-center text-secondary dark:text-gray-300 hover:text-secondary-dark dark:hover:text-primary">
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

    <!-- Blog Detail -->
    <section class="pt-16 mb-10">
        <div class="container mx-auto mt-10">
            <div class="bg-gray-500 p-8 rounded-lg">
                <h2 class="text-4xl font-bold text-secondary fade-in">{{ $blog->title }}</h2>
                <p class="text-gray-300 mt-4 fade-in">{{ $blog->created_at->format('d M Y') }}</p>
                <!-- Photo Galleries Section with Swiper -->
                <!-- Swiper Large Image (Initially shows the smallest ID image) -->
                <div class="gallery-top fade-in">
                    <img id="mainImage" src="{{ Storage::url($pict->url) }}" alt="{{ $blog->slug }}" class="w-full h-[auto] object-cover  shadow-lg mt-10">
                </div>
                
                <!-- Thumbnails Section -->
                <div class="gallery-thumbs mt-6 grid grid-cols-4 gap-4 fade-in">
                    @foreach($blog->photoGalleries as $photo)
                    <img src="{{ Storage::url($photo->url) }}" alt="{{ $blog->slug }}" class="thumbnail object-cover rounded-lg cursor-pointer fade-in" data-id="{{ $photo->id }}">
                    @endforeach
                </div>
            </div>
            <div class="mt-10">
                <article class="prose prose-lg prose-yellow max-w-none text-gray-800 bg-gray-400 rounded-lg p-6 fade-in">
                    {!! $blog->content !!}
                </article>
            </div>
        </div>
        <!-- Blog Content -->
    </section>
    <footer class="bg-primary dark:bg-elegant-black text-elegant-black dark:text-primary py-8 border-t border-secondary fade-in">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- About Section -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">About Refaadstack</h3>
                    <p class="text-sm">Passionate developer creating innovative solutions. Specializing in web development, database, and hosting solutions.</p>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="text-sm space-y-2">
                        <li><a href="#home" class="hover:text-secondary">Home</a></li>
                        <li><a href="#about" class="hover:text-secondary">About</a></li>
                        <li><a href="#portfolio" class="hover:text-secondary">Portfolio</a></li>
                        <li><a href="#blog" class="hover:text-secondary">Blog</a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Services</h3>
                    <ul class="text-sm space-y-2">
                        <li>Web Development</li>
                        <li>Hosting</li>
                        <li>Database Design</li>
                        <li>UI/UX Design</li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="text-sm space-y-2">
                        <li>Email: rfa@refaadstack.com</li>
                        <li>Phone: +62 823 7433-8273</li>
                        <li>Address: Jambi, Jambi</li>
                    </ul>
                    <!-- Social Media Icons -->
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="hover:text-secondary">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path></svg>
                        </a>
                        <a href="#" class="hover:text-secondary">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path></svg>
                        </a>
                        <a href="#" class="hover:text-secondary">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
                        </a>
                        <a href="#" class="hover:text-secondary">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="mt-8 pt-8 border-t border-secondary text-sm text-center">
                <p>&copy; 2024 Refaadstack. All rights reserved.</p>
            </div>
        </div>
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

        // Fade-in animation
        function handleIntersection(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('appear');
                } else {
                    entry.target.classList.remove('appear');
                }
            });
        }

        const observer = new IntersectionObserver(handleIntersection, {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        });

        document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
    </script>
</body>
</html>
