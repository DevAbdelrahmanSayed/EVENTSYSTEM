@extends('layout.app')
@section('content')
    <main class="pl-3 pr-3 md:ml-64 h-auto pt-20 mt-5 ">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28 bg-[#323741]  border border-[#424650] rounded ">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-[#f5f5f7] text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl ">Discover Student Life!</h1>
                <p class="max-w-2xl mb-6 font-light text-[#f5f5f7] lg:mb-8 md:text-lg lg:text-xl ">Find clubs, activities, and events tailored just for you. Dive into a world of opportunities, make new friends, and create unforgettable memories.</p>

                <a href="{{ route('activity.index') }}" class=" items-center justify-center w-full px-5 py-3 mb-2 mr-2 text-sm font-medium text-center text-[#f5f5f7] bg-[#827FFF] border border-[#424650] rounded-lg sm:w-auto  hover:bg-opacity-50   ">I'm Feeling Lucky</a>
                <a href="{{ route('club.index') }}" class="items-center justify-center w-full px-5 py-3 text-sm font-medium text-center text-[#f5f5f7] border border-[#424650] bg-[#2A2D35] rounded-lg sm:w-auto hover:bg-opacity-50">
                    Explore Clubs
                </a>


            </div>
            <div class="hidden  lg:mt-0 lg:col-span-5 lg:flex w-auto">
                <img   src="{{asset('assets/image/picture (4).svg')}}">
            </div>
        </div>
    </main>
@endsection
@section('scripts')
@endsection
