@extends('layout.app')
@section('content')
    <div class="antialiased bg-[#23242A]">
        <!-- User Table ends here -->

        <!-- Club Table starts here -->
        <section class="bg-[#2A2D35] p-4  md:ml-64 h-auto pt-15 mt-20">
            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                <div class="bg-[#323741] relative  sm:rounded-lg overflow-hidden border border-[#424650]  ">
                    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">

                        <div class="w-full md:w-1/2">
                            <!-----Header table--->
                            <form class="flex items-center">
                                <label for="searchBtnClubs" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" id="searchBtnClubs" class="bg-[#2a2d35] text-[#f5f5f7] text-sm rounded-lg   block w-full pl-10 p-2 border border-[#424650] focus:border-[#827FFF] " placeholder="Search">
                                </div>
                            </form>
                        </div>
                        <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            <!-----Add Club option-->
                            <button id="addClubBtn" data-modal-target="formClub" data-modal-toggle="formClub" type="button" class="text-[#f5f5f7] inline-flex items-center bg-[#827FFF]  focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                </svg>
                                Create Club
                            </button>
                            <!------Filter options for clubs--->
                            <div class="flex items-center space-x-3 w-full md:w-auto">
                                <button data-modal-toggle="Category-modal" data-modal-target="Category-modal"  class="text-[#f5f5f7] inline-flex items-center bg-[#827FFF]  focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                    Create Category</button>
                                <!-------Filter clubs by Category--->
                                <button id="filterDropdownButtonClub" data-dropdown-toggle="filterDropdownClub" class="text-[#f5f5f7] inline-flex items-center bg-[#827FFF]  focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-white" viewbox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                                    </svg>
                                    Filter
                                    <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                </button>
                                <div id="filterDropdownClub" class="z-10 hidden w-48 p-3 bg-[#2a2d35] rounded-lg shadow ">
                                    <h6 class="mb-3 text-sm font-medium text-white">Choose a category</h6>
                                    <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButtonClub">

                                        <li class="flex items-center">
                                            <input id="academicFilter" type="checkbox" value="" class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]">
                                            <label for="academicFilter" class="ml-2 text-sm font-medium text-white">Academic</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="culturalFilter" type="checkbox" value="" class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]">
                                            <label for="culturalFilter" class="ml-2 text-sm font-medium text-white">Cultural</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="SocialFilter" type="checkbox" value="" class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]">
                                            <label for="SocialFilter" class="ml-2 text-sm font-medium text-white">Social</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="ServiceFilter" type="checkbox" value="" class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]">
                                            <label for="ServiceFilter" class="ml-2 text-sm font-medium text-white">Service</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="ReligiousFilter" type="checkbox" value="" class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]">
                                            <label for="ReligiousFilter" class="ml-2 text-sm font-medium text-white">Religious</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="ArtFilter" type="checkbox" value="" class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]">
                                            <label for="ArtFilter" class="ml-2 text-sm font-medium text-white">Art</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="PoliticalFilter" type="checkbox" value="" class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]">
                                            <label for="PoliticalFilter" class="ml-2 text-sm font-medium text-white">Political</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="SportsFilter" type="checkbox" value="" class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]">
                                            <label for="SportsFilter" class="ml-2 text-sm font-medium text-white">Sports</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="MediaFilter" type="checkbox" value="" class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]">
                                            <label for="MediaFilter" class="ml-2 text-sm font-medium text-white">Media</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="EnvironmentFilter" type="checkbox" value="" class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]">
                                            <label for="EnvironmentFilter" class="ml-2 text-sm font-medium text-white">Environment</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="CommunicationFilter" type="checkbox" value="" class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]">
                                            <label for="CommunicationFilter" class="ml-2 text-sm font-medium text-white">Communication</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="DancingFilter" type="checkbox" value="" class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]">
                                            <label for="DancingFilter" class="ml-2 text-sm font-medium text-white">Dancing</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="ProgrammingFilter" type="checkbox" value="" class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]">
                                            <label for="ProgrammingFilter" class="ml-2 text-sm font-medium text-white">Programming</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="GamingFilter" type="checkbox" value="" class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]">
                                            <label for="GamingFilter" class="ml-2 text-sm font-medium text-white">Gaming</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="AIFilter" type="checkbox" value="" class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]">
                                            <label for="AIFilter" class="ml-2 text-sm font-medium text-white">AI</label>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div  class="overflow-x-auto mb-5">
                        <table id="clubTable" class="w-full text-sm text-left text-white " data-rows-per-page="10">
                            <thead class="text-xs text-white uppercase bg-[#2a2d35]  ">
                            <!-------------Column Type----------->
                            <tr>
                                <th scope="col" class="px-4 py-3 border border-[#424650]">#</th>
                                <th scope="col" class="px-4 py-3 border border-[#424650]">Club Name</th>
                                <th scope="col" class="px-4 py-3 border border-[#424650]">Category</th>
                                <th scope="col" class="px-4 py-3 border border-[#424650]">Club Manager</th>
                                <th scope="col" class="px-4 py-3 border border-[#424650]">Creation Date</th>
                                <th scope="col" class="px-4 py-3 border border-[#424650]">Action</th>
                            </tr>
                            </thead>
                            <!-------------Rows data----------->

                            <tbody>
                            @foreach($clubs as $club)
                            <tr class="border-b border-gray-700">

                                <td class="px-4 py-3">{{$club->id}}</td>
                                <td class="px-4 py-3">{{$club->name}}</td>
                                <td class="px-4 py-3">{{$club->category->name}}</td>
                                <td class="px-4 py-3">{{$club->representative->name}}</td>
                                <td class="px-4 py-3">{{$club->created_at->format('Y-m-d')}}</td>
                                <td class="px-4 py-3 mb-5">
                                    <div class="flex items-center space-x-2">
                                        <button id="editClubBtn" data-modal-target="clubEditForm" data-modal-toggle="clubEditForm"   class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded text-xs h-6">
                                            EditClub
                                        </button>
                                        <button id="deleteClubBtn" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded text-xs h-6">
                                            DeleteClub
                                        </button>
                                        <button id="addEventBtn" data-modal-target="eventEditForm" data-modal-toggle="eventEditForm" class="bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-2 rounded text-xs h-6">
                                            AddEvent
                                        </button>
                                        <button id="addPostBtn" data-modal-toggle="postEditForm" data-club-id="{{$club->id}}" data-modal-target="postEditForm" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-2 rounded text-xs h-6">
                                            AddPost
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </section>








        <!-- Modal club -->
            <div id="postEditForm" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

                <div class="relative p-4 w-full max-w-md max-h-full">


                    <!-- Modal content -->
                    <div class="relative bg-[#323741] rounded-lg shadow border border-[#424650] ">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-white">
                                add Post
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


                        <form class="max-w-lg mx-auto p-4" action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="club_id" id="club_id" value="">
                            <label class="block mb-2 text-sm font-medium text-white" for="user_avatar">Post's Poster:</label>
                            <input name="image" class="block w-full text-sm text-[#f5f5f7] border border-[#424650] rounded-lg cursor-pointer bg-[#2a2d35] text-[#424650] focus:outline-none placeholder-white " aria-describedby="user_avatar_help" id="user_avatar" type="file" accept="image/*">


                        <div class=" p-4 relative">
                            <label for="helper-text" class="block mb-2 text-sm font-medium text-[#f5f5f7]">Post's Title:</label>
                            <input name="post_name" type="text" id="post-title" class="bg-[#2a2d35] border border-[#424650] text-white text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5 placeholder-white" placeholder="Enter the title of your post..">
                        </div>

                        <div class=" p-4 relative">
                            <label for="message" class="block mb-2 text-sm font-medium text-[#f5f5f7] ">the description of the Post:</label>
                            <textarea name="post_des" id="message" rows="4" class="block p-2.5 w-full text-sm text-[#f5f5f7] bg-[#2a2d35] rounded-lg border border-[#424650]  focus:border-[#827FFF] placeholder-white " placeholder="Explain the Post in more details..."  ></textarea>

                            <button type="button" id="cancelUserForm" class="mt-4 p-4 text-[#f5f5f7] inline-flex items-center bg-red-600 focus:ring-2 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center m-3"
                                    data-modal-toggle="postEditForm">
                                Cancel
                            </button>

                            <button type="submit" class="  text-[#f5f5f7] inline-flex items-center bg-[#827FFF]  focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center  ">
                                Submit
                            </button>
                        </div>

                        </form>
                    </div>
                </div>

            </div>
        <!-- edite Club -->
        <div id="clubEditForm" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-[#323741] rounded-lg shadow border border-[#424650] ">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-white">
                            Update Club Info
                        </h3>
                        <button type="button" class="absolute top-2.5 right-2.5 text-[#f5f5f7] border border-[#424650] bg-[#2a2d35] rounded-lg hover:bg-[#827FFF] focus:ring-2 focus:outline-none focus:ring-[#827FFF] rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="clubEditForm">
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
                        <input class="block w-full text-sm text-[#f5f5f7] border border-[#424650] rounded-lg cursor-pointer bg-[#2a2d35] text-[#424650] focus:outline-none  " aria-describedby="user_avatar_help" id="user_avatar" type="file" accept="image/*">
                        <div class=" text-xs text-[#f5f5f7]" id="user_avatar_help">Clubs logo are useful for establishing your club's visual identity, and leaving a memorable impression on visitors.</div>
                    </form>

                    <div class=" p-4 relative">
                        <label for="helper-text" class="block mb-2 text-sm font-medium text-[#f5f5f7]">Update Club's Name:</label>
                        <input type="text" id="post-title" class="bg-[#2a2d35] border border-[#424650] text-white text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5 placeholder-white" placeholder="Enter the title of your post..">
                    </div>

                    <div class=" p-4 relative">


                        <label for="message" class="block mb-2 text-sm font-medium text-[#f5f5f7] ">Update the description of the Club:</label>
                        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-[#f5f5f7] bg-[#2a2d35] rounded-lg border border-[#424650]  focus:border-[#827FFF] placeholder-white " placeholder="Explain the event in more details..." required ></textarea>
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

                        <button type="button" id="cancelUserForm" class="mt-4 p-4 text-[#f5f5f7] inline-flex items-center bg-red-600 focus:ring-2 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center m-3"
                                data-modal-toggle="postEditForm">
                            Cancel
                        </button>

                        <button type="submit" class="  text-[#f5f5f7] inline-flex items-center bg-[#827FFF]  focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center  ">
                            Submit
                        </button>



                    </div>
                </div>
            </div>

        </div>
        <!-- edite event -->
        <div id="eventEditForm" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-screen-sm max-h-full mx-auto">

                <div class="relative bg-[#323741] rounded-lg shadow border border-[#424650]">
                    <!-- header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-[#424650]">
                        <h3 class="text-lg font-semibold text-[#f5f5f7]">
                            Update Event Info
                        </h3>
                        <button type="button" class="absolute top-2.5 right-2.5 text-[#f5f5f7] border border-[#424650] bg-[#2a2d35] rounded-lg hover:bg-[#827FFF] focus:ring-2 focus:outline-none focus:ring-[#827FFF] rounded-lg text-sm p-1.5 ml-auto inline-flex items-center "data-modal-toggle="eventEditForm" >
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>

                    <!-- form body -->
                    <div class="mt-4 flex flex-wrap">


                        <!----Left section in form---->

                        <form class="p-2 w-1/2 relative max-w-lg">
                            <!-------Uplead photo for event logo -->
                            <label class=" block mb-2 text-sm font-medium text-white" for="user_avatar">Upload Event's Picture:</label>
                            <input class="block w-full text-sm text-[#f5f5f7] border border-[#424650] rounded-lg cursor-pointer bg-[#2a2d35] text-[#424650] focus:outline-none  " aria-describedby="user_avatar_help" id="user_avatar" type="file" accept="image/*">
                            <div class="mt-1 text-xs text-[#f5f5f7]" id="user_avatar_help">Upload a photo highlighting details for your event.</div>
                            <!---------------------------->

                            <!--------Event name field  -->
                            <div class="mt-2">
                                <label for="helper-text" class="block mb-2 text-sm font-medium text-[#f5f5f7] ">Event Name:</label>
                                <input type="text" id="eventName"  class="bg-[#2a2d35] border border-[#424650]  text-gray-200 text-sm rounded-lg  focus:border-[#827FFF] block w-full p-2.5    dark:placeholder-gray-400 " placeholder="Enter the name of your Event..">

                            </div>
                            <!---------------------------->

                            <!--------Search for speaker field-->
                            <div class=" mt-2">
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
                            <!---------------------------->

                            <!--------Description field-->
                            <div class="mt-2">
                                <label for="descriptionEvent" class="block mb-2 text-sm font-medium text-[#f5f5f7] ">Description:</label>
                                <textarea id="descriptionEvent" rows="4" class="block p-2.5 w-full text-sm text-[#f5f5f7] bg-[#2a2d35] rounded-lg border border-[#424650]  focus:border-[#827FFF] placeholder-gray-400 " placeholder="Explain the event in more details..."  ></textarea>
                            </div>
                            <div class="mt-2">

                                <label class="block mb-2 text-sm font-medium text-white">Start Date:</label>
                                <div class="relative ">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <svg class=" w-4 h-4 text-gray-500 text-gray-400"  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </div>
                                    <input id="dateEvent"  type="date" class=" bg-[#2a2d35] border border-[#424650] text-[#f5f5f7] text-sm rounded-lg focus:outline-none focus:border-[#827FFF] block w-full pl-10 p-2.5" placeholder="Select date" >
                                </div>


                            </div>
                            <!---------------------------->
                        </form>
                        <!------------------------------------------------->
                        <!----Right section in form---->
                        <form class="p-1 w-1/2 relative max-w-lg">
                            <!---Select location-->
                            <div class="mt-2">
                                <label class="block mb-2 text-sm font-medium text-white" for="user_avatar">Choose a Location:</label>

                                <label for="Location" class="sr-only">Select a Location</label>
                                <select id="Location" class="bg-[#2a2d35] text-[#f5f5f7] text-sm rounded-lg border border-[#424650] focus:border-[#827FFF] block w-full p-2.5">
                                    <option selected>Select a Location</option>
                                    <!-- Locations for the event -->
                                    <option value="Uskudar_Carsi_Campus">Üsküdar Çarşı Campus</option>
                                </select>
                            </div>
                            <!----Select hall-->
                            <div class="mt-2">
                                <label class="block mb-2 text-sm font-medium text-white" for="block">Choose a hall:</label>

                                <label for="Hall" class="sr-only">Select a Hall</label>
                                <select id="Hall" class="bg-[#2a2d35] text-[#f5f5f7] text-sm rounded-lg border border-[#424650] focus:border-[#827FFF] block w-full p-2.5">
                                    <option selected disabled>Select a Hall</option>
                                </select>
                            </div>
                            <!--------Select tag-->
                            <div class="mt-2">
                                <label class="block mb-2 text-sm font-medium text-white" for="user_avatar">Choose a Tag:</label>
                                <label for="Tags" class="sr-only">Select a Tag</label>
                                <select id="Tags" class="bg-[#2a2d35] text-[#f5f5f7] text-sm rounded-lg border border-[#424650] focus:border-[#827FFF] block w-full p-2.5">
                                    <option selected>Select a Tag</option>
                                    <option value="Academic">Academic</option>
                                </select>
                            </div>
                            <!--------Select gender-->
                            <div class="mt-2">
                                <label class="block mb-2 text-sm font-medium text-white">Gender:</label>

                                <label for="gender" class="sr-only">Select Gender</label>
                                <select id="gender" class="bg-[#2a2d35] text-[#f5f5f7] text-sm rounded-lg border border-[#424650] focus:border-[#827FFF] block w-full p-2.5">
                                    <option selected>Select Gender</option>
                                    <!--  Gender -->
                                    <option value="Both">Both</option>
                                    <option value="Women only">Women only</option>
                                    <option value="Men only">Men only</option>
                                </select>
                            </div>

                            <!----Start Time -->
                            <div class="mt-2">
                                <label for="Start-Time" class="block mb-2 text-sm font-medium text-[#f5f5f7]">Start Time:</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-[#f5f5f7]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <!-- Set the default value to "09:00" -->
                                    <input type="time" id="startTime" class="bg-[#2a2d35] border leading-none border-[#424650] text-[#f5f5f7] text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5" min="09:00" max="18:00" value="09:00" />
                                </div>
                            </div>

                            <!-----End Time -->
                            <div class="mt-2">
                                <label for="End-Time" class="block mb-2 text-sm font-medium text-[#f5f5f7]">End Time:</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-[#f5f5f7]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <!-- Set the default value to "06:00" -->
                                    <input type="time" id="endTime" class="bg-[#2a2d35] border leading-none border-[#424650] text-[#f5f5f7] text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5" min="09:00" max="18:00" value="18:00" />
                                </div>
                            </div>

                            <!-------Select Date------>


                            <!---------Submit button-->
                            <div class=" p-1 mt-4 flex justify-end">

                                <button  type="submit" id="submitUserForm" class="mt-4 p-4 text-[#f5f5f7] inline-flex items-center bg-[#827FFF]  focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 ">
                                    Submit

                                </button>
                                <button type="submit" id="cancelUserForm" class="mt-4 p-4 text-[#f5f5f7] inline-flex items-center bg-red-600   focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                                    Cancel
                                </button>

                            </div>

                        </form>


                    </div>
                </div>
            </div>

        </div>

        <!-- Modal toggle -->


        <!-- Create Club -->
        <div id="formClub" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-screen-sm max-h-full mx-auto">

                <div class="relative bg-[#323741] rounded-lg shadow border border-[#424650]">
                    <!-- header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-[#424650]">
                        <h3 class="text-xl font-semibold text-white">
                            Create Club
                        </h3>
                        <button type="button" class="absolute top-2.5 right-2.5 text-[#f5f5f7] border border-[#424650] bg-[#2a2d35] rounded-lg hover:bg-[#827FFF] focus:ring-2 focus:outline-none focus:ring-[#827FFF] rounded-lg text-sm p-1.5 ml-auto inline-flex items-center "data-modal-toggle="formClub" >
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>








                    <!-- form club -->
                    <div id="postEditForm"  class="mt-4 flex flex-wrap">
                        <form class="w-full max-w-2xl mx-auto" id="clubForm" action="{{ route('clubs.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <!-- Left Section in Form -->
                            <div class="p-2 w-1/2">
                                <!-- Hidden input field for storing the selected user ID -->
                                <input type="hidden" id="selectedRepresentedId" name="represented_id" value="">

                                <!-- Upload photo for event logo -->
                                <div>
                                    <label class="block mb-2 text-sm font-medium text-white" for="user_avatar">Club's logo:</label>
                                    <input name="image" class="block w-full text-sm text-[#f5f5f7] border border-[#424650] rounded-lg cursor-pointer bg-[#2a2d35] text-[#424650] focus:outline-none" id="user_avatar" type="file" accept="image/*">
                                </div>

                                <!-- Event name field -->
                                <div class="mt-4">
                                    <label class="block mb-2 text-sm font-medium text-white" for="club_name">CLUB NAME</label>
                                    <input name="club_name" type="text" id="club_name" class="bg-[#2a2d35] border border-[#424650] text-white text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5 placeholder-white" placeholder="Enter your Club Name" required />
                                </div>

                                <!-- Search for speaker field -->
                                <div class="mt-4">
                                    <label class="block mb-2 text-sm font-medium text-[#f5f5f7]" for="searchInput">Search for Club Manager:</label>
                                    <div class="relative w-full">
                                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                                            <svg class="flex-shrink-0 size-4 text-[#f5f5f7]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <path d="m21 21-4.3-4.3"></path>
                                            </svg>
                                        </div>
                                        <input id="searchInput" class="py-3 pl-10 pr-4 w-full border-[#424650] bg-[#2A2D35] rounded-lg text-sm text-[#f5f5f7] focus:border-[#827FFF] placeholder-[#f5f5f7]" type="text" placeholder="Type a name" autocomplete="off">
                                        <div id="searchResults" class="absolute z-50 w-full mt-1 rounded-lg bg-[#2a2d35] border-[#424650] hidden">
                                            <!-- Results will appear here -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Section in Form -->
                            <div class="p-1 w-1/2">

                                <!-- Club's Category Selector -->
                                <div class="mt-4">
                                    <label class="block mb-2 text-sm font-medium text-white" for="category">Club's Category:</label>
                                    <select id="category" name="category_id" class="bg-[#2a2d35] text-[#f5f5f7] text-sm rounded-lg border border-[#424650] focus:border-[#827FFF] block w-full p-2.5">
                                        <option value="">Select a Category</option>
                                        @foreach($clubs as $club)
                                            <option value="{{ $club->category->id }}">{{ $club->category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Description Textarea -->
                                <div class="mt-4">
                                    <label for="description" class="block mb-2 text-sm font-medium text-[#f5f5f7]">Description:</label>
                                    <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-[#f5f5f7] bg-[#2a2d35] rounded-lg border border-[#424650] focus:border-[#827FFF] placeholder-gray-400" placeholder="Explain the event in more details..." required></textarea>
                                </div>
                            </div>

                            <!-- Submit and Cancel Buttons -->
                            <div class="w-full p-1 mt-4 flex justify-end">
                                <button type="submit" id="submitUserForm" class="mt-4 p-4 text-[#f5f5f7] inline-flex items-center bg-[#827FFF] focus:ring-2 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3">
                                    Submit
                                </button>

                                <button type="button" id="cancelUserForm" class="mt-4 p-4 text-[#f5f5f7] inline-flex items-center bg-red-600 focus:ring-2 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center m-3"
                                        data-modal-toggle="postEditForm">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>
        {{--end of the club--}}
        <div id="Category-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-[#323741] rounded-lg shadow border border-[#424650]">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-white">
                            Create Category
                        </h3>
                        <button type="button" class="absolute top-2.5 right-2.5 text-[#f5f5f7] border border-[#424650] bg-[#2a2d35] rounded-lg hover:bg-[#827FFF] focus:ring-2 focus:outline-none focus:ring-[#827FFF] rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="Category-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" action="#">
                            <div>
                                <label for="text" class="block mb-2 text-sm font-medium text-white" >Name of Category</label>
                                <input type="text" name="user name" id="user name" class="bg-[#2a2d35] border border-[#424650] text-white text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5 placeholder-white" placeholder="Enter your Catogray" required />
                            </div>





                            <div class="mt-8 flex items-center justify-end ">

                                <button type="submit"   class=" mt-4 text-[#f5f5f7] inline-flex items-center bg-[#827FFF]  focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                                    Save
                                </button>


                            </div>

                        </form>
                    </div>

                </div>

            </div>

        </div>
        @include('layout.pagination',['paginationData' => $clubs])

        <!-- Club Table ends here -->
    </div>

@endsection

<!----------------------------------------------------->
@section('scripts')
<script>
    // Enable search functionality
    document.getElementById("searchBtnClubs").addEventListener("input", function() {
        const searchTerm = this.value.toLowerCase();
        const tableRows = document.querySelectorAll("#clubTable tbody tr");

        tableRows.forEach(row => {
            const clubName = row.cells[1].textContent.toLowerCase();
            if (clubName.includes(searchTerm)) {
                row.style.display = "table-row";
            } else {
                row.style.display = "none";
            }
        });
    });

    // Show alert when "Create Club" button is clicked


    // Filter data based on selected category
    document.querySelectorAll('input[type="checkbox"]').forEach(input => {
        input.addEventListener("change", function() {
            const academicFilter = document.getElementById("academicFilter").checked;
            const culturalFilter = document.getElementById("culturalFilter").checked;
            const socialFilter = document.getElementById("SocialFilter").checked;
            const serviceFilter = document.getElementById("ServiceFilter").checked;
            const religiousFilter = document.getElementById("ReligiousFilter").checked;
            const artFilter = document.getElementById("ArtFilter").checked;
            const politicalFilter = document.getElementById("PoliticalFilter").checked;
            const sportsFilter = document.getElementById("SportsFilter").checked;
            const mediaFilter = document.getElementById("MediaFilter").checked;
            const environmentFilter = document.getElementById("EnvironmentFilter").checked;
            const communicationFilter = document.getElementById("CommunicationFilter").checked;
            const dancingFilter = document.getElementById("DancingFilter").checked;
            const programmingFilter = document.getElementById("ProgrammingFilter").checked;
            const gamingFilter = document.getElementById("GamingFilter").checked;
            const aiFilter = document.getElementById("AIFilter").checked;

            const tableRows = document.querySelectorAll("#clubTable tbody tr");

            tableRows.forEach(row => {
                const category = row.cells[2].textContent.toUpperCase();
                const isAcademic = category.includes("ACADEMIC");
                const isCultural = category.includes("CULTURAL");
                const isSocial = category.includes("SOCIAL");
                const isService = category.includes("SERVICE");
                const isReligious = category.includes("RELIGIOUS");
                const isArt = category.includes("ART");
                const isPolitical = category.includes("POLITICAL");
                const isSports = category.includes("SPORTS");
                const isMedia = category.includes("MEDIA");
                const isEnvironment = category.includes("ENVIRONMENT");
                const isCommunication = category.includes("COMMUNICATION");
                const isDancing = category.includes("DANCING");
                const isProgramming = category.includes("PROGRAMMING");
                const isGaming = category.includes("GAMING");
                const isAI = category.includes("AI");

                if ((academicFilter && isAcademic) || (culturalFilter && isCultural) || (socialFilter && isSocial) || (serviceFilter && isService) || (religiousFilter && isReligious) || (artFilter && isArt) || (politicalFilter && isPolitical) || (sportsFilter && isSports) || (mediaFilter && isMedia) || (environmentFilter && isEnvironment) || (communicationFilter && isCommunication) || (dancingFilter && isDancing) || (programmingFilter && isProgramming) || (gamingFilter && isGaming) || (aiFilter && isAI)) {
                    row.style.display = "table-row";
                } else if (!academicFilter && !culturalFilter && !socialFilter && !serviceFilter && !religiousFilter && !artFilter && !politicalFilter && !sportsFilter && !mediaFilter && !environmentFilter && !communicationFilter && !dancingFilter && !programmingFilter && !gamingFilter && !aiFilter) {
                    row.style.display = "table-row";
                } else {
                    row.style.display = "none";
                }
            });
        });
    });
    input.addEventListener("change", function() {
        const academicFilter = document.getElementById("academicFilter").checked;
        const culturalFilter = document.getElementById("culturalFilter").checked;
        const socialFilter = document.getElementById("SocialFilter").checked;
        const serviceFilter = document.getElementById("ServiceFilter").checked;
        const religiousFilter = document.getElementById("ReligiousFilter").checked;
        // Add more filter variables for each new filter

        const tableRows = document.querySelectorAll("#clubTable tbody tr");

        tableRows.forEach(row => {
            const category = row.cells[2].textContent.toUpperCase();
            const isAcademic = category.includes("ACADEMIC");
            const isCultural = category.includes("CULTURAL");
            const isSocial = category.includes("SOCIAL");
            const isService = category.includes("SERVICE");
            const isReligious = category.includes("RELIGIOUS");
            // Add more variables for each new category

            if ((academicFilter && isAcademic) || (culturalFilter && isCultural) || (socialFilter && isSocial) || (serviceFilter && isService) || (religiousFilter && isReligious)) {
                row.style.display = "table-row";
            } else if (!academicFilter && !culturalFilter && !socialFilter && !serviceFilter && !religiousFilter) {
                row.style.display = "table-row";
            } else {
                row.style.display = "none";
            }
        });
    });


</script>
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const postBtns = document.querySelectorAll('#addPostBtn');
        postBtns.forEach(button => {
            button.addEventListener('click', function () {
                const clubId = this.getAttribute('data-club-id');
                const form = document.querySelector('#postEditForm form');
                const clubIdInput = form.querySelector('#club_id');
                clubIdInput.value = clubId;

            });
        });
    });

</script>

<script>
    document.getElementById('cancelUserForm').addEventListener('click', function () {
        const form = document.querySelector('#postEditForm form');
        form.reset(); // This clears all form fields
    });

</script>



<script>
    document.addEventListener('DOMContentLoaded', function () {
        // First section for speaker search
        const searchInput = document.getElementById('searchInput');
        const searchResults = document.getElementById('searchResults');
        const userIdInput = document.getElementById('selectedRepresentedId');

        searchInput.addEventListener('input', function() {
            const query = searchInput.value;
            if (!query) {
                searchResults.innerHTML = '';
                searchResults.classList.add('hidden');
                return;
            }

            fetch(`/sks/search?name=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(users => {
                    if (users.length) {
                        searchResults.innerHTML = users.map(user =>
                            `<div class="p-2 hover:bg-gray-100 cursor-pointer text-sm text-gray-800 dark:text-neutral-200"
                            onclick="selectSpeaker('${user.id}', '${user.name}')">
                            ${user.name}
                        </div>`
                        ).join('');
                        searchResults.classList.remove('hidden');
                    } else {
                        searchResults.innerHTML = '<div class="p-2 text-sm text-gray-500">No results found</div>';
                        searchResults.classList.remove('hidden');
                    }
                });
        });

        window.selectSpeaker = function(userId, userName) {
            searchInput.value = userName;
            userIdInput.value = userId;
            searchResults.classList.add('hidden');
        };
    });
</script>




@endsection
