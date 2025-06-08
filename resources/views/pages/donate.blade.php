@extends('partials.layout')

@section('content')
<div style="background-image: url('/contact_bg.png');" class="w-98 absolute top-auto w-full h-screen relative font-primary">
    <div  class="space-y-4"></div>

    <div  class="relative space-y-4 z-30 pt-32 max-w-3xl mx-auto px-4 text-white">
        @if(Session::has('success'))
        <div class="p-4 mb-6 text-green-200 bg-green-800 rounded-xl shadow-md text-center">
            {{ Session::get('success') }}
        </div>
        @endif
        <div style="margin-top: 5vh;"></div>
        <h3 class="text-black text-center  text-2xl">Contact us here</h3>
        <h1 class="text-6xl text-primary text-center mb-10">We’d love to hear from you</h1>
        <div style="display:flex" class="justify-center">
            <form action="{{ route('mail') }}" method="POST" class="rounded-lg space-y-32 bg-primary bg-opacity-60 gap-4 p-8 rounded-2xl shadow-lg" style="width:50vw;">
                @csrf

                <div>
                    <label for="name" class="block mb-1 text-lg">Name</label>
                    <input name="name" type="text" id="name"
                        class="w-full p-3 rounded-xl text-black border border-gray-300 focus:ring-primary focus:border-primary"
                        placeholder="Your name" required>
                </div>

                <div>
                    <label for="email" class="block mt-4 mb-1 text-lg">Email</label>
                    <input name="email" type="email" id="email"
                        class="w-full p-3 rounded-xl text-black border border-gray-300 focus:ring-primary focus:border-primary"
                        placeholder="you@example.com" required>
                </div>

                <div>
                    <label for="subject" class="block mt-4 mb-1 text-lg">Subject</label>
                    <input name="subject" type="text" id="subject"
                        class="w-full p-3 rounded-xl text-black border border-gray-300 focus:ring-primary focus:border-primary"
                        placeholder="Subject" required>
                </div>

                <div>
                    <label for="message" class="block mt-4 mb-1 text-lg">Message</label>
                    <textarea name="message" id="message" rows="5"
                        class="w-full p-3 rounded-xl text-black border border-gray-300 focus:ring-primary focus:border-primary"
                        placeholder="Write your message here..." required></textarea>
                </div>

                <div class="text-center mt-4">
                    <button type="submit"
                        class="bg-primary hover:bg-white text-white hover:text-primary border-2 border-primary transition px-8 py-3 rounded-xl text-lg font-semibold">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection