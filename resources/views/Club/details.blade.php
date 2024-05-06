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
                            <img class="p-2 flex-wrap w-[250px] h-[250px] rounded-full sm:rounded-none sm:rounded-l-lg" src="{{ asset('storage/' . $club->image) }}" alt="Bonnie Avatar">
                        </a>
                        <div class="flex flex-col justify-center flex-grow ml-5">
                            <h1 class="ml-[300px] text-3xl font-bold text-white mb-2  mt-3">{{$club->name}}</h1>
                            <h2 class=" text-[20px] text-white mb-2 mt-3"><strong>Description of the club: </strong> {{$club->description}}</h2>
                            <h2 class="text-[20px] text-white mb-1 mt-3"><strong>Creation Date: </strong>{{ $club->created_at->format('Y-m-d') }}</h2>
                            <h2 class="text-[20px] text-white mb-5 mt-2"><strong>Category: </strong>{{$club->category->name}}</h2>
                        </div>
                        @if(Auth::user()->type == 'sks' || Auth::user()->type == 'club')
                            @if(Auth::user()->id === $club->user_id)
                            <svg data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="cursor-pointer absolute top-0 right-0 w-6 h-6 text-[#f5f5f7] hover:text-[#827FFF]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                            </svg>
                        @endif
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
                                <img class="w-[350px] h-[230px] rounded-lg sm:rounded-none object-cover" src="{{asset('storage/'.$post->image ) }}" alt="{{ $post->name }}">
                            </a>
                            <div class="p-5">
                                <h3 class="text-xl font-bold tracking-tight text-white">
                                    <a href="#">{{ $post->name }}</a>
                                </h3>
                                <span class="text-white">Date: {{ $post->created_at->format('d-m-Y') }}</span>
                                <p class="mt-3 mb-4 font-light text-white">Description: {{ $post->description }}</p>
                                @if(Auth::user()->type == 'sks' || Auth::user()->type == 'club')
                                    @if(Auth::user()->id === $post->user_id)
                                    <!-- Icon in top right corner -->
                                    <svg data-modal-target="crud-modal2" data-modal-toggle="crud-modal2" class="cursor-pointer absolute top-0 right-0 w-6 h-6 text-[#f5f5f7] hover:text-[#827FFF]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                    </svg>
                                    @endif
                                @endif
                            </div>
                        </div>
                    @endforeach
                    <!------------------End posts content------------------------------->
                </div>
            </div>
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 tab-content hidden bg-[#2a2d35] " id="tab2">
                <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-1 mt-3   ">
                    @foreach($club->events as $event)
                        <div class="items-center bg-[#323741] rounded-lg shadow sm:flex border border-[#424650] hover:border-[#827FFF] relative ">
                            <a href="#">
                                <img class="w-[400px] h-[250px]  rounded-lg sm:rounded-none sm:rounded-l-lg " src="{{asset('storage/'.$event->image)}}" alt="{{$event->name}}">
                            </a>
                            <div class="flex flex-col justify-center flex-grow ml-5">
                                <p class="text-sm text-white mb-1"><strong>Event name:</strong> {{$event->name??'No Name'}}</p>
                                <p class="text-sm text-white mb-1"><strong>Start date:</strong> {{$post->date_event??'No Date'}}</p>
                                <p class="text-sm text-white mb-1"><strong>Time:</strong> 15:00 pm</p>
                                <p class="text-sm text-white mb-1"><strong>speaker: </strong>{{$event->represented->name??'No speaker'}}</p>
                                <p class="text-sm text-white mb-1"><strong>Tag:</strong> {{$event->tag->name }}</p>
                                <p class="text-sm text-white mb-1"><strong>Location:</strong> {{$event->category->name }}</p>
                                <p class="text-sm text-white mb-1"><strong>Event_place:</strong> {{$event->childCategory->name}}</p>
                                <p class="text-sm text-white mb-2"><strong>Description of the event:</strong> {{$event->description??'No description'}}</p>
                                <p class="text-sm text-white mb-2">Gender: Both</p>
                                @if(Auth::user()->type == 'sks' || Auth::user()->type == 'club')
                                    @if(Auth::user()->id === $event->user_id)
                                        <!-- Icon in top right corner -->
                                        <svg data-modal-target="crud-modal2" data-modal-toggle="crud-modal2" class="cursor-pointer absolute top-0 right-0 w-6 h-6 text-[#f5f5f7] hover:text-[#827FFF]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                        </svg>
                                    @endif
                                @endif
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
            <!-----for Club-->
            <!-- update club form -->
            <div id="clubEditForm"  class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-[#323741] rounded-lg shadow border border-[#424650] ">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-white">
                                Update Club Info
                            </h3>
                            <button type="button" class="absolute top-2.5 right-2.5 text-[#f5f5f7] border border-[#424650] bg-[#2a2d35]  hover:bg-[#827FFF] focus:ring-2 focus:outline-none focus:ring-[#827FFF] rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="clubEditForm">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <div class="mt-3"></div>
                        <!-- Modal body -->

                        <form class="max-w-lg mx-auto p-4">
                            <label class="block mb-2 text-sm font-medium text-white" for="user_avatar">Update Club's logo:</label>
                            <input class="block w-full text-sm  border border-[#424650] rounded-lg cursor-pointer bg-[#2a2d35] text-[#424650] focus:outline-none  " aria-describedby="user_avatar_help" id="user_avatar" type="file" accept="image/*">
                            <div class=" text-xs text-[#f5f5f7]" id="user_avatar_help">Clubs logo are useful for establishing your club's visual identity, and leaving a memorable impression on visitors.</div>
                        </form>

                        <div class=" p-4 relative">
                            <label for="helper-text" class="block mb-2 text-sm font-medium text-[#f5f5f7]">Update Club's Name:</label>
                            <input type="text" id="post-title" class="bg-[#2a2d35] border border-[#424650] text-gray-200 text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5 dark:placeholder-gray-400" placeholder="Enter the title of your post..">
                        </div>

                        <div class=" p-4 relative">


                            <label for="message" class="block mb-2 text-sm font-medium text-[#f5f5f7] ">Update the description of the Club:</label>
                            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-[#f5f5f7] bg-[#2a2d35] rounded-lg border border-[#424650]  focus:border-[#827FFF] placeholder-gray-400 " placeholder="Explain the event in more details..." required ></textarea>
                        </div>

                        <div class=" p-4 relative">
                            <div>
                                <label class="block mb-2 text-sm font-medium text-white" for="user_avatar">Club's Category:</label>
                                <label for="Tags" class="sr-only">Update The Category</label>
                                <select id="Tags" class="bg-[#2a2d35] text-[#f5f5f7] text-sm rounded-lg border border-[#424650] focus:border-[#827FFF] block w-full p-2.5">
                                    <option selected>Select a Category</option>
                                    <option value="Academic">Academic</option>
                                    <option value="Workshop">Workshop</option>
                                    <option value="Seminar">Seminar</option>
                                    <option value="Conference">Conference</option>
                                    <option value="Cultural">Cultural</option>
                                    <option value="Sports">Sports</option>
                                    <option value="Networking">Networking</option>
                                    <option value="Social">Social</option>
                                    <option value="Arts">Arts</option>
                                    <option value="Volunteer">Volunteer</option>
                                    <option value="Career Development">Career Development</option>
                                    <option value="Special Event">Special Event</option>
                                    <option value="Online">Online</option>
                                    <option value="On-campus">On-campus</option>
                                    <option value="Off-campus">Off-campus</option>
                                </select>
                            </div>

                            <button type="submit" data-modal-target="clubUpdateSuccess" data-modal-toggle="clubUpdateSuccess" data-modal-toggle="clubEditForm" class=" mt-4 text-[#f5f5f7] inline-flex items-center bg-[#827FFF]  focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-----for post-->

            <!-- update posts form ------>
            <div id="postEditForm" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-[#323741] rounded-lg shadow border border-[#424650] ">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-white">
                                Update Post Info
                            </h3>
                            <button type="button" class="absolute top-2.5 right-2.5 text-[#f5f5f7] border border-[#424650] bg-[#2a2d35] rounded-lg hover:bg-[#827FFF] focus:ring-2 focus:outline-none focus:ring-[#827FFF] rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="postEditForm">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <div class="mt-3"></div>
                        <!-- Modal body -->

                        <form class="max-w-lg mx-auto p-4">
                            <label class="block mb-2 text-sm font-medium text-white" for="user_avatar">Update Post's Poster:</label>
                            <input class="block w-full text-sm  border border-[#424650] rounded-lg cursor-pointer bg-[#2a2d35] text-[#424650] focus:outline-none  " aria-describedby="user_avatar_help" id="user_avatar" type="file" accept="image/*">
                            <div class=" text-xs text-[#f5f5f7]" id="user_avatar_help">Time to Add Some Visual Flair!</div>
                        </form>

                        <div class=" p-4 relative">
                            <label for="helper-text" class="block mb-2 text-sm font-medium text-[#f5f5f7]">Update Post's Title:</label>
                            <input type="text" id="post-title" class="bg-[#2a2d35] border border-[#424650] text-gray-200 text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5 dark:placeholder-gray-400" placeholder="Enter the title of your post..">
                        </div>
                        <div class=" p-4 relative">
                            <label for="message" class="block mb-2 text-sm font-medium text-[#f5f5f7] ">Update the description of the Post:</label>
                            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-[#f5f5f7] bg-[#2a2d35] rounded-lg border border-[#424650]  focus:border-[#827FFF] placeholder-gray-400 " placeholder="Explain the Post in more details..."  ></textarea>
                            <button type="submit" data-modal-toggle="postUpdateSuccess" data-modal-target="postUpdateSuccess" class=" mt-4 p-4 text-[#f5f5f7] inline-flex items-center bg-[#827FFF]  focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                                Submit
                            </button>
                        </div>


                    </div>
                </div>
            </div>
            <!-----for event-->

            <!-- Update event forms -->
            <div id="eventEditForm" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full ">
                    <!-- Modal content -->
                    <div class="relative bg-[#323741] rounded-lg shadow border border-[#424650] ">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-[#424650]">
                            <h3 class="text-lg font-semibold text-[#f5f5f7]">
                                Update Event Info
                            </h3>
                            <button type="button" class="absolute top-2.5 right-2.5 text-[#f5f5f7] border border-[#424650] bg-[#2a2d35] hover:bg-[#827FFF] focus:ring-2 focus:outline-none focus:ring-[#827FFF] rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="eventEditForm">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <div class="mt-3">
                            <!-- Modal body -->
                            <form class="p-4 relative max-w-lg mx-auto">
                                <label class=" block mb-2 text-sm font-medium text-white" for="user_avatar">Upload Event's Picture:</label>
                                <input class="block w-full text-sm  border border-[#424650] rounded-lg cursor-pointer bg-[#2a2d35] text-[#424650] focus:outline-none  " aria-describedby="user_avatar_help" id="user_avatar" type="file" accept="image/*">
                                <div class="mt-1 text-xs text-[#f5f5f7]" id="user_avatar_help">Upload a photo highlighting details for your event.</div>

                                <div class="mt-4">
                                    <label for="helper-text" class="block mb-2 text-sm font-medium text-[#f5f5f7] ">Event Name:</label>
                                    <input type="text" id="event-name-text"  class="bg-[#2a2d35] border border-[#424650]  text-gray-200 text-sm rounded-lg  focus:border-[#827FFF] block w-full p-2.5    dark:placeholder-gray-400 " placeholder="Enter the name of your Event..">

                                </div>
                                <!--------Search for speaker-->
                                <div class="max-w-sm mt-4">
                                    <!-- SearchBox -->
                                    <label class="block mb-2 text-sm font-medium text-[#f5f5f7]">Search for Speaker:</label>

                                    <div class="  w-full " data-hs-combo-box='{
                                                "groupingType": "default",
                                                "isOpenOnFocus": true,
                                                "apiUrl": "../assets/data/searchbox.json",
                                                "apiGroupField": "category",
                                                "outputItemTemplate": "<div data-hs-combo-box-output-item><span class=\"flex items-center cursor-pointer py-2 px-4 w-full text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-200 dark:focus:bg-neutral-700\"><div class=\"flex items-center w-full\"><div class=\"flex items-center justify-center rounded-full bg-gray-200 size-6 overflow-hidden me-2.5\"><img class=\"flex-shrink-0\" data-hs-combo-box-output-item-attr=&apos;[{\"valueFrom\": \"image\", \"attr\": \"src\"}, {\"valueFrom\": \"name\", \"attr\": \"alt\"}]&apos; /></div><div data-hs-combo-box-output-item-field=\"name\" data-hs-combo-box-search-text data-hs-combo-box-value></div></div><span class=\"hidden hs-combo-box-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span></span></div>",
                                                "groupingTitleTemplate": "<div class=\"text-xs uppercase text-gray-500 m-3 mb-1 dark:text-neutral-500\"></div>"
                                              }'>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                                                <svg class="flex-shrink-0 size-4 text-[#f5f5f7] " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="11" cy="11" r="8"></circle>
                                                    <path d="m21 21-4.3-4.3"></path>
                                                </svg>
                                            </div>
                                            <input class="py-3 ps-10 pe-4 block w-full border-[#424650] bg-[#2A2D35] rounded-lg text-sm focus:border-[#827FFF]  disabled:opacity-50 disabled:pointer-events-none " type="text" placeholder="Type a name" value="" data-hs-combo-box-input="">
                                        </div>

                                        <!-- SearchBox Dropdown -->
                                        <div class="absolute z-50 w-full  rounded-lg bg-[#2a2d35] border-[#424650]"  data-hs-combo-box-output="">
                                            <div class="max-h-72 rounded-b-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full  [&::-webkit-scrollbar-track]:bg-[#] [&::-webkit-scrollbar-thumb]:bg-neutral-500" data-hs-combo-box-output-items-wrapper=""></div>
                                        </div>
                                        <!-- End SearchBox Dropdown -->
                                    </div>
                                    <!-- End SearchBox -->
                                </div>


                                <div class="mt-4">
                                    <label for="message" class="block mb-2 text-sm font-medium text-[#f5f5f7] ">Description:</label>
                                    <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-[#f5f5f7] bg-[#2a2d35] rounded-lg border border-[#424650]  focus:border-[#827FFF] placeholder-gray-400 " placeholder="Explain the event in more details..."  ></textarea>
                                </div>

                                <div class="mt-4">
                                    <label class="block mb-2 text-sm font-medium text-white" for="user_avatar">Choose a Location:</label>

                                    <label for="Location" class="sr-only">Select a Location</label>
                                    <select id="Location" class="bg-[#2a2d35] text-[#f5f5f7] text-sm rounded-lg border border-[#424650] focus:border-[#827FFF] block w-full p-2.5">
                                        <option selected>Select a Location</option>
                                        <!-- Locations for the event -->
                                        <option value="Uskudar_Carsi_Campus">Üsküdar Çarşı Campus</option>
                                        <option value="Uskudar_Altunizade_Central_Campus">Üsküdar Altunizade Central Campus</option>
                                        <option value="Uskudar_Altunizade_South_Campus">Üsküdar Altunizade South Campus</option>
                                        <option value="Faculty_of_Medicine_NP_Campus">Faculty of Medicine NP Campus</option>
                                        <option value="Faculty_of_Dentistry_NP_Campus">Faculty of Dentistry NP Campus</option>
                                    </select>
                                </div>


                                <div class="mt-4">
                                    <label class="block mb-2 text-sm font-medium text-white" for="block">Choose a hall:</label>

                                    <label for="Hall" class="sr-only">Select a Hall</label>
                                    <select id="Hall" class="bg-[#2a2d35] text-[#f5f5f7] text-sm rounded-lg border border-[#424650] focus:border-[#827FFF] block w-full p-2.5">
                                        <option selected disabled>Select a Hall</option>
                                    </select>
                                </div>


                                <div class="mt-4">
                                    <label class="block mb-2 text-sm font-medium text-white" for="user_avatar">Choose a Tag:</label>
                                    <label for="Tags" class="sr-only">Select a Tag</label>
                                    <select id="Tags" class="bg-[#2a2d35] text-[#f5f5f7] text-sm rounded-lg border border-[#424650] focus:border-[#827FFF] block w-full p-2.5">
                                        <option selected>Select a Tag</option>
                                        <option value="Academic">Academic</option>
                                        <option value="Workshop">Workshop</option>
                                        <option value="Seminar">Seminar</option>
                                        <option value="Conference">Conference</option>
                                        <option value="Cultural">Cultural</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Networking">Networking</option>
                                        <option value="Social">Social</option>
                                        <option value="Arts">Arts</option>
                                        <option value="Volunteer">Volunteer</option>
                                        <option value="Career Development">Career Development</option>
                                        <option value="Special Event">Special Event</option>
                                        <option value="Online">Online</option>
                                        <option value="On-campus">On-campus</option>
                                        <option value="Off-campus">Off-campus</option>
                                    </select>
                                </div>
                                <div class="mt-4">
                                    <label class="block mb-2 text-sm font-medium text-white">Gender:</label>

                                    <label for="Gender" class="sr-only">Select Gender</label>
                                    <select id="Location" class="bg-[#2a2d35] text-[#f5f5f7] text-sm rounded-lg border border-[#424650] focus:border-[#827FFF] block w-full p-2.5">
                                        <option selected>Select Gender</option>
                                        <!--  Gender -->
                                        <option value="Both">Both</option>
                                        <option value="Women only">Women only</option>
                                        <option value="Men only">Men only</option>
                                    </select>
                                </div>
                                <div class="mt-4">
                                    <label for="Start-Time" class="block mb-2 text-sm font-medium text-[#f5f5f7]">Start Time:</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                            <svg class="w-4 h-4 text-[#f5f5f7]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <!-- Set the default value to "09:00" -->
                                        <input type="time" id="start-time" class="bg-[#2a2d35] border leading-none border-[#424650] text-[#f5f5f7] text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5" min="09:00" max="18:00" value="09:00" />
                                    </div>
                                </div>
                                <div>
                                </div>
                                <div class="relative max-w-sm mt-4">

                                    <label class="block mb-2 text-sm font-medium text-white">Start Date:</label>
                                    <div class="relative ">
                                        <div class=" absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                            <svg class=" w-4 h-4 text-gray-500 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                            </svg>
                                        </div>
                                        <input id="datepicker"   datepicker type="text" class="bg-[#2a2d35] border border-[#424650] text-[#f5f5f7] text-sm rounded-lg  focus:border-[#827FFF] block w-full pl-10 p-2.5   " placeholder="Select date" >

                                    </div>
                                </div>
                                <div class=" p-4 relative mt-4">


                                    <button type="submit" data-modal-target="eventUpdateSuccess" data-modal-toggle="eventUpdateSuccess"  class="  text-[#f5f5f7] inline-flex items-center bg-[#827FFF]  focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                                        Submit
                                    </button>



                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!------------------------------------------------------------------------------------------------->

        <!-- Start grid -->
    </div>
@endsection
@section('scripts')

    <!-------------------------Start of scripts----------------------------->

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

    <!-------------Location with hall classroom script-->
    <script>
        // Get references to the dropdowns
        var locationDropdown = document.getElementById("Location");
        var blockDropdown = document.getElementById("Hall");

        // Define the options for each block based on the location selection
        var blockOptions = {
            "Uskudar_Carsi_Campus": ["Classrom A", "Classrom B", "Classrom C", "Classrom D"],
            "Uskudar_Altunizade_Central_Campus": ["Classrom X", "Classrom Y", "Classrom Z"],
            "Uskudar_Altunizade_South_Campus": ["Classrom 1", "Classrom 2", "Classrom 3"],
            "Faculty_of_Medicine_NP_Campus": ["Classrom Block 1", "Medicine Block 2", "Medicine Block 3"],
            "Faculty_of_Dentistry_NP_Campus": ["Dentistry Block 1", "Dentistry Block 2", "Dentistry Block 3"]
        };

        // Function to populate the block dropdown based on the selected location
        function populateBlockDropdown() {
            // Clear existing options
            blockDropdown.innerHTML = '<option selected disabled>Select a Hall</option>';

            // Get the selected location
            var selectedLocation = locationDropdown.value;

            // Populate options based on the selected location
            if (blockOptions[selectedLocation]) {
                blockOptions[selectedLocation].forEach(function(option) {
                    var newOption = document.createElement("option");
                    newOption.text = option;
                    newOption.value = option;
                    blockDropdown.add(newOption);
                });
            }
        }

        // Event listener to call the populateBlockDropdown function when the location dropdown changes
        locationDropdown.addEventListener("change", populateBlockDropdown);

        // Populate block dropdown initially
        populateBlockDropdown();
    </script>
    <!--------------------------------------------------------------->

    <!--------Search for speaker script-->
    <script>
        // JavaScript to toggle the dropdown
        const dropdownButton = document.getElementById('dropdown-button');
        const dropdownMenu = document.getElementById('dropdown-menu');
        const searchInput = document.getElementById('search-input');
        let isOpen = false; // Set to true to open the dropdown by default

        // Function to toggle the dropdown state
        function toggleDropdown() {
            isOpen = !isOpen;
            dropdownMenu.classList.toggle('hidden', !isOpen);
        }

        // Set initial state
        toggleDropdown();

        dropdownButton.addEventListener('click', () => {
            toggleDropdown();
        });

        // Add event listener to filter items based on input
        searchInput.addEventListener('input', () => {
            const searchTerm = searchInput.value.toLowerCase();
            const items = dropdownMenu.querySelectorAll('a');

            items.forEach((item) => {
                const text = item.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    </script>
@endsection
