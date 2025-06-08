<footer class="w-full bg-primary text-white font-primary text-xl px-24 py-10 opacity-75">
    <div class="flex justify-between items-start flex-wrap gap-y-8">
        <div class="flex flex-col space-y-4 max-w-sm">
            <div class="flex items-center space-x-4">
                <img src="/white_kiiu_logo.svg" class="h-14">
                <span class="text-3xl"></span>
            </div>
            <p class="text-white text-base">
                Providing quality products and reliable service since 20XX. Thank you for shopping with us!
            </p>
        </div>

        <div class="flex flex-col space-y-2">
            <h3 class="text-2xl mb-2">Quick Links</h3>
            <a href="{{route('home')}}" class="hover:text-secondary">Home</a>
            <a href="{{route('shop')}}" class="hover:text-secondary">Store</a>
            <a href="#" class="hover:text-secondary">About</a>
            <a href="{{route('contact')}}" class="hover:text-secondary">Contact Us</a>
        </div>

        <div class="flex flex-col space-y-4 max-w-md">
            <h3 class="text-2xl">Subscribe to our newsletter</h3>
            <div class="flex items-center h-10 w-full">
                <input type="email" placeholder="Your email" class="w-full h-full ps-4 text-white border-2 border-white bg-primary focus:outline-none rounded-l-xl">
                <button class="h-full text-white bg-transparent font-primary text-xl px-4 border-2 border-white rounded-r-xl">
                    Subscribe
                </button>
            </div>
        </div>
    </div>

    <div class="border-t border-white mt-10 pt-6 text-center text-base">
        © {{ date('Y') }} Kiiu Tuulik. All rights reserved.
    </div>
</footer>
