@extends('layout.app')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

@endsection
@section('content')
    <div class="antialiased bg-[#23242A]">

        <!-- Club Table starts here -->
        <section class="bg-[#2A2D35] p-4  md:ml-64 h-auto pt-15 mt-20">
            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                <div class="bg-[#323741] relative shadow-md sm:rounded-lg  border border-[#424650]  ">
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
                            <button id="addClubBtn" data-modal-target="createClubForm" data-modal-toggle="createClubForm" type="button" class="text-[#f5f5f7] inline-flex items-center bg-[#827FFF]  focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
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
                            <tr class="border-b border-gray-700" data-club-id="{{ $club->id }}">

                                <td class="px-4 py-3"></td>
                                <td class="px-4 py-3">{{$club->name}}</td>
                                <td class="px-4 py-3">{{$club->category->name}}</td>
                                <td class="px-4 py-3">{{$club->representative->name}}</td>
                                <td class="px-4 py-3">{{$club->created_at->format('Y-m-d')}}</td>
                                <td class="px-4 py-3 mb-5">
                                    <div class="flex items-center space-x-2">
                                        <button id="editClubBtn" data-modal-target="clubEditForm" data-modal-toggle="clubEditForm"   class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded text-xs h-6">
                                            EditClub
                                        </button>
                                        <button class="deleteClubBtn bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded text-xs h-6">
                                            DeleteClub
                                        </button>
                                        <button id="addEventBtn" data-modal-target="eventEditForm" data-club-id="{{$club->id}}" data-modal-toggle="eventEditForm" class="bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-2 rounded text-xs h-6">
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


                    <!--- Pagination here--->
                    @include('layout.pagination',['paginationData' => $clubs])


                </div>


            </div>


        </section>

        <!------------------------------------------------------------------->

        <!--Modal create category--->
        <div id="Category-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-[#323741] rounded-lg shadow border border-[#424650]">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-600">
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
                                <label for="text" class="block mb-2 text-sm font-medium text-white" >Add new Category</label>
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
        <!-- Modal club -->
        <div id="postEditForm" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-[#323741] rounded-lg shadow border border-[#424650] ">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-[#424650]">
                        <h3 class="text-lg font-semibold text-white">
                            Create Post Form
                        </h3>
                        <button type="button" class="absolute top-2.5 right-2.5 text-[#f5f5f7] border border-[#424650] bg-[#2a2d35] rounded-lg hover:bg-[#827FFF] focus:ring-2 focus:outline-none focus:ring-[#827FFF] rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="postEditForm">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>

                    <!-- Modal body -->
                    <form class="max-w-lg mx-auto p-2" action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                        <div class=" p-2 relative">
                            @csrf
                            <input type="hidden" name="club_id" id="club_id" value="">
                            <label class="block mb-2 text-sm font-medium text-white" for="user_avatar">Post's Poster:</label>
                            <input name="image" class="block w-full text-sm text-[#f5f5f7] border border-[#424650] rounded-lg cursor-pointer bg-[#2a2d35] text-[#424650] focus:outline-none placeholder-white " aria-describedby="user_avatar_help" id="user_avatar" type="file" accept="image/*">
                        </div>

                        <div class=" p-2 relative">
                            <label for="helper-text" class="block mb-2 text-sm font-medium text-[#f5f5f7]">Post's Title:</label>
                            <input name="post_name" type="text" id="post-title" class="bg-[#2a2d35] border border-[#424650] text-white text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5 placeholder-white" placeholder="Enter the title of your post..">
                        </div>

                        <div class=" p-2 relative">
                            <label for="message" class="block mb-2 text-sm font-medium text-[#f5f5f7] ">the description of the Post:</label>
                            <textarea name="post_des" id="message" rows="4" class="block p-2.5 w-full text-sm text-[#f5f5f7] bg-[#2a2d35] rounded-lg border border-[#424650]  focus:border-[#827FFF] placeholder-white " placeholder="Explain the Post in more details..."  ></textarea>


                        </div>

                        <div class=" relative p-2  flex justify-end">

                            <button type="submit" class="  mt-4  text-[#f5f5f7] inline-flex items-center bg-[#827FFF]  focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center  ">
                                Submit
                            </button>

                            <button type="button" id="cancelUserForm" class="mt-4 ml-2 text-[#f5f5f7] inline-flex items-center bg-red-600 focus:ring-2 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center "
                                    data-modal-toggle="postEditForm">
                                Cancel
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

                    <form  class="max-w-lg mx-auto p-2">
                        <!--image input-->
                        <div class=" p-2 relative">
                            <label class="block mb-2 text-sm font-medium text-white" >Update Club's logo:</label>
                            <input required class=" block w-full text-sm text-[#f5f5f7] border border-[#424650] rounded-lg cursor-pointer bg-[#2a2d35]  focus:outline-none  "  id="updateClubLogoImg" type="file" accept="image/*">
                            <div class=" text-xs text-[#f5f5f7]" >Clubs logo are useful for establishing your club's visual identity, and leaving a memorable impression on visitors.</div>
                        </div>
                        <!--Club name input -->

                        <div class=" p-2 relative">
                            <label for="editClubName" class="block mb-2 text-sm font-medium text-[#f5f5f7]">Update Club's Name:</label>
                            <input type="text" required id="editClubName" class="bg-[#2a2d35] border border-[#424650] text-white text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5 placeholder-white" placeholder="Enter the title of your Club..">
                        </div>
                        <!-- update Description club input -->

                        <div class=" p-2 relative">
                            <label for="updateDescriptionClub" class="block mb-2 text-sm font-medium text-[#f5f5f7] ">Update the description of the Club:</label>
                            <textarea id="updateDescriptionClub" rows="4" class="block p-2.5 w-full text-sm text-[#f5f5f7] bg-[#2a2d35] rounded-lg border border-[#424650]  focus:border-[#827FFF] placeholder-white " placeholder="Explain the Club in more details..." required ></textarea>
                        </div>
                        <!-- update category club input -->
                        <div class=" p-2 relative">
                            <div>
                                <label class="block mb-2 text-sm font-medium text-white">Club's Category:</label>
                                <label for="updateCategoryClub" class="sr-only">Update The Category</label>
                                <select id="updateCategoryClub" class="bg-[#2a2d35] text-[#f5f5f7] text-sm rounded-lg border border-[#424650] focus:border-[#827FFF] block w-full p-2.5">
                                    <option selected>Select a Category</option>
                                    <option value="Academic">Academic</option>
                                    <option value="Workshop">Cultural</option>
                                    <option value="Seminar">Social</option>
                                    <option value="Conference">Service</option>
                                    <option value="Cultural">Religious</option>
                                    <option value="Sports">Art</option>
                                    <option value="Networking">Political</option>
                                    <option value="Social">Sports</option>
                                    <option value="Arts">Media</option>
                                    <option value="Volunteer">Environment</option>
                                    <option value="Career Development">Communication</option>
                                    <option value="Special Event">Dancing</option>
                                    <option value="Online">Programming</option>
                                    <option value="On-campus">Gaming</option>
                                    <option value="Off-campus">AI</option>
                                </select>
                            </div>


                        </div>

                        <!---cancel / submit buttons -->
                        <div class="p-4  flex justify-end">
                            <button  type="submit" id="editClubFormUpdateBtn" data-modal-toggle="clubEditForm" class="mr-2 mt-4  text-[#f5f5f7] inline-flex items-center bg-[#827FFF] focus:ring-2 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Update
                            </button>
                            <button type="button" id="editClubFormCancelBtn" data-modal-toggle="clubEditForm" class="mr-1 mt-4  text-[#f5f5f7] inline-flex items-center bg-red-600 focus:ring-2 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Cancel
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </div>



        <div id="eventEditForm" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-screen-sm max-h-full mx-auto">

                <div class="relative bg-[#323741] rounded-lg shadow border border-[#424650]">
                    <!-- header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-[#424650]">
                        <h3 class="text-lg font-semibold text-[#f5f5f7]">
                            Create Event form
                        </h3>
                        <button type="button" class="absolute top-2.5 right-2.5 text-[#f5f5f7] border border-[#424650] bg-[#2a2d35] rounded-lg hover:bg-[#827FFF] focus:ring-2 focus:outline-none focus:ring-[#827FFF] rounded-lg text-sm p-1.5 ml-auto inline-flex items-center "data-modal-toggle="eventEditForm" >
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>

                    <!-- form body -->
                    <form class=" relative flex flex-wrap" method="post" action="{{route('events.store')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="club_id" id="club_id" value="">
                        <input type="hidden" id="selectedRepresentedIdEvent" name="represented_id" value="">
                        <!----Left section in form---->
                        <div class="p-3 w-full md:w-1/2 relative max-w-lg">
                            <!--------Add  image field  -->
                            <div class="relative  mt-1">
                                <!-------Uplead photo for event logo -->
                                <label class=" block mb-2 text-sm font-medium text-white" for="user_avatar">Upload Event's Picture:</label>
                                <input name="image" class="block w-full text-sm text-[#f5f5f7] border border-[#424650] rounded-lg cursor-pointer bg-[#2a2d35] text-[#424650] focus:outline-none  " aria-describedby="user_avatar_help" id="user_avatar" type="file" accept="image/*">
                                <div class=" text-xs text-[#f5f5f7]" id="user_avatar_help">Upload a photo highlighting details for your event.</div>
                            </div>
                            <!---------------------------->
                            <!--------Event name field  -->
                            <div class="relative  mt-2">
                                <label for="helper-text" class="block mb-2 text-sm font-medium text-[#f5f5f7] ">Event Name:</label>
                                <input name="name" type="text" id="eventName"  class="bg-[#2a2d35] border border-[#424650]  text-gray-200 text-sm rounded-lg  focus:border-[#827FFF] block w-full p-2.5    dark:placeholder-gray-400 " placeholder="Enter the name of your Event..">
                            </div>
                            <!---------------------------->
                            <!--------Search for speaker field-->
                            <div class="p-2 relative">
                                <label class="block mb-2 text-sm font-medium text-[#f5f5f7]" for="searchInput">Search for Speaker:</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                                        <svg class="flex-shrink-0 size-4 text-[#f5f5f7]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <path d="m21 21-4.3-4.3"></path>
                                        </svg>
                                    </div>
                                    <input id="searchInputEvent" class="py-3 pl-10 pr-4 w-full border-[#424650] bg-[#2A2D35] rounded-lg text-sm text-[#f5f5f7] focus:border-[#827FFF] placeholder-[#f5f5f7]" type="text" placeholder="Type a name" autocomplete="off">
                                    <div id="searchResultsEvent" class="absolute z-50 w-full mt-1 rounded-lg bg-[#2a2d35] border-[#424650] hidden">
                                    </div>
                                </div>
                            </div>
                            <!---------------------------->

                            <!--------Description field-->
                            <div class="mt-2">
                                <label for="descriptionEvent" class="block  text-sm font-medium text-[#f5f5f7] ">Description:</label>
                                <textarea name="description" id="descriptionEvent" rows="4" class="block p-2.5 w-full text-sm text-[#f5f5f7] bg-[#2a2d35] rounded-lg border border-[#424650]  focus:border-[#827FFF] placeholder-gray-400 " placeholder="Explain the event in more details..."  ></textarea>
                            </div>

                            <!---Select location-->
                            <div class="mt-2">
                                <label class="block mb-2 text-sm font-medium text-white" for="user_avatar">Choose a Location:</label>
                                <label for="Location" class="sr-only">Select a Location</label>
                                <select id="Location" name="event_category_id" class="bg-[#2a2d35] text-[#f5f5f7] text-sm rounded-lg border border-[#424650] focus:border-[#827FFF] block w-full p-2.5">
                                    <option selected>Select a Location</option>
                                    <!-- Locations for the event -->
                                    @foreach($eventCategories as $eventCategory)
                                    <option value="{{$eventCategory->id}}">{{$eventCategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!---------------------------->
                        </div>
                        <!------------------------------------------------->

                        <!----Right section in form---->
                        <div class="p-3 w-full md:w-1/2 relative max-w-lg">
                            <!----Select hall-->
                            <div class="mt-1">
                                <label class="block mb-1 text-sm font-medium text-white" for="block">Choose a hall:</label>
                                <label for="Hall" class="sr-only">Select a Hall</label>
                                <select id="subcategory" name="child_id" class="bg-[#2a2d35] text-[#f5f5f7] text-sm rounded-lg border border-[#424650] focus:border-[#827FFF] block w-full p-2.5">
                                    <option selected disabled>Select a Hall</option>
                                </select>
                            </div>

                            <!--------Select tag-->
                            <div class="mt-1">
                                <label class="block mb-1 text-sm font-medium text-white" for="user_avatar">Choose a Tag:</label>
                                <label for="Tags" class="sr-only">Select a Tag</label>
                                <select name="tag_id" id="Tags" class="bg-[#2a2d35] text-[#f5f5f7] text-sm rounded-lg border border-[#424650] focus:border-[#827FFF] block w-full p-2.5">
                                    <option selected>Select a Tag</option>
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--------Select gender-->
                            <div class="mt-1">
                                <label class="block mb-1 text-sm font-medium text-white">Gender:</label>

                                <label for="gender" class="sr-only">Select Gender</label>
                                <select name="gender" id="gender" class="bg-[#2a2d35] text-[#f5f5f7] text-sm rounded-lg border border-[#424650] focus:border-[#827FFF] block w-full p-2.5">
                                    <option selected>Select Gender</option>
                                    <!--  Gender -->
                                    <option value="Both">Both</option>
                                    <option value="Women only">Women only</option>
                                    <option value="Men only">Men only</option>
                                </select>
                            </div>

                            <!----Start Time -->
                            <div class="mt-1">
                                <label for="Start-Time" class="block mb-2 text-sm font-medium text-[#f5f5f7]">Start Time:</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-[#f5f5f7]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <!-- Set the default value to "09:00" -->
                                    <input name="start_time" type="time" id="startTime" class="bg-[#2a2d35] border leading-none border-[#424650] text-[#f5f5f7] text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5" min="09:00" max="18:00" value="09:00" />
                                </div>
                            </div>

                            <!-----End Time -->
                            <div class="mt-1">
                                <label for="End-Time" class="block mb-2 text-sm font-medium text-[#f5f5f7]">End Time:</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-[#f5f5f7]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <!-- Set the default value to "06:00" -->
                                    <input name="end_time" type="time" id="endTime" class="bg-[#2a2d35] border leading-none border-[#424650] text-[#f5f5f7] text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5" min="09:00" max="18:00" value="18:00" />
                                </div>
                            </div>

                            <!-------Select Date------>
                            <div class="mt-1">

                                <label class="block mb-1 text-sm font-medium text-white">Start Date:</label>
                                <div class="relative ">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <svg class=" w-4 h-4 text-gray-500 text-gray-400"  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </div>
                                    <input name="date_event" id="dateEvent"  type="date" class=" bg-[#2a2d35] border border-[#424650] text-[#f5f5f7] text-sm rounded-lg focus:outline-none focus:border-[#827FFF] block w-full pl-5 p-2.5" placeholder="Select date" >
                                </div>



                            </div>

                            <!---------Submit button-->
                            <div class="mt-3  flex justify-end">

                                <button  type="submit" id="submitUserForm" class="  text-[#f5f5f7] inline-flex items-center bg-[#827FFF]  focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 ">
                                    Submit

                                </button>
                                <button type="button" id="cancelUserForm" class=" text-[#f5f5f7] inline-flex items-center bg-red-600   focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                                    Cancel
                                </button>

                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div> <!-- Create Club -->

        <div id="createClubForm" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-[#323741] rounded-lg shadow border border-[#424650] ">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-white">
                            Create Club Form
                        </h3>
                        <button type="button" class="absolute top-2.5 right-2.5 text-[#f5f5f7] border border-[#424650] bg-[#2a2d35] rounded-lg hover:bg-[#827FFF] focus:ring-2 focus:outline-none focus:ring-[#827FFF] rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="createClubForm">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <div class="mt-3"></div>
                    <!-- Modal body -->

                    <form  class="max-w-lg mx-auto p-2" id="clubForm" action="{{ route('clubs.store') }}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <!--image input-->
                        <div class=" p-2 relative">
                            <label class="block mb-2 text-sm font-medium text-white" >Add Club's logo:</label>
                            <input required name="image" class=" block w-full text-sm text-[#f5f5f7] border border-[#424650] rounded-lg cursor-pointer bg-[#2a2d35]  focus:outline-none  "  id="addClubLogoImg" type="file" accept="image/*">
                            <div class=" text-xs text-[#f5f5f7]" >Clubs logo are useful for establishing your club's visual identity, and leaving a memorable impression on visitors.</div>
                        </div>
                        <!--Club name input -->
                        <div class=" p-2 relative">
                            <label for="addClubName" class="block mb-2 text-sm font-medium text-[#f5f5f7]">Enter Club's Name:</label>
                            <input name="club_name" type="text" required id="addClubName" class="bg-[#2a2d35] border border-[#424650] text-white text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5 placeholder-white" placeholder="Enter the title of your Club..">
                        </div>

                        <!-- Left Section in Form -->
                            <!-- Hidden input field for storing the selected user ID -->
                            <input type="hidden" id="selectedRepresentedId" name="represented_id" value="">
                            <!-- Search for speaker field -->
                            <div class="p-2 relative">
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
                                    </div>
                                </div>
                            </div>
                        <!--  Description club input -->

                        <div class=" p-2 relative">
                            <label for="addDescriptionClub" class="block mb-2 text-sm font-medium text-[#f5f5f7] ">Enter the description of the Club:</label>
                            <textarea name="description" id="addDescriptionClub" rows="4" class="block p-2.5 w-full text-sm text-[#f5f5f7] bg-[#2a2d35] rounded-lg border border-[#424650]  focus:border-[#827FFF] placeholder-white " placeholder="Explain the Club in more details..." required ></textarea>
                        </div>
                        <!--  category club input -->
                        <div class=" p-2 relative">
                            <div>
                                <label class="block mb-2 text-sm font-medium text-white">Club's Category:</label>
                                <label for="addCategoryClub" class="sr-only">Add The Category</label>
                                <select name="category_id" id="addCategoryClub" class="bg-[#2a2d35] text-[#f5f5f7] text-sm rounded-lg border border-[#424650] focus:border-[#827FFF] block w-full p-2.5">
                                    <option selected>Select a Category</option>
                                    @foreach($clubs as $club)
                                        <option value="{{ $club->category->id }}">{{ $club->category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="p-4  flex justify-end">
                            <button  type="submit" id="createClubFormCreateBtn"  class="mr-2 mt-4  text-[#f5f5f7] inline-flex items-center bg-[#827FFF] focus:ring-2 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Create
                            </button>
                            <button type="button" id="createClubFormCancelBtn" data-modal-toggle="createClubForm" class="mr-1 mt-4  text-[#f5f5f7] inline-flex items-center bg-red-600 focus:ring-2 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        {{--end of the club--}}

        <!-- Club Table ends here -->
    </div>

@endsection

<!----------------------------------------------------->
@section('scripts')
    <!-- Include SweetAlert CSS and JS from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    //search input for event
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInputEvent');
            const searchResultsEvent = document.getElementById('searchResultsEvent');
            const userIdInput = document.getElementById('selectedRepresentedIdEvent');

            searchInput.addEventListener('input', function() {
                const query = searchInput.value;
                if (!query) {
                    searchResultsEvent.innerHTML = '';
                    searchResultsEvent.classList.add('hidden');
                    return;
                }
                fetch(`/sks/search?name=${encodeURIComponent(query)}`)
                    .then(response => response.json())
                    .then(users => {
                        if (users.length) {
                            searchResultsEvent.innerHTML = users.map(user =>
                                `<div class="p-2 hover:bg-[#827FFF] cursor-pointer text-sm text-[#f5f5f7]" data-user-id="${user.id}" data-user-name="${user.name}">
                            ${user.name}
                        </div>`
                            ).join('');
                            searchResultsEvent.classList.remove('hidden');
                        } else {
                            searchResultsEvent.innerHTML = '<div class="p-2 text-sm text-[#f5f5f7] hover:bg-[#827FFF]">No results found</div>';
                            searchResultsEvent.classList.remove('hidden');
                        }
                    });
            });

            // Event delegation for dynamic content
            searchResultsEvent.addEventListener('click', function(event) {
                const target = event.target;
                if (target.getAttribute('data-user-id')) {
                    searchInput.value = target.getAttribute('data-user-name');
                    userIdInput.value = target.getAttribute('data-user-id');
                    searchResultsEvent.classList.add('hidden');
                }
            });
        });

    </script>
<!---------search functionality----------->

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
<!---------------------------------------->
<!-----------Location and hall script---------->
<script>
    document.getElementById("Location").addEventListener("change", function() {
        var parentId = this.value;
        var url = `/sks/event-categories/${parentId}/subcategories`;

        fetch(url)
            .then(response => response.json())
            .then(subcategories => {
                var subcategoryDropdown = document.getElementById("subcategory");
                subcategoryDropdown.innerHTML = '<option selected disabled>Select a Subcategory</option>';
                subcategories.forEach(function(subcategory) {
                    var option = document.createElement("option");
                    option.textContent = subcategory.name;
                    option.value = subcategory.id;
                    subcategoryDropdown.appendChild(option);
                });
            })
            .catch(error => console.error('Error loading subcategories:', error));
    });

</script>
<!---------------------------------------->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const postBtn = document.querySelectorAll('#addPostBtn');
        postBtn.forEach(button => {
            button.addEventListener('click', function () {
                const clubId = this.getAttribute('data-club-id');
                const form = document.querySelector('#postEditForm form');
                const clubIdInput = form.querySelector('#club_id');
                clubIdInput.value = clubId;

            });
        });
    });

</script>
    //create event
<script>
        document.addEventListener('DOMContentLoaded', function () {
            const postBtn = document.querySelectorAll('#addEventBtn');
            postBtn.forEach(button => {
                button.addEventListener('click', function () {
                    const clubId = this.getAttribute('data-club-id');
                    const form = document.querySelector('#eventEditForm form');
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
                            `<div class="p-2 hover:bg-[#827FFF]  cursor-pointer text-sm text-[#f5f5f7] "
                            onclick="selectSpeaker('${user.id}', '${user.name}')">
                            ${user.name}
                        </div>`
                        ).join('');
                        searchResults.classList.remove('hidden');
                    } else {
                        searchResults.innerHTML = '<div class="p-2 text-sm text-[#f5f5f7] hover:bg-[#827FFF]">No results found</div>';
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


  <!---for edit club functionality -->
<script>
    // Get the modal and buttons
    const modal = document.getElementById('clubEditForm');
    const updateBtn = document.getElementById('editClubFormUpdateBtn');
    const cancelBtn = document.getElementById('editClubFormCancelBtn');
    const closeButton = document.querySelector('[data-modal-toggle="clubEditForm"]');
    const form = document.querySelector('#clubEditForm form');

    // Function to reset the form
    function resetForm() {
        form.reset();
    }

    // Function to close the modal
    function closeModal() {
        modal.classList.add('hidden');
        modal.setAttribute('aria-hidden', 'true');
        modal.removeAttribute('tabindex');
    }

    // Add event listeners to buttons
    updateBtn.addEventListener('click', function() {
        resetForm();
        closeModal();
    });

    cancelBtn.addEventListener('click', function() {
        resetForm();
        closeModal();
    });

    closeButton.addEventListener('click', function() {
        resetForm();
        closeModal();
    });
</script>
<script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButtons = document.querySelectorAll('.deleteClubBtn');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const clubRow = this.closest('tr');
                    const clubId = clubRow.dataset.clubId; // Using dataset to fetch the club ID

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: "{{ route('clubs.destroy', ['club' => ':clubId']) }}".replace(':clubId', clubId),
                                type: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(data) {
                                    if (data.success) {
                                        clubRow.remove();
                                        Swal.fire(
                                            'Deleted!',
                                            'Club has been deleted.',
                                            'success'
                                        );
                                    } else {
                                        Swal.fire(
                                            'Error!',
                                            data.error,
                                            'error'
                                        );
                                    }
                                },
                                error: function(xhr, status, error) {
                                    console.error('Error:', status, error);
                                    Swal.fire(
                                        'Failed!',
                                        'Failed to delete the club. ' + error,
                                        'error'
                                    );
                                }
                            });
                        }
                    });
                });
            });
        });
    </script>
@endsection
