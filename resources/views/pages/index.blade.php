@extends('partials.layout')
@section('content')
<div class="w-full h-screen">
    <div class="absolute top-auto w-full h-screen bg-primary"></div>
    <div class="relative z-10 text-white pt-96 ml-24">
        <div class="text-3xl font-primary">
            <p class="mb-6">Come and discover
                <span class="uppercase text-primary">Kiiu Tuulik</span>
            </p>
            <p class="font-primary text-6xl capitalize">Discover history</p>
            <p class="font-primary text-6xl capitalize mb-12">
                Through
                <span class="text-white">Wonderful Discovery</span>.
            </p>
        </div>

        <div class="flex z-10 font-primary text-2xl space-x-6">
                <button
                    class="bg-primary hover:bg-white text-white hover:text-primary border-2 border-primary transition px-8 py-3 rounded-xl text-lg font-semibold">
                    Donate
                </button>
                <button
                    class="bg-primary hover:bg-white text-white hover:text-primary border-2 border-primary transition px-8 py-3 rounded-xl text-lg font-semibold">
                    Shop
                </button>
        </div>
    </div>
</div>

<div class="w-full h-screen">
    <div class="absolute w-full top-auto bg-secondary h-full brightness-40"></div>
    <div class="relative z-10 h-full mx-24 text-white flex items-center gap-6">
        
    </div>
</div>

<div class="w-full h-fit ">
    <div class="absolute w-full top-auto bg-cover bg-primary h-full brightness-40"></div>

    <div class="relative z-10 h-full pt-32 mx-32 text-white text-center font-primary">
        <h3 class="text-primary text-2xl">Check out our merch</h3>
        <h1 class="text-6xl">Our most popular</h1>
        <div class="grid grid-cols-4 gap-16">
            @foreach($products as $product)
            <div class="bg-black rounded-xl overflow-hidden">
                <div class="h-96">
                    <img class="object-cover h-inherit w-inherit"
                        src="{{ isset($product->image[0]) ? Storage::disk('public')->url($product->image[0]) : asset('images/default.png') }}">
                </div>
                <div class="p-4">
                    <h2 class="text-3xl">{{$product->name}}</h2>
                    <h2 class="text-2xl text-primary">€{{$product->price}}</h2>
                    <a href="{{route('product', ['product' => $product])}}" class="text-2xl w-48 border-2 border-white rounded-xl py-2 px-8 hover:bg-white hover:text-primary">Add to cart</a>
                </div>
            </div>
            @endforeach
            {{-- <div class="bg-black rounded-xl overflow-hidden">
                    <div class="h-96">
                        <img class="object-cover h-inherit w-inherit"  src="/hoodie.webp">
                    </div>

                    <div class="p-4">
                        <h2 class="text-3xl">Undead seekers hoodie</h2>
                        <h2 class="text-2xl text-primary">$35.99</h2>
                        <button class="text-2xl w-48 border-2 border-white rounded-xl py-2 px-8 hover:bg-white hover:text-primary">Add to cart</button>
                    </div>
                </div>
                <div class="bg-black rounded-xl overflow-hidden">
                    <div class="h-96">
                        <img class="object-cover h-inherit w-inherit"  src="/banner.webp">
                    </div>

                    <div class="p-4">
                        <h2 class="text-3xl">Undead seekers big-banner</h2>
                        <h2 class="text-2xl text-primary">$35.99</h2>
                        <button class="text-2xl w-48 border-2 border-white rounded-xl py-2 px-8 hover:bg-white hover:text-primary">Add to cart</button>
                    </div>
                </div>
                <div class="bg-black rounded-xl overflow-hidden">
                    <div class="h-96">
                        <img class="object-cover h-inherit w-inherit"  src="/stickers.webp">
                    </div>

                    <div class="p-4">
                        <h2 class="text-3xl">Undead seekers stickers combo</h2>
                        <h2 class="text-2xl text-primary">$35.99</h2>
                        <button class="text-2xl w-48 border-2 border-white rounded-xl py-2 px-8 hover:bg-white hover:text-primary">Add to cart</button>
                    </div>
                </div> --}}
        </div>
    </div>
</div>
@endsection