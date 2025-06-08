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

<div class="w-full">
    <div class="absolute w-full top-auto my-16"></div>
    <div class="relative z-10 mx-32 text-white flex items-center gap-6">
        <h3 class="text-black text-xl">A flash to the past</h3>
        <h1 class="text-6xl text-primary">Support a historical monument</h1>
        <div class="inline-flex justify-center w-24 items-center gap-16">
            <div class="inline-flex w-12 flex-col justify-start items-start gap-3.5">
                <img style="width: auto; height: 360px; border-top-right-radius: 160px; border-bottom-left-radius: 160px" src="/lydia.jpg" />
                <div class="self-stretch justify-start items-start gap-14">
                    <div class="w-7 h-5 justify-center text-black text-xl font-medium ">1631</div>
                    <div class="w-52 h-5 text-right justify-center text-black text-m ">Rembrandt Harmensz. van Rijn</div> <br>
                </div>
                <div class="w-64 h-5 justify-center text-black text-L font-bold ">Old Man with a Gold Chain</div>
                <div class="w-64 justify-center text-black text-m">This evocative character study is an early example of a type of subject that preoccupied the great Dutch master Rembrandt van Rijn throughout his long career. Although his large output included landscapes, genre paintings, and the occasional still.</div>
            </div>
            <div class="inline-flex w-12 flex-col justify-start items-start gap-3.5">
                <img style="width: auto; height: 360px; border-top-left-radius: 160px; border-top-right-radius: 160px"" src=" /pats.jpg" />
                <div class="self-stretch justify-start items-start gap-14">
                    <div class="w-7 h-5 justify-center text-black text-xl font-medium ">1631</div>
                    <div class="w-52 h-5 text-right justify-center text-black text-m ">Rembrandt Harmensz. van Rijn</div> <br>
                </div>
                <div class="w-64 h-5 justify-center text-black text-L font-bold ">Old Man with a Gold Chain</div>
                <div class="w-64 justify-center text-black text-m">This evocative character study is an early example of a type of subject that preoccupied the great Dutch master Rembrandt van Rijn throughout his long career. Although his large output included landscapes, genre paintings, and the occasional still.</div>
            </div>
            <div class="inline-flex w-12 flex-col justify-start items-start gap-3.5">
                <img style="width: auto; height: 360px; border-top-left-radius: 160px; border-bottom-right-radius: 160px"" src=" /download" />
                <div class="self-stretch justify-start items-start gap-14">
                    <div class="w-7 h-5 justify-center text-black text-xl font-medium ">1631</div>
                    <div class="w-52 h-5 text-right justify-center text-black text-m ">Rembrandt Harmensz. van Rijn</div> <br>
                </div>
                <div class="w-64 h-5 justify-center text-black text-L font-bold ">Old Man with a Gold Chain</div>
                <div class="w-64 justify-center text-black text-m">This evocative character study is an early example of a type of subject that preoccupied the great Dutch master Rembrandt van Rijn throughout his long career. Although his large output included landscapes, genre paintings, and the occasional still.</div>
            </div>
        </div>
    </div>

</div>
</div>


<div class="w-full justify-center items-center">
    <div class="w-96 h-36 relative">
        <div class="w-72 h-6 left-0 top-0 absolute justify-center text-black text-3xl font-bold font-['Futura']">American Gothic</div>
        <div class="w-96 h-20 left-0 top-[61px] absolute justify-center text-black text-xs font-medium font-['Futura']">This image of a contemporary water pump would have been a perfect fit for Lewis’s novel about life in a midwestern town. The drawing was given to the Art Institute by Carter Manny, Jr., who received it as a high school graduation gift from the artist in 1937.</div>
    </div>
    <div class="w-96 h-36 relative">
        <div class="w-52 h-6 left-0 top-0 absolute justify-center text-black text-3xl font-bold font-['Futura']">Grant Wood</div>
        <div class="w-96 h-20 left-0 top-[61px] absolute justify-center text-black text-xs font-medium font-['Futura']">Grant Wood, famous for his representations of the Midwest—of which the Art Institute’s American Gothic (1930.934) is his most recognizable example—intended The Pump to be an illustration for Sinclair Lewis’s novel Main Street (1920). </div>
    </div>
    <div class="w-[662px] h-44 relative">
        <div class="left-0 top-0 absolute justify-center text-black text-9xl font-normal font-['KoHo'] [text-shadow:_0px_4px_4px_rgb(0_0_0_/_0.25)]">THE AQ ART</div>
    </div>

</div>


<div class="w-full h-fit justify-center items-center">
    <div class="relative space-y-4 z-10 h-full pt-32 py-16 mx-32 text-white text-center font-primary">
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