<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Perkenalkan nama Saya Redho Fadillah Adha. Saya adalah Fullstack Web developer, Saya juga merupakan seorang lulusan Teknik Informatika yang sangat menyukai dan mendalami bidang website development. ini merupakan beberapa portfolio saya selama berkarir dibidang pemograman web">
    <meta name="google-site-verification" content="hJ9FmOJNR4HnyOdx2LyMpo2GWauL3417fdofT6rR4Tg" />
    <title>Refaadstack Portfolio</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
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
            <h1 class="text-2xl font-bold">Refaadstack</h1>
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

    <!-- Main Content -->
    <main class="flex-grow container mx-auto mt-9 mb-9">
        <section id="home" class="pt-5 text-center mt-9">
            <div class="container mx-auto">
                <h2 class="text-4xl font-bold fade-in">Hello 👋, My Name is <strong class="text-secondary">Redho Fadillah Adha</strong></h2>
                <p class="text-lg mt-4 fade-in">Fullstack Web Developer & Gamer</p>
                <p class="mt-2 fade-in">Butuh Website yang Profesional? <span class="text-secondary-light font-semibold">Hubungi Kami Sekarang!</span></p>
                <a href="#contact"
                    class="mt-6 inline-block bg-secondary-light text-primary dark:text-elegant-black font-semibold py-3 px-8 rounded-full hover:bg-secondary-dark transition duration-100 fade-in">Contact Me!</a>
                <a href="https://refaadstack.com/cv"
                    class="mt-6 inline-block bg-secondary-light text-primary dark:text-elegant-black font-semibold py-3 px-8 rounded-full hover:bg-secondary-dark transition duration-100 fade-in" target="_blank">Download CV</a>
            </div>
        </section>

        <!-- About Section with Contact Buttons -->
        <section id="about" class="pt-24 pb-10">
            <div class="container mx-auto text-center">
                <h3 class="text-3xl font-bold text-secondary fade-in">About Me</h3>
                <p class="mt-4 fade-in">Hai, saya seorang web developer yang lulus dari Teknik Informatika. Saya selalu memiliki ketertarikan dalam dunia pemrograman, tetapi pengembangan web adalah bidang yang benar-benar saya minati. Saya senang membangun website yang bersih dan fungsional, serta menikmati proses belajar terus-menerus seiring dengan perkembangan teknologi web. Baik itu front-end maupun back-end, saya selalu antusias menghadapi tantangan baru dan menciptakan sesuatu yang keren!</p>

                <!-- Contact Buttons -->
                <div class="flex justify-center mt-6 space-x-4 fade-in" id="contact">
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/refaad.jpg/" target="_blank"
                        class="w-10 h-10 flex justify-center items-center bg-secondary-light hover:bg-secondary-dark rounded-full">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2.163c3.204 0 3.584.012 4.849.07 1.17.057 1.798.24 2.22.412.424.174.726.384 1.046.704.32.32.53.623.704 1.046.172.422.355 1.05.412 2.22.058 1.265.07 1.645.07 4.849s-.012 3.584-.07 4.849c-.057 1.17-.24 1.798-.412 2.22-.174.424-.384.726-.704 1.046-.32.32-.623.53-1.046.704-.422.172-1.05.355-2.22.412-1.265.058-1.645.07-4.849.07s-3.584-.012-4.849-.07c-1.17-.057-1.798-.24-2.22-.412-.424-.174-.726-.384-1.046-.704-.32-.32-.53-.623-.704-1.046-.172-.422-.355-1.05-.412-2.22-.058-1.265-.07-1.645-.07-4.849s.012-3.584.07-4.849c.057-1.17.24-1.798.412-2.22.174-.424.384-.726.704-1.046.32-.32.623-.53 1.046-.704.422-.172 1.05-.355 2.22-.412 1.265-.058 1.645-.07 4.849-.07m0-2.163c-3.26 0-3.67.013-4.947.072-1.277.06-2.149.26-2.914.557-.766.297-1.435.708-2.103 1.376-.668.668-1.08 1.337-1.377 2.103-.297.765-.498 1.637-.558 2.914-.058 1.277-.071 1.687-.071 4.947s.013 3.67.071 4.947c.06 1.277.261 2.149.558 2.914.297.766.708 1.435 1.376 2.103.668.668 1.337 1.08 2.103 1.377.765.297 1.637.498 2.914.558 1.277.058 1.687.071 4.947.071s3.67-.013 4.947-.071c1.277-.06 2.149-.261 2.914-.558.766-.297 1.435-.708 2.103-1.376.668-.668 1.08-1.337 1.377-2.103.297-.765.498-1.637.558-2.914.058-1.277.071-1.687.071-4.947s-.013-3.67-.071-4.947c-.06-1.277-.261-2.149-.558-2.914-.297-.765-.708-1.435-1.376-2.103-.668-.668-1.337-1.08-2.103-1.377-.765-.297-1.637-.498-2.914-.558-1.277-.058-1.687-.071-4.947-.071zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a3.999 3.999 0 110-7.998 3.999 3.999 0 010 7.998zm7.846-10.405a1.44 1.44 0 100-2.88 1.44 1.44 0 000 2.88z" />
                        </svg>
                    </a>
                    <!-- Github -->
                    <a href="https://github.com/refaadstack" target="_blank"
                        class="w-10 h-10 flex justify-center items-center bg-secondary-light hover:bg-secondary-dark rounded-full">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12z" />
                        </svg>
                    </a>
                    <!-- Twitter -->
                    <a href="https://twitter.com/refaad28" target="_blank"
                        class="w-10 h-10 flex justify-center items-center bg-secondary-light hover:bg-secondary-dark rounded-full">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.954 4.569a10 10 0 01-2.825.775 4.994 4.994 0 002.163-2.723 10.126 10.126 0 01-3.127 1.184 4.97 4.97 0 00-8.482 4.523A14.077 14.077 0 011.64 3.161a4.942 4.942 0 001.524 6.574 4.928 4.928 0 01-2.253-.621v.062a4.936 4.936 0 003.966 4.827 4.996 4.996 0 01-2.224.084 4.942 4.942 0 004.617 3.417 9.948 9.948 0 01-6.102 2.104c-.396 0-.787-.023-1.17-.067A14.055 14.055 0 007.548 21c9.142 0 14.307-7.721 14.307-14.426 0-.219 0-.438-.015-.656a10.007 10.007 0 002.455-2.549l-.034-.011z" />
                        </svg>
                    </a>
                    <!-- WhatsApp -->
                    <a href="https://wa.me/6282374338273" target="_blank"
                        class="w-10 h-10 flex justify-center items-center bg-secondary-light hover:bg-secondary-dark rounded-full">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 308 308" xmlns="http://www.w3.org/2000/svg">
                            <path d="M156.73.003C69.785.003 0 69.79 0 156.732c0 27.946 7.47 55.126 21.67 79.13L.474 306.042c-.336 1.012-.087 2.13.656 2.883.539.54 1.265.842 2.01.842.26 0 .522-.042.778-.13l77.897-24.764a155.393 155.393 0 0075.004 19.335c86.948 0 156.735-69.787 156.735-156.73C313.463 69.79 243.676.003 156.73.003zm-.003 293.717c-23.146 0-45.51-6.574-64.73-19.072-.646-.424-1.393-.64-2.142-.64-.397 0-.794.061-1.175.19l-39.07 12.413 12.614-37.209c.408-1.2.204-2.528-.553-3.556-14.665-20.048-22.398-43.788-22.398-68.486 0-63.8 51.913-115.73 115.735-115.73 63.826 0 115.73 51.93 115.73 115.73-.001 63.825-51.905 115.73-115.73 115.73zM227.91 176.98c-.6-.288-23.054-11.346-27.04-12.783-1.632-.585-3.377-1.156-5.234-1.156-3.035 0-5.581 1.511-7.563 4.478-2.243 3.333-9.032 11.27-11.132 13.643-.275.311-.648.686-.873.686-.199 0-3.676-1.43-4.726-1.888-24.092-10.462-42.376-35.623-44.875-39.868-.359-.61-.374-.887-.374-.887.086-.322.898-1.134 1.315-1.553 1.222-1.21 2.548-2.805 3.83-4.349.607-.73 1.215-1.462 1.811-2.152 1.862-2.163 2.689-3.843 3.648-5.79l.503-1.01c2.343-4.658.34-8.588-.306-9.856-.531-1.062-10.014-23.944-11.019-26.347-2.424-5.803-5.628-8.504-10.08-8.504-2.11.088-13.597 1.6-18.676 4.801-5.384 3.396-14.494 14.217-14.494 33.251 0 17.128 10.872 33.3 15.537 39.452.117.154.329.469.639.922 17.875 26.103 40.154 45.445 62.744 54.468 21.745 8.688 32.042 9.691 37.896 9.691 2.46 0 4.429-.192 6.167-.364l1.102-.106c7.51-.666 24.019-9.22 27.774-19.656 2.958-8.219 3.738-17.198 1.769-20.457-1.61-2.776-3.933-3.891-6.874-5.303z" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>
         <!-- End About -->
         <section id="portfolio" class="py-10">
            <div class="container mx-auto text-center">
                <h3 class="text-3xl font-bold text-secondary-dark mb-12 fade-in">Portfolio</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Card 1 -->
                        @forelse ($portfolios as $item)
                            
                        <div class="bg-primary dark:bg-elegant-black text-elegant-black dark:text-primary rounded-lg overflow-hidden shadow-2xl fade-in">
                            <img src="{{ Storage::url($item->thumbnail) }}" alt="image of {{$item->title}}" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h4 class="text-lg font-bold">{{$item->title}}</h4>
                                <p class="mt-2">{!! Str::limit($item->description, 89, '')!!}</p>
                                
                                 {{-- button card --}}
                                <a href="{{ route('front.detail',$item->slug) }}" class="mt-6 inline-block bg-secondary-light font-semibold py-3 px-8 rounded-full hover:bg-secondary-dark transition duration-100">details</a>
                                 {{-- end button --}}
                                
                            </div>
                        </div>                          
                        @empty
                        <div class="item-center grid grid-cols-1">
                            <p>Belum ada portfolio sayangku</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </section>

            {{-- start blog --}}
            <section id="blog" class="py-10">
                <div class="container mx-auto text-center ">
                    <h3 class="text-3xl font-bold text-secondary-dark mb-12 fade-in">My Blog</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                            <!-- Card 1 -->
                            @forelse ($blogs as $item)
                            <div class="bg-primary dark:bg-elegant-black text-elegant-black dark:text-primary rounded-lg overflow-hidden shadow-2xl fade-in">
                                {{-- <img src="{{ Storage::url($item->thumbnail) }}" alt="SMKN SPP Project" class="w-full h-48 object-cover"> --}}
                                <article class="p-6">
                                    <h4 class="text-lg font-bold">{{ $item->title }}</h4>
                                    <p class="mt-2">{!! Str::limit($item->content, 89, '')!!}</p>
        
                                    {{-- button card --}}
                                    <a href="{{ route('front.blogs',$item->slug) }}" class="mt-6 inline-block bg-secondary-light font-semibold py-3 px-8 rounded-full hover:bg-secondary-dark transition duration-100">read more..</a>
                                    {{-- end button --}}
                                </article>
                            </div>
                                
                            @empty
                            <div class="item-center grid grid-cols-1">
                                <p>Belum ada blog sayangku</p>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </section>

        <!-- Add more sections for About, Portfolio, and Blog -->
    </main>


    <!-- Footer -->
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
    <script>
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