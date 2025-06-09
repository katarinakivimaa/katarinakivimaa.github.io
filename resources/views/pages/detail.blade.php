@extends('partials.layout')
@section('content')
<div class="w-64 min-h-screen flex justify-center items-center px-4 py-20">
    <div style="width: 50vw;" class="rounded-lg w-full bg-primary text-white rounded-2xl flex shadow-xl overflow-hidden font-primary">
        
        <div class="h-24 w-full ">
            <img class="object-cover w-full h-full"
                src="{{ Storage::disk('public')->url($product->image[0]) }}"
                alt="{{ $product->name }}">
        </div>

        <div class="p-8 space-y-4">
            <h2 class="text-4xl font-semibold text-white">{{ $product->name }}</h2>
            <h3 class="text-2xl text-white">€{{ number_format($product->price, 2) }}</h3>

            <p class="text-s text-gray-200"><strong>Description:</strong> {{ $product->description }}</p>
            <p class="text-s text-gray-200"><strong>Material:</strong> {{ $product->material }}</p>
            <p class="text-s text-gray-200"><strong>Size:</strong> {{ ucfirst($product->size) }}</p>
            <p class="text-s text-gray-200"><strong>Color:</strong> {{ ucfirst($product->color) }}</p>
            
            @if ($product->category)
                <p class="text-s text-gray-200"><strong>Category:</strong> {{ $product->category->name }}</p>
            @endif

            <div class="pt-4">
                <a href="{{ route('product', ['product' => $product]) }}"
                    class="inline-block w-full text-center text-xl border-2 border-white rounded-xl py-3 px-8 hover:bg-white hover:text-primary transition">
                    Add to cart
                </a>
            </div>
        </div>
    </div>
</div>
@endsection