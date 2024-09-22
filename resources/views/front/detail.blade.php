@extends('front.master')
@section('title', 'Refaadstack | ' . $portfolios->title)
@section('content')

<!-- Detail Project -->
<section class="pt-16 mt-10 mb-10">
    <div class="container mx-auto">
        <!-- Image Section -->
        <h2 class="text-4xl font-bold text-secondary-dark fade-in">{{ $portfolios->title }}</h2>
        <p class="text-gray-600 dark:text-gray-200 mt-4 fade-in">{{ $portfolios->created_at->format('d M Y') }}</p>
        <div class="flex items-center justify-center fade-in">
            <img src="{{ Storage::url($portfolios->thumbnail) }}" alt="Daisee Crafting Website" class="justify-center mt-10">
        </div>
        <!-- Project Info -->
        <div class="mt-8 fade-in">
            <div class="prose prose-lg prose-yellow max-w-none text-gray-800 bg-gray-400 rounded-lg p-6">
                {!! $portfolios->description !!}
            </div>
        </div>
    </div>
    </section>
@endsection


