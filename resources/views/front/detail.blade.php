@extends('front.master')
@section('title','Refaadstack | '. $portfolios->title)
@section('content')
    <!-- portfolios Detail -->
<main class="flex-grow container mx-auto mt-9 mb-9">
    <section class="pt-16 mb-10">
        <div class="container mx-auto mt-10">
            <div class="bg-gray-500 p-8 rounded-lg">
                <h2 class="text-4xl font-bold text-secondary fade-in">{{ $portfolios->title }}</h2>
                <p class="text-gray-300 mt-4 fade-in">{{ $portfolios->created_at->format('d M Y') }}</p>
                <!-- Photo Galleries Section -->
                <!-- Main Image -->
                <div class="gallery-top fade-in">
                    @if($pict && $pict->url)
                        <img id="mainImage" src="{{ Storage::url($pict->url) }}" alt="{{ $portfolios->slug }}" class="w-full h-500 object-cover shadow-lg mt-10 rounded-lg">
                    @elseif($portfolios->thumbnail)
                        <img id="mainImage" src="{{ Storage::url($portfolios->thumbnail) }}" alt="{{ $portfolios->slug }}" class="w-full h-[auto] object-cover shadow-lg mt-10">
                    @else
                        <div id="mainImage" class="w-full h-64 bg-gray-300 flex items-center justify-center text-gray-500 mt-10">
                            No image available
                        </div>
                    @endif
                </div>
                
                <!-- Thumbnails Section -->
                <div id="thumbnailsContainer" class="gallery-thumbs mt-6 fade-in flex flex-wrap justify-center gap-4">
                    @forelse($portfolios->photoGalleries as $photo)
                        <img src="{{ Storage::url($photo->url) }}" alt="{{ $portfolios->slug }}" class="thumbnail w-12 h-12 object-cover rounded-full cursor-pointer border-2 border-transparent hover:border-yellow-500 transition-all duration-300 fade-in" data-id="{{ $photo->id }}">
                    @empty
                        <img src="{{ Storage::url($portfolios->thumbnail) }}" alt="{{ $portfolios->slug }}" class="thumbnail w-12 h-12 object-cover rounded-full cursor-pointer border-2 border-transparent hover:border-yellow-500 transition-all duration-300 fade-in"">
                        {{-- <p class="text-center text-gray-300">No additional images available.</p> --}}
                    @endforelse
                </div>
            </div>
            <div class="mt-10">
                <article class="prose prose-lg prose-yellow max-w-none text-gray-800 bg-gray-400 rounded-lg p-6 fade-in">
                    {!! $portfolios->description !!}
                </article>
            </div>
        </div>
        <!-- portfolios Content -->
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
        const thumbnails = document.querySelectorAll('.thumbnail');
        const mainImage = document.getElementById('mainImage');
        const thumbnailsContainer = document.getElementById('thumbnailsContainer');

        // Function to set up thumbnails
        function setupThumbnails() {
            if (thumbnails.length === 0) {
                // If there are no thumbnails, hide the container
                thumbnailsContainer.style.display = 'none';
            } else {
                // Show the container and ensure it's using flexbox
                thumbnailsContainer.style.display = 'flex';
            }

            // Add click event to each thumbnail
            thumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', function() {
                    // Remove active class from all thumbnails
                    thumbnails.forEach(t => t.classList.remove('border-secondary'));
                    // Add active class to clicked thumbnail
                    this.classList.add('border-secondary');

                    if (mainImage.tagName.toLowerCase() === 'img') {
                        mainImage.src = this.src;
                    } else {
                        // If mainImage is not an img tag, replace it with an img
                        const newImg = document.createElement('img');
                        newImg.id = 'mainImage';
                        newImg.src = this.src;
                        newImg.alt = this.alt;
                        newImg.className = 'w-full h-[auto] object-cover shadow-lg mt-10';
                        mainImage.parentNode.replaceChild(newImg, mainImage);
                        mainImage = newImg;
                    }
                });
            });

            // Set the first thumbnail as active by default
            if (thumbnails.length > 0) {
                thumbnails[0].classList.add('border-secondary');
            }
        }

        // Call the setup function
        setupThumbnails();
    });
</script>
@endpush


