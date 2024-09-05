<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional CV</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Set up for A4 paper size */
        @page {
            size: A4;
            margin: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        /* Custom primary color */
        .bg-primary {
            background-color: #dfd7d3;
        }

        .text-primary {
            color: #dfd7d3;
        }

        /* Dark text for left side */
        .text-dark {
            color: #2c3e50;
        }

        /* Border around left side */
        .border-left {
            border: 2px solid #333;
            padding: 1rem;
        }

        /* Custom styles for right side sections */
        .chain-section {
            position: relative;
            padding-left: 40px;
            margin-bottom: 2rem;
        }

        .chain-section::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background-color: #333;
            border-radius: 5px;
        }

        .chain-section::after {
            content: '';
            position: absolute;
            left: -10px;
            top: 15px;
            width: 20px;
            height: 20px;
            background-color: #dfd7d3;
            border-radius: 50%;
            border: 2px solid #333;
        }

        /* Adjust for printing */
        @media print {
            body {
                background-color: white;
            }
        }
    </style>
    <!-- Add FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="font-custom">
    <div class="max-w-3xl mx-auto bg-white shadow-lg p-10 flex mt-10">
        <!-- Left Side -->
        <div class="w-1/3 bg-primary text-dark p-2 border-left">
            <!-- Profile Picture -->
            {{-- <div class="mb-8 text-center">
                <img src="profile.jpg" alt="Profile Picture" class="rounded-full w-32 h-32 mx-auto">
            </div> --}}
            <!-- Contact Information -->
            <div class="mb-8">
                <h2 class="text-xl font-bold mb-4 flex items-center">
                    <i class="fas fa-envelope mr-2"></i> Contact Information
                </h2>
                <ul>
                    <li class="mb-2 flex items-center">
                        <i class="fas fa-envelope mr-2"></i>{{ $pdata->email }}
                    </li>
                    <li class="mb-2 flex items-center">
                        <i class="fas fa-phone mr-2"></i>{{ $pdata->phone }}
                    </li>
                    <li class="mb-2 flex items-center">
                        <i class="fas fa-globe mr-2"></i>{{ $pdata->website }}
                    </li>
                    {{-- <li class="mb-2 flex items-center">
                        <i class="fas fa-globe mr-2"></i>{{ $pdata->linkedin }}
                    </li> --}}
                </ul>
            </div>
            <!-- Skills -->
            <div class="mb-8">
                <h2 class="text-lg font-bold mb-4 flex items-center">
                    <i class="fas fa-tools mr-2"></i> Skills
                </h2>
                <ul>
                    <li class="mb-2 flex items-center">
                        <i class="fas fa-check mr-2"></i> Laravel
                    </li>
                    <li class="mb-2 flex items-center">
                        <i class="fas fa-check mr-2"></i> MySql
                    </li>
                    <li class="mb-2 flex items-center">
                        <i class="fas fa-check mr-2"></i> Javascript
                    </li>
                    <li class="mb-2 flex items-center">
                        <i class="fas fa-check mr-2"></i> Tailwind CSS
                    </li>
                    <li class="mb-2 flex items-center">
                        <i class="fas fa-check mr-2"></i> Bootstrap CSS
                    </li>
                    <li class="mb-2 flex items-center">
                        <i class="fas fa-check mr-2"></i> Livewire
                    </li>
                </ul>
            </div>
            <!-- Languages -->
            <div class="mb-8">
                <h2 class="text-lg font-bold mb-4 flex items-center">
                    <i class="fas fa-language mr-2"></i> Languages
                </h2>
                <ul>
                    <li class="mb-2 flex items-center">
                        <i class="fas fa-globe mr-2"></i> Bahasa
                    </li>
                    <li class="mb-2 flex items-center">
                        <i class="fas fa-globe mr-2"></i> English
                    </li>
                </ul>
            </div>
            <!-- Hobbies -->
            {{-- <div>
                <h2 class="text-lg font-bold mb-4 flex items-center">
                    <i class="fas fa-heart mr-2"></i> Hobbies
                </h2>
                <ul>
                    <li class="mb-2 flex items-center">
                        <i class="fas fa-star mr-2"></i> Hobby 1
                    </li>
                    <li class="mb-2 flex items-center">
                        <i class="fas fa-star mr-2"></i> Hobby 2
                    </li>
                </ul>
            </div> --}}
        </div>

        <!-- Right Side -->
        <div class="w-2/3 p-8">
            <!-- Summary -->
            <div class="chain-section">
                <h1 class="text-3xl font-bold text-primary mb-4">{{ $pdata->first_name }} {{ $pdata->last_name }}</h1>
                    <p>
                        Hai, saya seorang web developer yang lulus dari Teknik Informatika. Saya selalu memiliki ketertarikan dalam dunia pemrograman, tetapi pengembangan web adalah bidang yang benar-benar saya minati. Saya senang membangun website yang bersih dan fungsional, serta menikmati proses belajar terus-menerus seiring dengan perkembangan teknologi web. Baik itu front-end maupun back-end, saya selalu antusias menghadapi tantangan baru dan menciptakan sesuatu yang keren!
                    </p>
                </div>
            <!-- Experience -->
            @forelse ($experience as $item)
            <div class="chain-section">
                <h2 class="text-2xl font-bold text-primary mb-4">Experience</h2>
                <ul>
                    <li class="mb-4">
                        <h3 class="font-bold">{{ $item->position }}</h3>
                        <p>{{ $item->company }}</p>
                        <p> {{ $item->start_date }}/{{ $item->end_date }}</p>
                        @foreach ($item->jobDescriptions as $it)
                        {!! $it->description !!}
                        
                        @endforeach  <!-- Add more experiences as needed -->
                    </li>
                </ul>
            </div>
            @empty
            @endforelse
            <!-- Education -->
            <div class="chain-section">
                <h2 class="text-2xl font-bold text-primary mb-4">Education</h2>
                <ul>
                    @forelse ($education as $edu )   
                    <li class="mb-4">
                        <h3 class="font-bold">{{ $edu->institution }}</h3>
                        <p>{{ $edu->degree }}</p>
                        <p> {{ $edu->start_date }}/{{ $edu->end_date }}</p>
                        {{ $edu->description }}
                    </li>
                    @empty
                        
                    @endforelse
                </ul>
            </div>
            <!-- Projects -->
            <div class="chain-section">
                <h2 class="text-2xl font-bold text-primary mb-4">Projects</h2>
                <ul>
                    @forelse ($portfolios as $item)
                    <li class="mb-4">
                        <h3 class="font-bold">{{ $item->title }}</h3>
                        {!! $item->description !!}
                    </li>
                    @empty
                        
                    @endforelse
                    <!-- Add more projects as needed -->
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
