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
    <div class="absolute w-full top-auto h-full"></div>
    <div class="relative z-10 h-full mx-24 text-white flex items-center gap-6">
        <div class="inline-flex justify-center items-center gap-12">
  <div class="inline-flex flex-col justify-start items-start gap-3.5">
    <img class="w-72 h-96 rounded-tr-full rounded-bl-full" src="/public/red_Kiiu_tote_bag_Mockup_web.png" />
    <div class="self-stretch inline-flex justify-start items-start gap-14">
      <div class="w-7 h-5 justify-center text-black text-xs font-medium font-['Futura']">1631</div>
      <div class="w-52 h-5 text-right justify-center text-black text-xs font-medium font-['Futura']">Rembrandt Harmensz. van Rijn</div>
    </div>
    <div class="w-64 h-5 justify-center text-black text-xs font-bold font-['Futura']">Old Man with a Gold Chain</div>
    <div class="w-64 justify-center text-black text-xs font-medium font-['Futura']">This evocative character study is an early example of a type of subject that preoccupied the great Dutch master Rembrandt van Rijn throughout his long career. Although his large output included landscapes, genre paintings, and the occasional still life.</div>
  </div>
  <div class="inline-flex flex-col justify-start items-start gap-3.5">
    <img class="w-72 h-96 rounded-tl-full rounded-tr-full" src="/public/red_Kiiu_tote_bag_Mockup_web.png" />
    <div class="self-stretch h-5 inline-flex justify-start items-start gap-20">
      <div class="w-8 h-5 justify-center text-black text-xs font-medium font-['Futura']">1887</div>
      <div class="flex-1 h-5 text-right justify-center text-black text-xs font-medium font-['Futura']">Vincent van Gogh</div>
    </div>
    <div class="w-64 h-5 justify-center text-black text-xs font-bold font-['Futura']">Self-portrait</div>
    <div class="w-64 justify-center text-black text-xs font-medium font-['Futura']">In 1886 Vincent van Gogh left his native Holland and settled in Paris, where his beloved brother Theo was a dealer in paintings. Van Gogh created at least twenty-four self-portraits during his two-year stay in the energetic French capital.</div>
  </div>
  <div class="inline-flex flex-col justify-start items-start gap-3.5">
    <img class="w-72 h-96 rounded-tl-full rounded-br-full" src="/public/red_Kiiu_tote_bag_Mockup_web.png" />
    <div class="self-stretch h-5 inline-flex justify-start items-start gap-14">
      <div class="w-8 h-5 justify-center text-black text-xs font-medium font-['Futura']">1881</div>
      <div class="flex-1 h-5 text-right justify-center text-black text-xs font-medium font-['Futura']">Pierre-Auguste Renoir</div>
    </div>
    <div class="w-64 h-5 justify-center text-black text-xs font-bold font-['Futura']">Two Sisters (On the Terrace)</div>
    <div class="w-64 justify-center text-black text-xs font-medium font-['Futura']">“He loves everything that is joyous, brilliant, and consoling in life,” an anonymous interviewer once wrote about Pierre-Auguste Renoir. This may explain why Two Sisters (On the Terrace) is one of the most popular paintings in the Art Institute.</div>
  </div>
</div>
        
    </div>
</div>

<div class="w-full h-fit justify-center items-center">
    <div class="relative space-y-4 z-10 h-full pt-32 mx-32 text-white text-center font-primary">
        <h3 class="text-black text-2xl">A flash to the past</h3>
        <h1 class="text-6xl text-primary">Support a historical monument</h1>
        <div class="grid grid-cols-4 gap-16">
            @foreach($products as $product)
            <div class="bg-primary rounded-xl overflow-hidden">
                <div class="h-96">
                    <img class="object-cover h-inherit w-inherit"
                        src="{{ isset($product->image[0]) ? Storage::disk('public')->url($product->image[0]) : asset('images/default.png') }}">
                </div>
                <div class="p-4 text-white space-y-4 pt-4">
                    <h2 class="text-3xl">{{$product->name}}</h2>
                    <h2 class="text-2xl">€{{$product->price}}</h2>
                    <a href="{{route('product', ['product' => $product])}}" class="inline-block w-full text-center text-xl border-2 border-white rounded-xl py-3 px-8 hover:bg-white hover:text-primary transition">Add to cart</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection