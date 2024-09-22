@extends('front.master')
@section('title','Refaadstack | Portfolios')
@section('content')
<main class="flex-grow container mx-auto mt-9 mb-9">
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
                    {{ $portfolios->links('vendor.pagination.simple-tailwind') }}                 
                @empty
                    <div class="item-center grid grid-cols-1">
                        <p>Belum ada portfolio sayangku</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</main>
@endsection