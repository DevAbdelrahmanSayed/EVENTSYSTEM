
@if(Auth::user()->type === 'student' ||Auth::user()->type === 'club')
<nav class="bg-[#323741] border-b border-[#424650] px-4 py-2.5 fixed left-0 right-0 top-0 z-50">
    <div class="flex flex-wrap justify-between items-center">
        <div class="flex justify-start items-center">
            <button
                data-drawer-target="drawer-navigation"
                data-drawer-toggle="drawer-navigation"
                aria-controls="drawer-navigation"
                class="p-2 mr-2 rounded-lg cursor-pointer md:hidden  focus:bg-gray-700  focus:ring-gray-700 text-gray-400 hover:bg-gray-700 hover:text-white"
            >
                <svg
                    aria-hidden="true"
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
                <svg
                    aria-hidden="true"
                    class="hidden w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
                <span class="sr-only">Toggle sidebar</span>
            </button>
            <a href="{{route('dashboard.index')}}" class="flex items-center justify-between mr-4">
                <img
                    src="{{asset('assets/image/logo2.png')}}"
                    class="mr-3 h-8"
                    style="height: 60px;"/>
                <span class="self-center text-2xl font-bold whitespace-nowrap  text-stroke-white text-[#F5F5F7]">Student Club</span>
            </a>
        </div>
        <div class="flex items-center lg:order-2">
            <button
                type="button"
                data-drawer-toggle="drawer-navigation"
                aria-controls="drawer-navigation"
                class="p-2 mr-1 rounded-lg md:hidden  text-gray-400 hover:text-white hover:bg-gray-700  foucus:ring-2 focus:ring-gray-600">
                <span class="sr-only">Toggle search</span>
            </button>
        </div>
    </div>
</nav>
<!-- Sidebar -->
<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-[#323741] border-r  md:translate-x-0 border-[#424650]"
    aria-label="Sidenav"
    id="drawer-navigation">
    <a href="#" class="block py-2 px-4  text-gray-400 hover:bg-gray-700 rounded-md"></a>
    <div class="py-4 px-4 bg-[#323741] mb-2">
        <div class="flex items-center">
            <img src="{{Auth::user()->profile}}" alt="Profile" class="w-12 h-12 rounded-full" />
            <div class="ml-3">
                <p class="text-lg font-semibold text-gray-900 text-white">{{Auth::user()->name}}r</p>
                <p class="text-white">ID: {{Auth::user()->un_id}}</p>
            </div>
            <a href="{{route('notification.index')}}" class="relative inline-flex rounded-full  hover:bg-[#827FFF] ml-5">
                <svg class="w-[32px] h-[32px] text-white round " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.292-.538 1.292H5.538C5 18 5 17.301 5 16.708c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365ZM8.733 18c.094.852.306 1.54.944 2.112a3.48 3.48 0 0 0 4.646 0c.638-.572 1.236-1.26 1.33-2.112h-6.92Z"/>
                </svg>
                <span class="absolute min-w-[12px] min-h-[12px] rounded-full py-1 px-1 text-xs font-medium content-[''] leading-none grid place-items-center top-[1%] right-[0%] translate-x-2/4 -translate-y-2/4 bg-red-500 text-white">
            </span>
            </a>
        </div>
    </div>
    <div class="overflow-y-auto py-3 px-3 h-full bg-[#323741] border-t border-[#424650]">
        <!-- Search form if needed -->
        <ul class="space-y-2 ">
            @if(Auth::user()->type == 'club' && Auth::user()->type == 'sks')
            <li>
                <a
                    href="#"
                    class="flex items-center p-2 text-base font-medium  rounded-lg text-white hover:bg-[#827FFF]  group  "
                    aria-current="page"
                >
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                    <span class="ml-3 text-white">My Clubs</span>
                </a>
            </li>
            <li>
                <a
                    href="#"
                    class="border-t border-[#424650] flex items-center p-2 text-base font-medium   text-white hover:bg-[#827FFF] " aria-controls="dropdown-authentication"
                    data-collapse-toggle="dropdown-authentication1"
                >
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.121 1.879-.707-.707m5.656 5.656-.707-.707m-4.242 0-.707.707m5.656-5.656-.707.707M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                    <span class="ml-3 text-white">Content Management </span>
                </a>
            </li>
            <ul id="dropdown-authentication1" class="hidden py-2 space-y-2 ">
                <li>
                    <a href="Create event.html" class="border-t border-[#424650] flex items-center p-2 pl-3 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-[#827FFF] ">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>

                        <span class="ml-3 text-white"> Create Event</span>
                    </a>
                </li>
                <li>
                    <a href="create post.html" class="flex items-center p-2 pl-3 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-[#827FFF]  ">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <span class="ml-3 text-white"> Create Post</span>
                    </a>
                </li>

            </ul>
            @endif
            <li>
                <a
                    href="{{route('clubs.index')}}"
                    class="border-t border-[#424650] flex items-center p-2 text-base font-medium  rounded-lg text-white hover:bg-[#827FFF]  group  "
                    aria-current="page"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    <span class="ml-3 text-white">Clubs</span>
                </a>
            </li>
                <li>
                    <a
                        href="#"
                        class="border-t border-[#424650] flex items-center p-2 text-base font-medium   text-white hover:bg-[#827FFF] " aria-controls="dropdown-authentication"
                        data-collapse-toggle="dropdown-authentication1"
                    >
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.121 1.879-.707-.707m5.656 5.656-.707-.707m-4.242 0-.707.707m5.656-5.656-.707.707M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        </svg>

                        <span class="ml-3 text-white">Content Management </span>

                    </a>
                </li>
                <ul id="dropdown-authentication1" class="hidden py-2 space-y-2 ">
                    <li>
                        <a href="abed" class="border-t border-[#424650] flex items-center p-2 pl-3 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-[#827FFF] ">
                            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>


                            <span class="ml-3 text-white">  clubs</span>
                        </a>
                    </li>
                    <li>
                        <a href="EVENTS.html" class="border-t border-[#424650] flex items-center p-2 pl-3 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-[#827FFF] ">
                            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>


                            <span class="ml-3 text-white">  Events</span>
                        </a>
                    </li>
                    <li>
                        <a href="post.html" class="flex items-center p-2 pl-3 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-[#827FFF]  ">
                            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>


                            <span class="ml-3 text-white">  Posts</span>
                        </a>
                    </li>




                </ul>

                <li>
                <a
                    href="{{route('calender.index')}}"
                    class="border-t border-[#424650] flex items-center p-2 text-base font-medium  rounded-lg text-white hover:bg-[#827FFF] "
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <span class="ml-3 text-white">Weekly activity</span>
                </a>
            </li>
            <li>
                <a
                    href="#"
                    class="border-t border-[#424650] flex items-center p-2 text-base font-medium  rounded-lg text-white hover:bg-[#827FFF] " aria-controls="dropdown-authentication"
                    data-collapse-toggle="dropdown-authentication"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                    <span class="ml-3 text-white">Settings </span>

                </a>
            </li>
            <ul id="dropdown-authentication" class="hidden py-2 space-y-2">
                <li>
                    <a href="{{route('profile.index')}}" class="flex items-center p-2 pl-3 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-[#827FFF]  ">
                        <svg class="svg-icon w-5 h-5 text-white" viewBox="0 0 20 20" stroke="white">
                            <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z" ></path>
                        </svg>

                        <span class="ml-3 text-white"> My Profile</span>
                    </a>
                </li>
            </ul>
            <li>
                <a
                    href="{{route('logout')}}"
                    class="border-t border-[#424650] flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-[#827FFF]  "
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"><path d="M10 3H6a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h4M16 17l5-5-5-5M19.8 12H9"/></svg>
                    <span class="ml-3 text-white">Log out </span>
                </a>
            </li>
        </ul>
    </div>

</aside>
@endif


@if(Auth::user()->type === 'sks')

<nav class="bg-[#323741] border-b border-[#424650] px-4 py-2.5 fixed left-0 right-0 top-0 z-50">
    <div class="flex flex-wrap justify-between items-center">
        <div class="flex justify-start items-center">
            <button
                data-drawer-target="drawer-navigation"
                data-drawer-toggle="drawer-navigation"
                aria-controls="drawer-navigation"
                class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden  focus:bg-gray-700  focus:ring-gray-700 text-gray-400 hover:bg-gray-700 hover:text-white"
            >
                <svg
                    aria-hidden="true"
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
                <svg
                    aria-hidden="true"
                    class="hidden w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
                <span class="sr-only">Toggle sidebar</span>
            </button>
            <a href="Dashbord.html" class="flex items-center justify-between mr-4">
                <img
                    src="assets\js\pages\css\image\logo2.png"
                    class="mr-3 h-8"
                    style="height: 60px;"
                />
                <span class="self-center text-2xl font-bold whitespace-nowrap  text-stroke-white text-[#F5F5F7]">Student Club</span>


            </a>

        </div>
        <div class="flex items-center lg:order-2">
            <button
                type="button"
                data-drawer-toggle="drawer-navigation"
                aria-controls="drawer-navigation"
                class="p-2 mr-1 rounded-lg md:hidden  text-gray-400 hover:text-white hover:bg-gray-700  foucus:ring-2 focus:ring-gray-600"
            >
                <span class="sr-only">Toggle search</span>

            </button>


        </div>
    </div>
</nav>
<!-- Sidebar -->
<aside class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-[#323741] border-r  md:translate-x-0 border-[#424650]" aria-label="Sidenav" id="drawer-navigation">
    <a href="#" class="block py-2 px-4  text-gray-400 hover:bg-gray-700 rounded-md"></a>

    <div class="py-4 px-4 bg-[#323741] mb-2">
        <div class="flex items-center">
            <img src="assets/images/widgets/prof.jpeg" alt="Profile" class="w-12 h-12 rounded-full" />
            <div class="ml-3">
                <p class="text-lg font-semibold text-gray-900 text-white">{{Auth::user()->name}}</p>
                <p class="text-white">ID: {{Auth::user()->un_id}}</p>
            </div>

        </div>
    </div>




    <div class="overflow-y-auto py-3 px-3 h-full bg-[#323741] border-t border-[#424650]">
        <!-- Search form if needed -->
        <ul class="space-y-2 ">
            <li>
                <a
                    href="AddUser.html"
                    class="flex items-center p-2 text-base font-medium  rounded-lg text-white hover:bg-[#827FFF]  group  "
                    aria-current="page"
                >
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.121 1.879-.707-.707m5.656 5.656-.707-.707m-4.242 0-.707.707m5.656-5.656-.707.707M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>

                    <span class="ml-3 text-white">Users</span>
                </a>
            </li>
            <li>
                <a
                    href="#"
                    class="border-t border-[#424650] flex items-center p-2 text-base font-medium   text-white hover:bg-[#827FFF] " aria-controls="dropdown-authentication"
                    data-collapse-toggle="dropdown-authentication1"
                >
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.121 1.879-.707-.707m5.656 5.656-.707-.707m-4.242 0-.707.707m5.656-5.656-.707.707M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>

                    <span class="ml-3 text-white">Content Management </span>

                </a>
            </li>
            <ul id="dropdown-authentication1" class="hidden py-2 space-y-2 ">
                <li>
                    <a href="{{route('clubs.index')}}" class="border-t border-[#424650] flex items-center p-2 pl-3 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-[#827FFF] ">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>


                        <span class="ml-3 text-white">  clubs</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('events.index')}}" class="border-t border-[#424650] flex items-center p-2 pl-3 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-[#827FFF] ">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>


                        <span class="ml-3 text-white">  Events</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('posts.index')}}" class="flex items-center p-2 pl-3 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-[#827FFF]  ">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>


                        <span class="ml-3 text-white">  Posts</span>
                    </a>
                </li>
            </ul>
            <li>
                <a
                    href="apps-calendar.html"
                    class="border-t border-[#424650] flex items-center p-2 text-base font-medium  rounded-lg text-white hover:bg-[#827FFF] "
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <span class="ml-3 text-white">Weekly activity</span>
                </a>
            </li>
            <li>
                <a
                    href="#"
                    class="border-t border-[#424650] flex items-center p-2 text-base font-medium  rounded-lg text-white hover:bg-[#827FFF] " aria-controls="dropdown-authentication"
                    data-collapse-toggle="dropdown-authentication"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                    <span class="ml-3 text-white">Settings </span>

                </a>
            </li>
            <ul id="dropdown-authentication" class="hidden py-2 space-y-2">
                <li>
                    <a href="myprofile.html" class="flex items-center p-2 pl-3 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-[#827FFF]  ">
                        <svg class="svg-icon w-5 h-5 text-white" viewBox="0 0 20 20" stroke="white">
                            <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z" ></path>
                        </svg>

                        <span class="ml-3 text-white"> My Profile</span>
                    </a>
                </li>
            </ul>


            <li>
                <a
                    href="{{route('logout')}}"
                    class="border-t border-[#424650] flex items-center p-2 text-base font-medium text-gray-900 rounded-lg transition duration-75 hover:bg-[#827FFF]  "
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"><path d="M10 3H6a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h4M16 17l5-5-5-5M19.8 12H9"/></svg>
                    <span class="ml-3 text-white">Log out </span>
                </a>
            </li>
        </ul>
    </div>

</aside>
@endif

