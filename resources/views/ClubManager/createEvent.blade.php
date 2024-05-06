@extends('layout.app')
@section('content')
    <div class="antialiased bg-[#23242A]">

        <main class="md:ml-64 p-4 pt-20">
            <!---Nav Home> create event --->
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
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <a href="Create event.html" class="inline-flex items-center text-sm font-medium text-[#F5F5F7] hover:text-[#827FFF] ">
                                Create Event

                            </a>
                        </div>
                    </li>
                </ol>
            </nav>

            <div class=" px-2 py-3  border border-[#424650] rounded-lg bg-[#323741]  mt-4">
                <svg class="absolute  right-6 " fill="#FF4351" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="-4.53 -4.53 54.37 54.37" xml:space="preserve" stroke="#FF4351" transform="matrix(1, 0, 0, 1, 0, 0)">
                   <g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-4.53" y="-4.53" width="54.37" height="54.37" rx="27.185" fill="#ffffff" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#030303" stroke-width="2.6280379999999997"> <g>
                            <path d="M22.675,0.02c-0.006,0-0.014,0.001-0.02,0.001c-0.007,0-0.013-0.001-0.02-0.001C10.135,0.02,0,10.154,0,22.656 c0,12.5,10.135,22.635,22.635,22.635c0.007,0,0.013,0,0.02,0c0.006,0,0.014,0,0.02,0c12.5,0,22.635-10.135,22.635-22.635 C45.311,10.154,35.176,0.02,22.675,0.02z M22.675,38.811c-0.006,0-0.014-0.001-0.02-0.001c-0.007,0-0.013,0.001-0.02,0.001 c-2.046,0-3.705-1.658-3.705-3.705c0-2.045,1.659-3.703,3.705-3.703c0.007,0,0.013,0,0.02,0c0.006,0,0.014,0,0.02,0 c2.045,0,3.706,1.658,3.706,3.703C26.381,37.152,24.723,38.811,22.675,38.811z M27.988,10.578 c-0.242,3.697-1.932,14.692-1.932,14.692c0,1.854-1.519,3.356-3.373,3.356c-0.01,0-0.02,0-0.029,0c-0.009,0-0.02,0-0.029,0 c-1.853,0-3.372-1.504-3.372-3.356c0,0-1.689-10.995-1.931-14.692C17.202,8.727,18.62,5.29,22.626,5.29 c0.01,0,0.02,0.001,0.029,0.001c0.009,0,0.019-0.001,0.029-0.001C26.689,5.29,28.109,8.727,27.988,10.578z"></path> </g> </g>
                    <g id="SVGRepo_iconCarrier"> <g> <path d="M22.675,0.02c-0.006,0-0.014,0.001-0.02,0.001c-0.007,0-0.013-0.001-0.02-0.001C10.135,0.02,0,10.154,0,22.656 c0,12.5,10.135,22.635,22.635,22.635c0.007,0,0.013,0,0.02,0c0.006,0,0.014,0,0.02,0c12.5,0,22.635-10.135,22.635-22.635 C45.311,10.154,35.176,0.02,22.675,0.02z M22.675,38.811c-0.006,0-0.014-0.001-0.02-0.001c-0.007,0-0.013,0.001-0.02,0.001 c-2.046,0-3.705-1.658-3.705-3.705c0-2.045,1.659-3.703,3.705-3.703c0.007,0,0.013,0,0.02,0c0.006,0,0.014,0,0.02,0 c2.045,0,3.706,1.658,3.706,3.703C26.381,37.152,24.723,38.811,22.675,38.811z M27.988,10.578 c-0.242,3.697-1.932,14.692-1.932,14.692c0,1.854-1.519,3.356-3.373,3.356c-0.01,0-0.02,0-0.029,0c-0.009,0-0.02,0-0.029,0 c-1.853,0-3.372-1.504-3.372-3.356c0,0-1.689-10.995-1.931-14.692C17.202,8.727,18.62,5.29,22.626,5.29 c0.01,0,0.02,0.001,0.029,0.001c0.009,0,0.019-0.001,0.029-0.001C26.689,5.29,28.109,8.727,27.988,10.578z">
                            </path> </g> </g></svg>

                <h1 class="text-[#FF4351] text-2xl font-bold">Please note:</h1>
                <h2 class="text-gray-100 font-semibold  ">Fill out the form below to create a new event for our student club. Please provide all necessary details to ensure clarity and organization.</h2>
                <p class="text-gray-300 text-sm">After submitting the form, your event details will be sent to the SKS admin for review. Once approved, your event will be published on your club page.</p>
            </div>
            <div id="eventEditForm"  class=" flex items-center justify-center w-full  max-h-full">
                <div class="relative p-4 w-full max-w-screen-sm max-h-full mx-auto">

                    <div class="relative bg-[#323741] rounded-lg shadow border border-[#424650]">
                        <!-- header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-[#424650]">
                            <h3 class="text-lg font-semibold text-[#f5f5f7]">
                                Create Event form
                            </h3>
                        </div>
                        <!-- form body -->
                        <form class=" relative flex flex-wrap" method="post" action="{{route('club.events.store')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="club_id" id="club_id" value="{{$clubId}}">
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

        </main>

    </div>
@endsection

@section('scripts')
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

    //subCategory
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
@endsection
