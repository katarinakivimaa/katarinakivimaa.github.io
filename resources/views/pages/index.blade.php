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
                <a href="{{route('donate')}}">Donate</a>
            </button>
            <button
                class="bg-black hover:bg-white text-white hover:text-primary border-primary transition px-8 py-3 rounded-xl text-lg font-semibold">
                <a href="{{route('shop')}}">Shop</a>
            </button>
        </div>
    </div>
</div>


<div class="w-full h-screen  py-16 text-left">
    <h3 class="text-black text-center text-2xl">Events and Activites</h3>
    <h1 class="text-6xl text-center text-primary">Show up for Education</h1>
    <div class="flex py-6 mx-32 items-center flex-wrap space-x-6 space-y-4 max-w-screen-xl">

        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/1.webp" alt="Event image" class="w-full h-full object-cover" />
                <div class="rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">NOV</div>
                    <div class="text-gray-800 text-lg font-bold">25–26</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Estonia</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/2.webp" alt="Event image" class="w-full h-full object-cover" />
                <div class="rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">DEC</div>
                    <div class="text-gray-800 text-lg font-bold">15–23</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Estonia</div>
                    <div class="text-zinc-600 text-xs uppercase">9:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/7.webp" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">NOV</div>
                    <div class="text-gray-800 text-lg font-bold">05–22</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Estonia</div>
                    <div class="text-zinc-600 text-xs uppercase">12:30 AM – 5:00 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/4.webp" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">OCT</div>
                    <div class="text-gray-800 text-lg font-bold">11–16</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Estonia</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/5.webp" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">MAR</div>
                    <div class="text-gray-800 text-lg font-bold">12–27</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Estonia</div>
                    <div class="text-zinc-600 text-xs uppercase">1:30 PM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/6.webp" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">JUN</div>
                    <div class="text-gray-800 text-lg font-bold">02–17</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Estonia</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/3.webp" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">JUL</div>
                    <div class="text-gray-800 text-lg font-bold">25–26</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Estonia</div>
                    <div class="text-zinc-600 text-xs uppercase">8:30 AM – 7:30 PM</div>
                </div>
            </div>
        </div>
        <div class="w-80 bg-white rounded-md overflow-hidden shadow-xl">

            <div style="height: 230px;" class="relative overflow-hidden">
                <img src="/8.webp" alt="Event image" class="w-full h-full object-cover" />
                <div class="absolute bottom-0 left-0 px-2 py-1 bg-yellow-300 rounded-tr text-xs font-semibold text-gray-800">
                    Travel & Adventure
                </div>
            </div>

            <div class="flex p-4 gap-4">
                <div class="text-center">
                    <div class="text-primary text-base font-semibold">AUG</div>
                    <div class="text-gray-800 text-lg font-bold">02–26</div>
                </div>

                <div>
                    <div class="text-gray-800 font-semibold text-base">Lakeside Camping at Pawna</div>
                    <div class="text-zinc-600 text-xs font-semibold">Adventure Geek - Explore the Unexplored, Estonia</div>
                    <div class="text-zinc-600 text-xs uppercase">7:30 AM – 7:00 PM</div>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="w-full bg-primary flex justify-center items-center py-10">
    <div class="flex justify-center items-center gap-16 max-w-7xl px-6">
        <div class="flex flex-col gap-8 max-w-xl">
            <div class="text-white text-8xl font-normal font-['KoHo']">
                History
            </div>
            <div class="flex space-y-4 flex-col gap-10 max-w-xl">
                <div class="mb-2">
                    <div>
                        <h2 class="text-white text-3xl font-bold font-['KoHo'] mb-2">Kiiu Windmill</h2>
                        <p class="text-white text-base font-normal font-['KoHo'] leading-relaxed">
                            The Kiiu windmill, located in northern Estonia, is a well-preserved example of 19th-century rural architecture. Built in the early 1800s, it served as a vital part of the local agricultural economy, grinding grain for nearby farms. The structure reflects the ingenuity and resilience of Estonia’s countryside communities.
                        </p>
                    </div>
                    <div>
                        <h2 class="text-white text-3xl mt-6 font-bold font-['KoHo'] mb-2">Cultural Legacy</h2>
                        <p class="text-white text-base font-normal font-['KoHo'] leading-relaxed">
                            Though no longer in use, the windmill remains a symbol of Estonia's agrarian past and craftsmanship. Restored in recent years, it now serves as a historical landmark, reminding visitors of a time when wind and stone powered the region’s daily life and traditions.
                        </p>
                    </div>

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
                    <div class="w-7 h-5 justify-center text-xl font-medium ">1834</div>
                    <div class="w-52 h-5 text-right justify-center text-m ">Lydia Tamme</div> <br>
                </div>
                <div class="w-64 h-5 justify-center text-xl mb-4 font-bold ">Founder’s Daughter</div>
                <div class="w-64 justify-center text-m">Lydia helped maintain the Kiiu windmill after her father's death, becoming a key figure in keeping local grain production running during the harsh winters of the 1830s.</div>
            </div>

            <div class="inline-flex w-12 flex-col justify-start items-center gap-3.5">
                <img class="shadow-xl" style="width: auto; height: 360px; border-top-left-radius: 160px; border-top-right-radius: 160px" src="/pats.jpg" />
                <div class="self-stretch justify-start items-start gap-14">
                    <div class="w-7 h-5 justify-center text-xl font-medium ">1812</div>
                    <div class="w-52 h-5 text-right justify-center text-m ">Peeter Kask</div> <br>
                </div>
                <div class="w-64 h-5 justify-center mb-4 text-xl font-bold ">Millwright & Builder</div>
                <div class="w-64 justify-center text-m">Peeter was the original builder of the Kiiu windmill. A skilled craftsman, he designed the mill using local limestone and oak, blending Baltic practicality with elegant engineering.</div>
            </div>

            <div class="inline-flex w-12 flex-col justify-start items-center gap-3.5">
                <img class="shadow-xl" style="width: auto; height: 360px; border-top-left-radius: 160px; border-bottom-right-radius: 160px" src="/peterson.jpg" />
                <div class="self-stretch justify-start items-start gap-14">
                    <div class="w-7 h-5 justify-center text-xl font-medium ">1901</div>
                    <div class="w-52 h-5 text-right justify-center text-m ">Juhan Peterson</div> <br>
                </div>
                <div class="w-64 h-5 justify-center mb-4 text-xl font-bold ">Last Operator</div>
                <div class="w-64 justify-center text-m">Juhan ran the Kiiu windmill until it ceased operations in the 1920s. Known for his storytelling and mechanical skills, he was beloved by villagers for keeping the mill alive through war and famine.</div>
            </div>

        </div>
    </div>
</div>


<div class="w-full h-fit justify-center items-center">
    <div class="relative space-y-4 z-10 h-full py-16 mx-32 text-white justify-center items-center text-center font-primary">
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