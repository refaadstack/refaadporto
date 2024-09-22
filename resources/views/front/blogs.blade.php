@extends('front.master')
@section('title','Refaadstack | Blog')
@section('content')

<main class="flex-grow container mx-auto mt-9 mb-9">
    <section id="blog" class="py-10">
        <div class="container mx-auto text-center ">
            <h3 class="text-3xl font-bold text-secondary-dark mb-12 fade-in">Blogs</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                @forelse ($blog as $item)
                <div class="bg-primary dark:bg-elegant-black text-elegant-black dark:text-primary rounded-lg overflow-hidden shadow-2xl fade-in">
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
            {{ $blog->links('vendor.pagination.simple-tailwind') }}
        </div>
    </section>
</main>
@endsection