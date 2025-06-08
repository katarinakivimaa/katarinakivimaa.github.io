@extends('partials.layout')
@section('content')
    <div class="w-full h-fit ">
        <div class="absolute w-full top-auto bg-cover bg-primary h-full brightness-40"></div>

        <div class="relative z-10 h-full pt-32 mx-32 text-white text-center font-primary">
            <h3 class="text-primary text-2xl">Check out our merch</h3>
            <h1 class="text-6xl mb-10">Our most popular</h1>

            <form method="GET" action="{{ route('shop') }}" class="flex justify-center gap-4 mb-16 flex-wrap">
                <select name="category" class="text-black p-2 rounded w-48">
                    <option value="">All Categories</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>

                <input type="number" name="min_price" placeholder="Min Price" value="{{ request('min_price') }}"
                       class="text-black p-2 rounded w-32">
                <input type="number" name="max_price" placeholder="Max Price" value="{{ request('max_price') }}"
                       class="text-black p-2 rounded w-32">

                <button type="submit"
                        class="bg-primary text-white px-6 py-2 rounded-xl border-2 border-primary hover:bg-white hover:text-primary transition">
                    Filter
                </button>
            </form>

            <div class="grid grid-cols-4 gap-16">
                @forelse ($products as $product)
                    <div class="bg-black rounded-xl overflow-hidden">
                        <div class="h-96">
                            <img class="object-cover h-inherit w-inherit"
                                 src="{{ Storage::disk('public')->url($product->image[0]) }}">
                        </div>
                        <div class="p-4">
                            <h2 class="text-3xl">{{ $product->name }}</h2>
                            <h2 class="text-2xl text-primary">€{{ $product->price }}</h2>
                            <a href="{{ route('product', ['product' => $product]) }}"
                               class="text-2xl w-48 border-2 border-white rounded-xl py-2 px-8 hover:bg-white hover:text-primary">
                                Add to cart
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="text-2xl col-span-4">No products found for the selected filters.</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
