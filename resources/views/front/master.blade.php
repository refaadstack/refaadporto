<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="twitter:site" content="@refaad28">
    <meta name="description" content="Perkenalkan nama Saya Redho Fadillah Adha. Saya adalah Fullstack Web developer, Saya juga merupakan seorang lulusan Teknik Informatika yang sangat menyukai dan mendalami bidang website development. ini merupakan beberapa portfolio saya selama berkarir dibidang pemograman web">
    <meta name="keywords" content="Refaadstack, Freelance Programmer, Redho Fadillah Adha, Jasa pembuatan web di jambi, Web Design">
    <meta name="google-site-verification" content="hJ9FmOJNR4HnyOdx2LyMpo2GWauL3417fdofT6rR4Tg" />
    <meta property="og:type" content="article">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:sitename" content="Refaadstack">
    <meta property="og:url" content="https://refaadstack.com">
    <meta property="og:description" content="Perkenalkan nama Saya Redho Fadillah Adha. Saya adalah Fullstack Web developer, Saya juga merupakan seorang lulusan Teknik Informatika yang sangat menyukai dan mendalami bidang website development. ini merupakan beberapa portfolio saya selama berkarir dibidang pemograman web">


    <link rel="icon" type="image/png" href="{{ asset('dist/img/icon.png') }}">
    
    <!-- Untuk mendukung berbagai ukuran dan perangkat -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('dist/img/icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dist/img/icon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dist/img/icon.png') }}">

    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;700&display=swap" rel="stylesheet" />
    @stack('link')
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
    @include('front.navbar')
    @yield('content')
    @include('front.footer')
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
    @stack('script')
</body>
</html>


