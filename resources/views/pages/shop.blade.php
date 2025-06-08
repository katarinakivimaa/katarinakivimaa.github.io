@extends('partials.layout')
@section('content')
<div class="w-full h-fit py-16  mt-40">
    <div class="absolute pt-32 py-16 w-full gap-32 top-auto bg-cover h-full brightness-40"></div>

    <div class="relative z-30 h-full pt-32 mt-40 mx-32 text-primary text-center font-primary">
        <h3 class="text-black text-2xl">A flash to the past</h3>
        <h1 class="text-6xl mb-10">Support a historical monument</h1>

        <form method="GET" action="{{ route('shop') }}" class="flex py-16 justify-center gap-4 mb-8 flex-wrap">
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
            <div class="bg-primary rounded-xl shadow-xl text-white overflow-hidden">
                <div class="h-96">
                    <img class="object-cover h-inherit w-inherit"
                        src="{{ isset($product->image[0]) ? Storage::disk('public')->url($product->image[0]) : asset('images/default.png') }}">
                </div>
                <div class="p-4 space-y-4 pt-4">
                    <h2 class="text-3xl">{{$product->name}}</h2>
                    <h2 class="text-2xl">€{{$product->price}}</h2>
                    <a href="{{route('product', ['product' => $product])}}" class="inline-block w-full text-center text-xl border-2 border-white rounded-xl py-3 px-8 hover:bg-white hover:text-primary transition">Add to cart</a>
                </div>
            </div>
            @empty
            <p class="text-2xl col-span-4">No products found for the selected filters.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection