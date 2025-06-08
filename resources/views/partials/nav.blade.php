<nav class="fixed z-20 w-full justify-between items-center text-white font-primary text-2xl flex py-6 px-24">
    <div class="flex py-6 px-24 items-center bg-black rounded-full">
        <div><a href="{{route('home')}}"><img src="/white_kiiu_logo.svg" class="h-12"></a></div>
        <ul class="flex space-x-16 ml-16">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="text-secondary text-white"><a href="{{route('shop')}}">Shop</a></li>
            <li class="text-secondary text-white"><a href="#">Donate</a></li>
            <li class="text-secondary text-white"><a href="{{route('contact')}}">Contact us</a></li>
        </ul>
    </div>
    <div class="flex py-6 items-center px-24 bg-black rounded-full">
        <div class="flex items-center h-10 w-46">
            <div class="flex items-center h-full border-l-2 border-t-2 border-b-2 border-white rounded-l-xl">
                <i class="text-xl text-white ms-3 nf nf-cod-search"></i>
            </div>
            <input type="search" id="default-search" class="w-full h-full ps-10 text-xl focus:outline-none focus-visible:none"/>
            
            <button type="submit" class="h-full text-white bg-transparent font-primary text-xl px-4 border-r-2 border-t-2 border-b-2 border-white rounded-r-xl">Search</button>
        </div>
        <div class="flex items-center h-10">
            <i class="text-3xl text-white ms-3 nf nf-fa-user"></i>
            <i class="text-3xl text-white ms-3 nf nf-md-shopping"></i>
        </div>
    </div>
</nav>