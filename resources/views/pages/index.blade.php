@extends('partials.layout')
@section('content')

<div class="w-full h-screen">
    <div style="background-image: url('/kiiu_hero_banner.jpg');" class="absolute top-0 bg-cover bg-center bg-[url('/kiiu_hero_banner.jpg')] w-full h-screen"></div>
    <div class="relative z-10 text-white pt-96 ml-24">
        <div class="text-3xl font-primary">

            <p class="mb-2">Come and discover
                <span class="uppercase font-bold text-primary">Kiiu Tuulik</span>
            </p>
            <p class="font-primary text-6xl capitalize">Discover history</p>
            <p class="font-primary text-6xl capitalize mb-6">
                Through
                <span class="text-primary">Wonderful Discovery</span>.
            </p>
        </div>

        <div class="flex z-10 font-primary text-2xl space-x-6">
            <button
                class="bg-primary hover:bg-white text-white hover:text-primary border-primary transition px-8 py-3 rounded-xl text-lg font-semibold">
                Donate
            </button>
            <button
                class="bg-primary hover:bg-white text-white hover:text-primary border-primary transition px-8 py-3 rounded-xl text-lg font-semibold">
                Shop
            </button>
        </div>
    </div>
</div>

<div class="w-full bg-primary flex justify-center items-center py-10">
    <div class="flex justify-center items-center gap-16 max-w-7xl px-6">
        <div class="flex flex-col justify-center items-center gap-8 max-w-xl text-center">
            <div class="text-white text-8xl font-normal font-['KoHo']">
                History
            </div>
            <div class="flex space-y-4 flex-col gap-10 max-w-xl">
                <div>
                    <h2 class="text-white text-3xl font-bold font-['KoHo'] mb-2">Grant Wood</h2>
                    <p class="text-white text-base font-normal font-['KoHo'] leading-relaxed">
                        Grant Wood, famous for his representations of the Midwest—of which the Art Institute’s American Gothic (1930.934) is his most recognizable example—intended The Pump to be an illustration for Sinclair Lewis’s novel Main Street (1920).
                    </p>
                </div>
                <div>
                    <h2 class="text-white text-3xl font-bold font-['KoHo'] mb-2">American Gothic</h2>
                    <p class="text-white text-base font-normal font-['KoHo'] leading-relaxed">
                        This image of a contemporary water pump would have been a perfect fit for Lewis’s novel about life in a midwestern town. The drawing was given to the Art Institute by Carter Manny, Jr., who received it as a high school graduation gift from the artist in 1937.
                    </p>
                </div>
            </div>
        </div>
        <img
            class="w-96 shadow-xl" style="border-top-left-radius: 200px; border-top-right-radius: 200px"
            src="/kiiu_pilt.jpg" />
    </div>
</div>


<div class="w-full p-16 bg-primary">
    <div class="absolute w-full top-8 mt-8 my-16"></div>
    <div class="relative pt-6 z-10 mx-32 text-white flex items-center gap-6">
        <div class="inline-flex justify-center w-24 items-center gap-16 text-center">
            <div class="inline-flex w-12 flex-col justify-center items-center gap-3.5">
                <img class="shadow-xl" style="width: auto; height: 360px; border-top-right-radius: 160px; border-bottom-left-radius: 160px" src="/lydia.jpg" />
                <div class="self-stretch justify-center items-start gap-14">
                    <div class="w-7 h-5 justify-center text-xl font-medium ">1631</div>
                    <div class="w-52 h-5 text-right justify-center text-m ">Rembrandt Harmensz. van Rijn</div> <br>
                </div>
                <div class="w-64 h-5 justify-center text-xl mb-4  font-bold ">Old Man with a Gold Chain</div>
                <div class="w-64 justify-center text-m">This evocative character study is an early example of a type of subject that preoccupied the great Dutch master Rembrandt van Rijn throughout his long career. Although his large output included landscapes, genre paintings, and the occasional still.</div>
            </div>
            <div class="inline-flex w-12 flex-col justify-start items-center gap-3.5">
                <img class="shadow-xl" style="width: auto; height: 360px; border-top-left-radius: 160px; border-top-right-radius: 160px" src="/pats.jpg" />
                <div class="self-stretch justify-start items-start gap-14">
                    <div class="w-7 h-5 justify-center text-xl font-medium ">1631</div>
                    <div class="w-52 h-5 text-right justify-center text-m ">Rembrandt Harmensz. van Rijn</div> <br>
                </div>
                <div class="w-64 h-5 justify-center mb-4 text-xl font-bold ">Old Man with a Gold Chain</div>
                <div class="w-64 justify-center  text-m">This evocative character study is an early example of a type of subject that preoccupied the great Dutch master Rembrandt van Rijn throughout his long career. Although his large output included landscapes, genre paintings, and the occasional still.</div>
            </div>
            <div class="inline-flex w-12 flex-col justify-start items-center gap-3.5">
                <img class="shadow-xl" style="width: auto; height: 360px; border-top-left-radius: 160px; border-bottom-right-radius: 160px" src="/download" />
                <div class="self-stretch justify-start items-start gap-14">
                    <div class="w-7 h-5 justify-center text-xl font-medium ">1631</div>
                    <div class="w-52 h-5 text-right justify-center text-m ">Rembrandt Harmensz. van Rijn</div> <br>
                </div>
                <div class="w-64 h-5 justify-center mb-4 text-xl font-bold ">Old Man with a Gold Chain</div>
                <div class="w-64 justify-center text-m">This evocative character study is an early example of a type of subject that preoccupied the great Dutch master Rembrandt van Rijn throughout his long career. Although his large output included landscapes, genre paintings, and the occasional still.</div>
            </div>
        </div>
    </div>

</div>


<div class="w-full h-fit  py-16 text-center">
    <h3 class="text-black text-2xl">Events and Activites</h3>
    <h1 class="text-6xl text-primary">Show up for Education</h1>
    <div class="flex py-6 mx-32 items-center flex-wrap space-x-6 space-y-4 max-w-screen-xl">

        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/windmill_banner.jpg" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">NOV</div>
                    <div class="text-gray-800 text-lg font-bold">25–26</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Mumbai</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/windmill_banner.jpg" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">NOV</div>
                    <div class="text-gray-800 text-lg font-bold">25–26</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Mumbai</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/windmill_banner.jpg" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">NOV</div>
                    <div class="text-gray-800 text-lg font-bold">25–26</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Mumbai</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/windmill_banner.jpg" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">NOV</div>
                    <div class="text-gray-800 text-lg font-bold">25–26</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Mumbai</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/windmill_banner.jpg" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">NOV</div>
                    <div class="text-gray-800 text-lg font-bold">25–26</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Mumbai</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/windmill_banner.jpg" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">NOV</div>
                    <div class="text-gray-800 text-lg font-bold">25–26</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Mumbai</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/windmill_banner.jpg" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">NOV</div>
                    <div class="text-gray-800 text-lg font-bold">25–26</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Mumbai</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/windmill_banner.jpg" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">NOV</div>
                    <div class="text-gray-800 text-lg font-bold">25–26</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Mumbai</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="w-full h-fit justify-center items-center">
    <div class="relative space-y-4 z-10 h-full py-16 mx-32 text-white text-center font-primary">
        <h3 class="text-black text-2xl">Products for you</h3>
        <h1 class="text-6xl text-primary">Support a historical monument</h1>
        <div class="" style="transform:translateY(280px)"><button style="transform:translateX(-845px)" onclick="scrollSlider(-1)"
                class="absolute left-0 top-1/3 bg-black text-2xl text-bold text-primary p-4 rounded-full shadow-lg hover:bg-primary hover:text-white transition">
                ‹
            </button>
            <button style="transform:translateX(20px)" onclick="scrollSlider(1)"
                class="absolute right-0 top-1/3 bg-black text-2xl text-bold text-primary p-4 rounded-full shadow-lg hover:bg-primary hover:text-white transition">
                ›
            </button>
        </div>
        <div class="grid grid-cols-4 gap-16">
            @foreach($products as $product)
            <div class="bg-primary rounded-xl mt-8 overflow-hidden shadow-xl">
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

        <div class="flex justify-center mt-6 gap-4">
            <div class="w-2 h-2 bg-primary rounded-full"></div>
            <div class="w-2 h-2 bg-black rounded-full"></div>
            <div class="w-2 h-2 bg-black rounded-full"></div>
            <div class="w-2 h-2 bg-black rounded-full"></div>
        </div>


    </div>
</div>
@endsection