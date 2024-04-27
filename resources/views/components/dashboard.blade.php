<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Student Club</title>

    <style>

        .main-container {
            position: relative;
            padding-top: 2rem;
        }

        .posts-container {
            margin-top: 4rem;
        }
    </style>
</head>
<body class="bg-[#23242A]">
<style>
    .blue-to-orange {
        background: linear-gradient(to right, rgb(0, 221, 255), orange);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>
<div class="antialiased bg-[#23242A]">
@include('layout.dashboard')
    <main class="p-4  md:ml-64 h-auto pt-20">


        <nav class="flex px-2 py-3  border border-[#424650] rounded-lg bg-[#323741]  mt-4" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="ClubPage.html" class="inline-flex items-center text-sm font-medium text-[#F5F5F7] hover:text-[#827FFF] ">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                        </svg>
                        Home
                    </a>
                </li>

            </ol>
        </nav>









        <!---Badges--------------------------------->

        <div class=" flex flex-wrap justify-start items-center px-2 py-3 space-x-2  rounded-lg border border-[#424650] bg-[#323741] mt-4">
            <button type="button" class="px-4 py-2 text-sm font-medium text-[#F5F5F7] bg-[#2a2d35] border border-[#424650] rounded-full hover:bg-[#827FFF] hover:text-[#F5F5F7] focus:z-10 focus:ring-2 focus:ring-[#827FFF] focus:text-[#F5F5F7] mb-1">
                Programming
            </button>
        </div>
        <!---Badges--------------------------------->

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-4"></div>


        <div class=" px-3 py-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-1 border border-[#424650] rounded bg-[#323741] ">

            <div class="col-span-1">
                <div class="p-4 overflow-hidden bg-[#2a2d35] border-2 border-[#424650] rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:border-[#827FFF]">
                    <article>
                        <figure class="overflow-hidden rounded-t-lg">
                            <a href="{{route('showClub.index')}}">  <img src="{{asset('assets/image/prof.jpg')}}" alt="A day in the life of a professional fashion designer" class="object-cover w-full h-48 duration-500 ease-in-out transform hover:scale-110"></a>
                        </figure>
                        <div class="p-4 bg-[#2a2d35]">
                            <p class="mb-2 text-sm text-white"><strong>Programming</strong> <span aria-hidden="true">•</span> Mar 15, 2024</p>
                            <a href="Club-details.html" aria-label="Read more about A day in the life of a professional fashion designer" class="inline-block mb-4 text-lg font-semibold text-white transition-colors duration-300 ease-in-out text-white hover:text-[#827FFF] dark:hover:text-white">Emergency And Disaster Management Club</a>
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{asset('assets/image/prof.jpg')}}" alt="Jeffrey Montgomery" class="w-10 h-10 rounded-full">
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
@include('layout.scripts')
</body>
</html>
