@extends('layout.app')
@section('content')
    <div class="antialiased bg-[#23242A]">
        <!-- Sidebar -->
        <section class="bg-[#23242A]  p-4  md:ml-64 h-auto pt-20">
            <nav class="flex px-2 py-3  border border-[#424650] rounded-lg bg-[#323741]  mt-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    @include('layout.navLink')
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <a href="{{route('clubs.index')}}" class="inline-flex items-center text-sm font-medium text-[#F5F5F7] hover:text-[#827FFF] ">
                                Clubs
                            </a>
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <a href="{{route('clubs.show',['club'=>$club->id])}}" class="inline-flex items-center text-sm font-medium text-[#F5F5F7] hover:text-[#827FFF] ">
                                Club details
                            </a>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="container mx-auto pt-3 ">
                <div class="col-span-12 lg:col-span-5">
                    <div class="items-center bg-[#323741] rounded-lg shadow sm:flex border border-[#424650] relative">
                        <a>
                            <img class="p-2 flex-wrap w-[250px] h-[250px] rounded-full sm:rounded-none sm:rounded-l-lg " src="{{$club->image}}" alt="Bonnie Avatar">
                        </a>
                        <div class="flex flex-col justify-center flex-grow ml-5">
                            <h1 class="ml-[300px] text-3xl font-bold text-white mb-2  mt-3">{{$club->name}}</h1>
                            <h2 class=" text-[20px] text-white mb-2 mt-3"><strong>Description of the club: </strong> {{$club->description}}</h2>
                            <h2 class="text-[20px] text-white mb-1 mt-3"><strong>Creation Date: </strong>{{ $club->created_at->format('Y-m-d') }}</h2>
                            <h2 class="text-[20px] text-white mb-5 mt-2"><strong>Type: </strong>{{$club->type}}</h2>
                        </div>
                        @if(Auth::user()->type == 'sks' || Auth::user()->type == 'club')
                            <svg data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="cursor-pointer absolute top-0 right-0 w-6 h-6 text-[#f5f5f7] hover:text-[#827FFF]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                            </svg>
                        @endif
                    </div>
                    <div class="flex flex-wrap gap-1">
                        <button class="my-2 block  px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-white   hover:bg-[#827FFF]   data-[twe-nav-active]:border-[#827FFF] data-[twe-nav-active]:text-white "
                                data-tab-target="#tab1">Post</button>
                        <button class="my-2 block border-[#424650]   px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-white  hover:bg-[#827FFF]   data-[twe-nav-active]:border-[#827FFF] data-[twe-nav-active]:text-white "
                                data-tab-target="#tab2">Event</button>
                    </div>
                </div>
                <hr class="my-12 h-0.5 border-t-0 bg-[#424650]" />
            </div>
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 tab-content" id="tab1">
                <div class="mx-auto max-w-screen-sm  mb-8 lg:mb-16">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white text-center">Our post</h2>
                    <p class="font-light text-white lg:mb-16 sm:text-xl text-center">Discover the pulse of our university community through Our Posts: where stories, events, and insights come alive!</p>
                </div>
                <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2" >
                    <!------------------start posts content------------------------------->
                    @foreach ($club->posts as $post)
                        <div class="items-center bg-[#323741] rounded-lg shadow sm:flex border border-[#424650] hover:border-[#827FFF] relative">
                            <a href="#">
                                <img class="w-[350px] h-[230px] rounded-lg sm:rounded-none object-cover" src="{{ $post->image }}" alt="{{ $post->name }}">
                            </a>
                            <div class="p-5">
                                <h3 class="text-xl font-bold tracking-tight text-white">
                                    <a href="#">{{ $post->name }}</a>
                                </h3>
                                <span class="text-white">Date: {{ $post->created_at->format('d-m-Y') }}</span>
                                <p class="mt-3 mb-4 font-light text-white">Description: {{ $post->description }}</p>
                                @if(Auth::user()->type == 'sks' || Auth::user()->type == 'club')
                                    <!-- Icon in top right corner -->
                                    <svg data-modal-target="crud-modal2" data-modal-toggle="crud-modal2" class="cursor-pointer absolute top-0 right-0 w-6 h-6 text-[#f5f5f7] hover:text-[#827FFF]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                    </svg>
                                @endif
                            </div>
                        </div>
                    @endforeach
                    <!------------------End posts content------------------------------->
                </div>
            </div>
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 tab-content hidden bg-[#2a2d35] " id="tab2">
                <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-1 mt-3   ">
                    <h3 class="text-[#F5F5F7] text-2xl font-bold">Customize by:</h3>
                    <div class=" flex flex-wrap justify-start items-center px-2 py-3 space-x-2  rounded-lg border border-[#424650] bg-[#323741] mt-2">
                        <button id="btnLocation" class="px-4 py-2 text-sm font-medium text-[#F5F5F7] border-[#424650] bg-[#323741] rounded-full hover:bg-[#827FFF] hover:text-[#F5F5F7] focus:z-10 focus:ring-2 focus:ring-[#827FFF]  mb-1">Location</button>
                        <button id="btnTags" class="px-4 py-2 text-sm font-medium text-[#F5F5F7] border-[#424650] bg-[#323741]rounded-full hover:bg-[#827FFF] hover:text-[#F5F5F7] focus:z-10 focus:ring-2 focus:ring-[#827FFF]  mb-1">Tags</button>
                        <button id="btnGender" class="px-4 py-2 text-sm font-medium text-[#F5F5F7] border-[#424650] bg-[#323741] rounded-full hover:bg-[#827FFF] hover:text-[#F5F5F7] focus:z-10 focus:ring-2 focus:ring-[#827FFF]  mb-1">Event Space</button>
                    </div>
                    <div id="initialButtonsContainer" class="flex flex-wrap justify-start items-center px-2 py-3 space-x-2 rounded-lg border border-[#424650] bg-[#323741]"></div>
                    @foreach($club->events as $event)
                    <div class="items-center bg-[#323741] rounded-lg shadow sm:flex border border-[#424650] hover:border-[#827FFF] relative ">
                        <a href="#">
                            <img class="w-[400px] rounded-lg sm:rounded-none sm:rounded-l-lg " src="{{$event->image}}" alt="{{$event->name}}">
                        </a>
                        <div class="flex flex-col justify-center flex-grow ml-5">
]                            <p class="text-sm text-white mb-1"><strong>Event name:</strong> {{$event->name}}</p>
                            <p class="text-sm text-white mb-1"><strong>Start date:</strong> {{$post->created_at->format('d-m-Y')}}</p>
                            <p class="text-sm text-white mb-1"><strong>Time:</strong> 15:00 pm</p>
                            <p class="text-sm text-white mb-1"><strong>speaker:</strong> Melih BULUT</p>
                            <p class="text-sm text-white mb-1"><strong>Tag:</strong> Networking</p>
                            <p class="text-sm text-white mb-1"><strong>Location:</strong> Üsküdar Çarşı Campus</p>
                            <p class="text-sm text-white mb-1"><strong>Event_place:</strong> ÇARŞI 4. Kat Emirnebi 1 Konferans Salonu[304]</p>
                            <p class="text-sm text-white mb-2"><strong>Description of the event:</strong> Organized by the Technology and Innovation Club, the event on "Health Technologies and Artificial Intelligence</p>
                            <p class="text-sm text-white mb-2">Gender: Both</p>
                            <svg data-modal-target="crud-modal3" data-modal-toggle="crud-modal3"class="cursor-pointer absolute top-0 right-0 w-6 h-6 text-[#f5f5f7] hover:text-[#827FFF]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                            </svg>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                    </li>
                </ul>
            </div>

            <!-----for Club-->
            <!-- Main modal -->
            <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Create New Product
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form class="p-4 md:p-5">
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                    <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option selected="">Select category</option>
                                        <option value="TV">TV/Monitors</option>
                                        <option value="PC">PC</option>
                                        <option value="GA">Gaming/Console</option>
                                        <option value="PH">Phones</option>
                                    </select>
                                </div>
                                <div class="col-span-2">
                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                                    <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                Add new product
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-----for post-->
            <!-- Main modal -->
            <div id="crud-modal2" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Create New post
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal2">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form class="p-4 md:p-5">
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                    <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option selected="">Select category</option>
                                        <option value="TV">TV/Monitors</option>
                                        <option value="PC">PC</option>
                                        <option value="GA">Gaming/Console</option>
                                        <option value="PH">Phones</option>
                                    </select>
                                </div>
                                <div class="col-span-2">
                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                                    <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                Add new product
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-----for event-->
            <!-- Main modal -->
            <div id="crud-modal3" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Create New event
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal3">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form class="p-4 md:p-5">
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                    <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option selected="">Select category</option>
                                        <option value="TV">TV/Monitors</option>
                                        <option value="PC">PC</option>
                                        <option value="GA">Gaming/Console</option>
                                        <option value="PH">Phones</option>
                                    </select>
                                </div>
                                <div class="col-span-2">
                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                                    <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                Add new product
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start grid -->
    </div>
@endsection
@section('scripts')
    <script>
        const tabs = document.querySelectorAll('[data-tab-target]');
        const activeClass = 'bg-indigo-500';

        // Select first tab by default
        tabs[0].classList.add(activeClass);
        document.querySelector('#tab1').classList.remove('hidden');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const targetContent = document.querySelector(tab.dataset.tabTarget);
                // console.log(targetContent)

                document.querySelectorAll('.tab-content').forEach(content => content.classList.add('hidden'));
                targetContent.classList.remove('hidden');

                // Remove active class from all tabs
                document.querySelectorAll('.bg-indigo-500').forEach(activeTab => activeTab.classList.remove(activeClass));

                // Add active class to clicked tab
                console.log(tab)
                tab.classList.add(activeClass);
            });
        });
    </script>
    <script>
        // Array of predefined colors
        const colors = ['#827FFF', '#F87171', '#FBBF24', '#34D399', '#60A5FA', '#D97706', '#F472B6', '#6EE7B7', '#10B981', '#3B82F6', '#EF4444', '#FCD34D', '#34D399', '#93C5FD', '#A5B4FC'];

        // Function to choose non-repeating colors from the array
        function getRandomUniqueColor(colors) {
            const colorsCopy = colors.slice(); // Make a copy of the original array
            const index = Math.floor(Math.random() * colorsCopy.length);
            const color = colorsCopy[index];
            colorsCopy.splice(index, 1); // Remove the selected color from the copy
            return color;
        }
        // Function to create buttons container with common styling
        function createButtonContainer(containerId) {
            const container = document.getElementById(containerId);
            container.innerHTML = ''; // Clear previous buttons
            container.className = 'flex flex-wrap justify-start items-center px-2 py-3 space-x-2 rounded-lg border border-[#424650] bg-[#323741] mt-4';
        }

        function createButtons(buttonId, buttonNames, containerId) {
            const container = document.getElementById(containerId);

            buttonNames.forEach(btnName => {
                const dynamicBtn = document.createElement('button');
                dynamicBtn.textContent = btnName;
                dynamicBtn.className = "px-4 py-2 text-sm font-medium text-[#F5F5F7] border border-[#424650] rounded-full hover:bg-[#827FFF] hover:text-[#F5F5F7] focus:z-10 focus:ring-2 focus:ring-[#827FFF] focus:text-[#F5F5F7] mb-1"; // Apply Tailwind CSS classes
                dynamicBtn.style.backgroundColor = getRandomUniqueColor(colors); // Set random background color
                container.appendChild(dynamicBtn);
            });
        }

        const Locations=['Üsküdar Çarşı Campus', 'Üsküdar Altunizade Central Campus', 'Üsküdar Altunizade South Campus','Faculty of Medicine NP Campus ','Faculty of Dentsiry NP Campus '];
        document.getElementById('btnLocation').addEventListener('click', () => {
            createButtonContainer('initialButtonsContainer');
            createButtons('btnLocation', Locations , 'initialButtonsContainer');
        });

        const tags = ['Academic','Workshop','Seminar','Conference','Cultural','Sports','Networking','Social','Arts','Volunteer','Career Development','Special Event','Online','On-campus','Off-campus'];
        document.getElementById('btnTags').addEventListener('click', () => {
            createButtonContainer('initialButtonsContainer');
            createButtons('btnTags', tags, 'initialButtonsContainer');
        });

        document.getElementById('btnGender').addEventListener('click', () => {
            createButtonContainer('initialButtonsContainer');
            createButtons('btnGender', ['Both', 'Men', 'Women'], 'initialButtonsContainer');
        });

    </script>

@endsection
