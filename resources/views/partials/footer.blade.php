<footer class="w-full bg-primary text-white font-primary text-xl px-24 py-10">
  <div class="flex justify-between items-start flex-wrap gap-y-8">

    <div class="flex flex-col space-y-4 max-w-sm">
      <div class="flex items-center space-x-4">
        <img src="/white_kiiu_logo.svg" class="h-20">
      </div>
    </div>

    <div class="flex flex-col space-y-2">
      <h3 class="text-2xl mb-2 font-semibold">Quick Links</h3>
      <a href="{{route('home')}}" class="hover:text-gray-300 transition-colors">Home</a>
      <a href="{{route('shop')}}" class="hover:text-gray-300 transition-colors">Shop</a>
      <a href="{{route('donate')}}" class="hover:text-gray-300 transition-colors">Donate</a>
      <a href="{{route('contact')}}" class="hover:text-gray-300 transition-colors">Contact Us</a>
    </div>

    <div class="flex flex-col space-y-4 max-w-md">
      <h3 class="text-2xl border-width-1 border-white font-semibold">Subscribe to our newsletter</h3>
      <div class="flex items-center h-12 w-full">
        <input 
          type="email" 
          placeholder="Your email" 
          class="w-full h-full ps-4 text-white bg-black border-none focus:outline-none rounded-l-full placeholder-white"
        >
        <button 
          class="h-full border-2 border-white text-white bg-black font-primary text-xl px-6 rounded-r-full hover:bg-white hover:text-primary transition"
        >
          Subscribe
        </button>
      </div>
    </div>
  </div>

  <div class="border-t border-white mt-10 pt-6 text-center text-base">
    © {{ date('Y') }} Kiiu Tuulik. All rights reserved.
  </div>
</footer>
