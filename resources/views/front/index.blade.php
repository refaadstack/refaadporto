<!DOCTYPE html>
<html lang="in-ID">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Redho Fadillah Adha</title>
    @vite('resources/css/app.css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
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
            <h1 class="text-3xl font-bold text-white"><a href="/">refaadstack</a></h1>
            <nav class="hidden lg:block">
                <ul class="flex space-x-6">
                    <li><a href="#home" class="hover:text-yellow-500">Home</a></li>
                    <li><a href="#about" class="hover:text-yellow-500">About</a></li>
                    <li><a href="#portfolio" class="hover:text-yellRFABlog">Portfolio</a></li>
                    <li><a href="#blog" class="hover:text-yellow-500">Blog</a></li>
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
            <a href="#blog" class="flex flex-col items-center text-gray-400 hover:text-yellow-500 active:text-yellow-500">
                <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 2a2 2 0 012 2v12a2 2 0 01-2 2h-4l-4 4v-4H8a2 2 0 01-2-2V4a2 2 0 012-2h8z"></path>
                </svg>
                <span class="text-sm">Blog</span>
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-36 text-center">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-yellow-500">Hello 👋, My Name is Redho Fadillah Adha</h2>
            <p class="text-gray-300 text-lg mt-4">Fullstack Web Developer & Gamer</p>
            <p class="text-gray-400 mt-2">Butuh Website yang Profesional? <span class="text-yellow-500 font-semibold">Hubungi Kami Sekarang!</span></p>
            <a href="#contact"
                class="mt-6 inline-block bg-yellow-500 text-black font-semibold py-3 px-8 rounded-full hover:bg-yellow-600 transition duration-100">Contact Me!!</a>
            <a href="{{ route('front.cv') }}"
                class="mt-6 inline-block bg-yellow-500 text-black font-semibold py-3 px-8 rounded-full hover:bg-yellow-600 transition duration-100" target="_blank">download CV</a>
        </div>
    </section>

    <!-- About Section -->
    <!-- About Section with Contact Buttons -->
    <section id="about" class="pt-24 pb-10">
        <div class="container mx-auto text-center">
            <h3 class="text-3xl font-bold text-yellow-500">About Me</h3>
            <p class="text-gray-300 mt-4">Hai, saya seorang web developer yang lulus dari Teknik Informatika. Saya selalu memiliki ketertarikan dalam dunia pemrograman, tetapi pengembangan web adalah bidang yang benar-benar saya minati. Saya senang membangun website yang bersih dan fungsional, serta menikmati proses belajar terus-menerus seiring dengan perkembangan teknologi web. Baik itu front-end maupun back-end, saya selalu antusias menghadapi tantangan baru dan menciptakan sesuatu yang keren!</p>

            <!-- Contact Buttons -->
            <div class="flex justify-center mt-6 space-x-4" id="contact">
                <!-- Instagram -->
                <a href="https://www.instagram.com/refaad.jpg/" target="_blank"
                    class="w-10 h-10 flex justify-center items-center bg-gray-700 hover:bg-yellow-500 rounded-full">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2.163c3.204 0 3.584.012 4.849.07 1.17.057 1.798.24 2.22.412.424.174.726.384 1.046.704.32.32.53.623.704 1.046.172.422.355 1.05.412 2.22.058 1.265.07 1.645.07 4.849s-.012 3.584-.07 4.849c-.057 1.17-.24 1.798-.412 2.22-.174.424-.384.726-.704 1.046-.32.32-.623.53-1.046.704-.422.172-1.05.355-2.22.412-1.265.058-1.645.07-4.849.07s-3.584-.012-4.849-.07c-1.17-.057-1.798-.24-2.22-.412-.424-.174-.726-.384-1.046-.704-.32-.32-.53-.623-.704-1.046-.172-.422-.355-1.05-.412-2.22-.058-1.265-.07-1.645-.07-4.849s.012-3.584.07-4.849c.057-1.17.24-1.798.412-2.22.174-.424.384-.726.704-1.046.32-.32.623-.53 1.046-.704.422-.172 1.05-.355 2.22-.412 1.265-.058 1.645-.07 4.849-.07m0-2.163c-3.26 0-3.67.013-4.947.072-1.277.06-2.149.26-2.914.557-.766.297-1.435.708-2.103 1.376-.668.668-1.08 1.337-1.377 2.103-.297.765-.498 1.637-.558 2.914-.058 1.277-.071 1.687-.071 4.947s.013 3.67.071 4.947c.06 1.277.261 2.149.558 2.914.297.766.708 1.435 1.376 2.103.668.668 1.337 1.08 2.103 1.377.765.297 1.637.498 2.914.558 1.277.058 1.687.071 4.947.071s3.67-.013 4.947-.071c1.277-.06 2.149-.261 2.914-.558.766-.297 1.435-.708 2.103-1.376.668-.668 1.08-1.337 1.377-2.103.297-.765.498-1.637.558-2.914.058-1.277.071-1.687.071-4.947s-.013-3.67-.071-4.947c-.06-1.277-.261-2.149-.558-2.914-.297-.765-.708-1.435-1.376-2.103-.668-.668-1.337-1.08-2.103-1.377-.765-.297-1.637-.498-2.914-.558-1.277-.058-1.687-.071-4.947-.071zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a3.999 3.999 0 110-7.998 3.999 3.999 0 010 7.998zm7.846-10.405a1.44 1.44 0 100-2.88 1.44 1.44 0 000 2.88z" />
                    </svg>
                </a>
                <!-- Github -->
                <a href="https://github.com/refaadstack" target="_blank"
                    class="w-10 h-10 flex justify-center items-center bg-gray-700 hover:bg-yellow-500 rounded-full">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12z" />
                    </svg>
                </a>
                <!-- Twitter -->
                <a href="https://twitter.com/refaad28" target="_blank"
                    class="w-10 h-10 flex justify-center items-center bg-gray-700 hover:bg-yellow-500 rounded-full">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.954 4.569a10 10 0 01-2.825.775 4.994 4.994 0 002.163-2.723 10.126 10.126 0 01-3.127 1.184 4.97 4.97 0 00-8.482 4.523A14.077 14.077 0 011.64 3.161a4.942 4.942 0 001.524 6.574 4.928 4.928 0 01-2.253-.621v.062a4.936 4.936 0 003.966 4.827 4.996 4.996 0 01-2.224.084 4.942 4.942 0 004.617 3.417 9.948 9.948 0 01-6.102 2.104c-.396 0-.787-.023-1.17-.067A14.055 14.055 0 007.548 21c9.142 0 14.307-7.721 14.307-14.426 0-.219 0-.438-.015-.656a10.007 10.007 0 002.455-2.549l-.034-.011z" />
                    </svg>
                </a>
                <!-- WhatsApp -->
                <a href="https://wa.me/6282374338273" target="_blank"
                    class="w-10 h-10 flex justify-center items-center bg-gray-700 hover:bg-yellow-500 rounded-full">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 308 308" xmlns="http://www.w3.org/2000/svg">
                        <path d="M156.73.003C69.785.003 0 69.79 0 156.732c0 27.946 7.47 55.126 21.67 79.13L.474 306.042c-.336 1.012-.087 2.13.656 2.883.539.54 1.265.842 2.01.842.26 0 .522-.042.778-.13l77.897-24.764a155.393 155.393 0 0075.004 19.335c86.948 0 156.735-69.787 156.735-156.73C313.463 69.79 243.676.003 156.73.003zm-.003 293.717c-23.146 0-45.51-6.574-64.73-19.072-.646-.424-1.393-.64-2.142-.64-.397 0-.794.061-1.175.19l-39.07 12.413 12.614-37.209c.408-1.2.204-2.528-.553-3.556-14.665-20.048-22.398-43.788-22.398-68.486 0-63.8 51.913-115.73 115.735-115.73 63.826 0 115.73 51.93 115.73 115.73-.001 63.825-51.905 115.73-115.73 115.73zM227.91 176.98c-.6-.288-23.054-11.346-27.04-12.783-1.632-.585-3.377-1.156-5.234-1.156-3.035 0-5.581 1.511-7.563 4.478-2.243 3.333-9.032 11.27-11.132 13.643-.275.311-.648.686-.873.686-.199 0-3.676-1.43-4.726-1.888-24.092-10.462-42.376-35.623-44.875-39.868-.359-.61-.374-.887-.374-.887.086-.322.898-1.134 1.315-1.553 1.222-1.21 2.548-2.805 3.83-4.349.607-.73 1.215-1.462 1.811-2.152 1.862-2.163 2.689-3.843 3.648-5.79l.503-1.01c2.343-4.658.34-8.588-.306-9.856-.531-1.062-10.014-23.944-11.019-26.347-2.424-5.803-5.628-8.504-10.08-8.504-2.11.088-13.597 1.6-18.676 4.801-5.384 3.396-14.494 14.217-14.494 33.251 0 17.128 10.872 33.3 15.537 39.452.117.154.329.469.639.922 17.875 26.103 40.154 45.445 62.744 54.468 21.745 8.688 32.042 9.691 37.896 9.691 2.46 0 4.429-.192 6.167-.364l1.102-.106c7.51-.666 24.019-9.22 27.774-19.656 2.958-8.219 3.738-17.198 1.769-20.457-1.61-2.776-3.933-3.891-6.874-5.303z" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="bg-gray-800 py-10">
        <div class="container mx-auto text-center">
            <h3 class="text-3xl font-bold text-yellow-500 mb-12">Portfolio</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    @forelse ($portfolios as $item)
                    <div class="bg-gray-700 rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ Storage::url($item->thumbnail) }}" alt="SMKN SPP Project" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h4 class="text-lg font-bold text-white">{{ $item->title }}</h4>
                            <p class="text-gray-400 mt-2">{!! Str::limit($item->description, 89, '')!!}</p>

                            {{-- button card --}}
                            <a href="{{ route('front.detail',$item->slug) }}" class="mt-6 inline-block bg-yellow-500 text-black font-semibold py-3 px-8 rounded-full hover:bg-yellow-600 transition duration-100">details</a>
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
        <section id="blog" class="bg-gray-800 py-10">
            <div class="container mx-auto">
                <h3 class="text-3xl font-bold text-yellow-500 mb-12">My Blog</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Card 1 -->
                        @forelse ($blogs as $item)
                        <div class="bg-gray-700 rounded-lg overflow-hidden shadow-lg">
                            {{-- <img src="{{ Storage::url($item->thumbnail) }}" alt="SMKN SPP Project" class="w-full h-48 object-cover"> --}}
                            <div class="p-6">
                                <h4 class="text-lg font-bold text-white">{{ $item->title }}</h4>
                                <p class="text-gray-400 mt-2">{!! Str::limit($item->description, 89, '')!!}</p>
    
                                {{-- button card --}}
                                <a href="{{ route('front.blogs',$item->slug) }}" class="mt-6 inline-block bg-yellow-500 text-black font-semibold py-3 px-8 rounded-full hover:bg-yellow-600 transition duration-100">read more..</a>
                                {{-- end button --}}
                            </div>
                        </div>
                            
                        @empty
                        <div class="item-center grid grid-cols-1">
                            <p>Belum ada blog sayangku</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </section>

    <!-- Footer -->
    <footer class="bg-gray-800 py-6 text-center">
        <p class="text-gray-400">&copy; 2024 Redho Fadillah Adha. All rights reserved.</p>
    </footer>

</body>

</html>
