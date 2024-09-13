<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV-Redho-Fadillah-Adha</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            max-width: 800px;
            position: relative;
        }

        .left-side {
            width: 30%;
            background-color: #dfd7d3;
            box-sizing: border-box;
            padding: 10px;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            height: 100%;
            page-break-inside: avoid;
        }

        .right-side {
            width: 70%;
            margin-left: 33%;
            /* background-color: #dfd7d3; */
            box-sizing: border-box;
            /* padding: 10px; */
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            height: 100%;
            page-break-inside: avoid;
        }

        h1 {
            color: #dfd7d3;
        } 

        h2 {
            margin-bottom: 10px;
            margin-right: 20px;
        }

        p {
            margin: 0;
            margin-right: 10px;
            max-width: 100%; /* Ensures paragraph does not exceed container width */
            word-wrap: break-word; /* Breaks long words */
            overflow-wrap: break-word; /* Ensures proper text wrapping */
        }

        ul {
            /* list-style: none; */
            padding: 0;
            margin-left: 20px;
            margin-top: 0;
        }

        li {
        }

        .chain-section {
            margin-bottom: 2rem;
            position: relative;
            padding-left: 30px;
        }

        @page {
            margin: 20px;
        }

        @media print {
            .left-side, .right-side {
                float: none;
                width: 100%;
            }

            .container {
                page-break-inside: avoid;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left-side border-left">
            <h2>Contact Information</h2>
            <p>{{ $pdata->email }}</p>
            <p>{{ $pdata->phone }}</p>
            <p>{{ $pdata->website }}</p>

            <h2>Skills</h2>
            <ul>
                <li>Laravel</li>
                <li>MySQL</li>
                <li>Javascript</li>
                <li>Livewire</li>
                <li>React</li>
                <li>PHP</li>
            </ul>

            <h2>Languages</h2>
            <ul>
                <li>Bahasa</li>
                <li>English</li>
            </ul>
        </div>

        <div class="right-side">
            <div class="chain-section">
                <h1>{{ $pdata->first_name }} {{ $pdata->last_name }}</h1>
                <p>Hai, saya seorang web developer yang lulus dari Teknik Informatika. Saya selalu memiliki ketertarikan dalam dunia pemrograman, tetapi pengembangan web adalah bidang yang benar-benar saya minati. Saya senang membangun website yang bersih dan fungsional, serta menikmati proses belajar terus-menerus seiring dengan perkembangan teknologi web. Baik itu front-end maupun back-end, saya selalu antusias menghadapi tantangan baru dan menciptakan sesuatu yang keren!</p>
            </div>

            <div class="chain-section">
                <h2>Experience</h2>
                @forelse ($experience as $item)
                    <p>{{ $item->company }} ({{ $item->start_date }} to {{ $item->end_date }})</p>
                    <p><strong>{{ $item->position }}</strong></p>
                    <ul>
                            @foreach ($item->jobDescriptions as $it)
                                <li>{!! $it->description !!}</li>
                            @endforeach
                    </ul>
                @empty
                    <p>No experiences</p>
                @endforelse
            </div>

            <div class="chain-section">
                <h2>Education</h2>
                <ul>
                    @forelse ($education as $edu)
                        <li>

                            <p>{{ $edu->degree }} ({{ $edu->start_date }} to {{ $edu->end_date }})</p>
                            <p><strong>{{ $edu->institution }}</strong></p>
                        </li>
                    @empty
                        <p>No education</p>
                    @endforelse
                </ul>
            </div>

            <div class="chain-section" style="margin-right: 20px">
                <h2>Projects</h2>
                <ul>
                    @forelse ($portfolios as $item)
                        <li>
                            <p><strong>{{ $item->title }}</strong></p>
                            <p>{!! $item->description !!}</p>
                        </li>
                    @empty
                        <p>No projects</p>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
