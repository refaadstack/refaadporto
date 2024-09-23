@extends('front.master')
@section('title','Refaadstack |'. $blog->title)
@section('content')
    <!-- Blog Detail -->
<main class="flex-grow container mx-auto mt-9 mb-9">
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
</main>
@endsection

@push('link')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
@endpush
@push('script')
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
@endpush
