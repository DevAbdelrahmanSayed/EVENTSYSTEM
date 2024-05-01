@extends('layout.app')
@section('content')
    <div class="antialiased bg-[#23242A]">
    <main class="p-4  md:ml-64 h-auto pt-20">
        <nav class="flex px-2 py-3  border border-[#424650] rounded-lg bg-[#323741]  mt-4" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                @include('layout.navLink')
            </ol>
        </nav>
        <!---Badges--------------------------------->
        <!---Badges--------------------------------->

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-4"></div>


        <div class=" px-3 py-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-1 border border-[#424650] rounded bg-[#323741] ">

            <div class="col-span-1">
                <div class="p-4 overflow-hidden bg-[#2a2d35] border-2 border-[#424650] rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:border-[#827FFF]">
                    <article>
                        <figure class="overflow-hidden rounded-t-lg">
                            <a href="{{route('showClub.index')}}"> <img src="{{asset('assets/image/prof.jpg')}}"
                                                                        alt="A day in the life of a professional fashion designer"
                                                                        class="object-cover w-full h-48 duration-500 ease-in-out transform hover:scale-110"></a>
                        </figure>
                        <div class="p-4 bg-[#2a2d35]">
                            <p class="mb-2 text-sm text-white"><strong>Programming</strong> <span
                                        aria-hidden="true">•</span> Mar 15, 2024</p>
                            <a href="Club-details.html"
                               aria-label="Read more about A day in the life of a professional fashion designer"
                               class="inline-block mb-4 text-lg font-semibold text-white transition-colors duration-300 ease-in-out text-white hover:text-[#827FFF] dark:hover:text-white">Emergency
                                And Disaster Management Club</a>
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{asset('assets/image/prof.jpg')}}" alt="Jeffrey Montgomery"
                                         class="w-10 h-10 rounded-full">
                                </div>
                                <div class="ml-3">
                                    <a href="Club-author.html" class="text-sm font-medium text-white">NAJI AYSAR</a>
                                    <p class="text-xs text-white">Software Engineering</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
@section('scripts')
@endsection
