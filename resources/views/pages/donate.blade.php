@extends('partials.layout')
@section('content')
<div style="background-image: url('/windmill_banner.jpg');" class="w-98 absolute top-auto w-full h-screen relative font-primary">
<div class="pt-24 flex justify-center items-start font-primary px-8">
  <div class="flex max-w-6xl w-full items-center h-screen gap-16">

    <div class="">
      <img src="/windmill_banner.jpg" class="" />
    </div>

    <div class="flex-1 p-8 bg-white rounded-3xl shadow-lg">
      <p class="mb-6 text-zinc-500 text-base font-lato max-w-lg">
        Welcome to Kiiu Tuuliku donation page. You'd be doing a great favor to our organization by pitching in to help a little.
      </p>

      <div class="mb-8">
        <h2 class="text-lg text-zinc-800 mb-2 font-lato">Also feel free to reach out</h2>
        <div class="p-3 bg-zinc-100 rounded-md flex justify-between items-center text-zinc-500 text-lg font-lato cursor-pointer">
          katarina.kivimaa@gmail.com <br>
          Tel +372 5555 5555
          <div class="w-4 h-4 relative overflow-hidden">
            <div class="w-2.5 h-1.5 absolute bg-zinc-800 left-[1.9px] top-[3.5px]"></div>
          </div>
        </div>
      </div>

      <div class="mb-8">
        <h2 class="text-lg text-zinc-800 mb-4 font-lato">Choose a donation amount</h2>
        <div class="space-y-5">
          <label class="flex items-center gap-5 cursor-pointer">
            <div class="w-5 h-5 rounded-full border-2 border-green-500 bg-zinc-100 flex justify-center items-center">
              <div class="w-2.5 h-2.5 rounded-full bg-green-500"></div>
            </div>
            <span class="text-zinc-800 text-2xl font-semibold font-lato">$25</span>
          </label>
          <label class="flex items-center gap-5 cursor-pointer">
            <div class="w-5 h-5 rounded-full border border-stone-300 bg-zinc-100"></div>
            <span class="text-zinc-800 text-2xl font-semibold font-lato">$50</span>
          </label>
          <label class="flex items-center gap-5 cursor-pointer">
            <div class="w-5 h-5 rounded-full border border-stone-300 bg-zinc-100"></div>
            <span class="text-zinc-800 text-2xl font-semibold font-lato">$100</span>
          </label>
          <div class="text-green-500 text-sm underline cursor-pointer font-lato">Enter a custom donation amount</div>
        </div>
      </div>

      <div class="mb-8">
        <h2 class="text-lg text-zinc-800 mb-4 font-lato">Choose a donation frequency</h2>
        <div class="flex gap-4">
          <label class="flex-1 flex items-center gap-2.5 p-3 bg-emerald-100 rounded-md cursor-pointer">
            <div class="w-5 h-5 rounded-full border-2 border-green-500 bg-zinc-100 flex justify-center items-center">
              <div class="w-2.5 h-2.5 rounded-full bg-green-500"></div>
            </div>
            <span class="text-neutral-600 text-lg font-lato">Monthly</span>
          </label>
          <label class="flex-1 flex items-center gap-2.5 p-3 bg-zinc-100 rounded-md cursor-pointer">
            <div class="w-5 h-5 rounded-full border border-stone-300 bg-white"></div>
            <span class="text-zinc-500 text-lg font-lato">Once</span>
          </label>
        </div>
        <p class="text-zinc-500 text-xs mt-2 font-lato leading-tight">
          By making a donation, you agree to our terms of service and privacy policy. Donations are non-refundable. We appreciate your support.
        </p>
      </div>

      <div class="flex gap-8">
        <button class="px-8 py-3 rounded-xl border-2 border-primary text-black bg-white hover:bg-white hover:text-primary font-semibold text-lg transition">
          Cancel
        </button>
        <button class="px-8 py-3 rounded-xl border-2 border-primary bg-primary text-white hover:bg-white hover:text-primary font-semibold text-lg transition">
          Checkout
        </button>
      </div>
    </div>
  </div>
</div>
@endsection
