@extends('partials.layout')
@section('content')
<div class="w-full min-h-screen flex justify-center items-center px-4 py-20">
    <div class="max-w-md w-full bg-primary text-white rounded-2xl shadow-2xl overflow-hidden font-primary">
        
        <div class="h-96 w-full">
            <img class="object-cover w-full h-full"
                src="{{ Storage::disk('public')->url($product->image[0]) }}"
                alt="{{ $product->name }}">
        </div>

        <div class="p-6 space-y-4">
            <h2 class="text-4xl font-semibold text-white">{{ $product->name }}</h2>
            <h3 class="text-2xl text-white">€{{ number_format($product->price, 2) }}</h3>

            <p class="text-sm text-gray-300"><strong>Description:</strong> {{ $product->description }}</p>
            <p class="text-sm text-gray-300"><strong>Material:</strong> {{ $product->material }}</p>
            <p class="text-sm text-gray-300"><strong>Size:</strong> {{ ucfirst($product->size) }}</p>
            <p class="text-sm text-gray-300"><strong>Color:</strong> {{ ucfirst($product->color) }}</p>
            
            @if ($product->category)
                <p class="text-sm text-gray-300"><strong>Category:</strong> {{ $product->category->name }}</p>
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
