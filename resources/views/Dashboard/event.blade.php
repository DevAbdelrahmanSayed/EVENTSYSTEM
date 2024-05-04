@extends('layout.app')
@section('content')
    <div class="antialiased bg-[#23242A]">

        <main class="p-4  md:ml-64 h-auto pt-20">

            <div class=" px-3 py-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md-1  ">
                <!--TABLE 1-->
                <div class="col-span-4">
                    <div class="p-4    transform transition duration-500 hover:scale-10 ">
                        <article>
                            <section class="p-3 sm:p-5 ">
                                <div class="mx-auto max-w-screen-xl px-4 lg:px-12">

                                    <!-- Start coding here -->

                                    <div class="bg-[#323741] relative sm:rounded-lg ">
                                        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">

                                            <div class="w-full md:w-1/2">
                                                <form class="flex items-center">
                                                    <label for="simple-search" class="sr-only">Search</label>
                                                    <div class="relative w-full">
                                                        <div
                                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                            <svg aria-hidden="true"
                                                                 class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                                 fill="currentColor" viewbox="0 0 20 20"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                                      clip-rule="evenodd"></path>
                                                            </svg>
                                                        </div>
                                                        <input type="text" id="simple-search"
                                                               class="bg-[#2a2d35] text-[#f5f5f7] text-sm rounded-lg   block w-full pl-10 p-2 border border-[#424650] focus:border-[#827FFF]"
                                                               placeholder="Search" required="">
                                                    </div>
                                                </form>
                                            </div>
                                            <div
                                                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                                <div class="flex items-center space-x-3 w-full md:w-auto">
                                                    <button data-modal-toggle="Category-modal"
                                                            data-modal-target="Category-modal"
                                                            class="text-[#f5f5f7] inline-flex items-center bg-[#827FFF]  focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                                            type="button">
                                                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor"
                                                             viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                                             aria-hidden="true">
                                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                                  d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"/>
                                                        </svg>
                                                        Create Category
                                                    </button>
                                                    <button id="filterDropdownButton"
                                                            data-dropdown-toggle="EventDropdown"
                                                            class="text-[#f5f5f7] inline-flex items-center bg-[#827FFF]  focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                                            type="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                             class="h-4 w-4 mr-2 text-white" viewbox="0 0 20 20"
                                                             fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                  d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                                                  clip-rule="evenodd"></path>
                                                        </svg>
                                                        Filter
                                                        <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor"
                                                             viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                                             aria-hidden="true">
                                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"></path>
                                                        </svg>
                                                    </button>

                                                    <div id="EventDropdown"
                                                         class="z-10 hidden w-48 p-3 bg-[#2a2d35] rounded-lg shadow ">
                                                        <h6 class="mb-3 text-sm font-medium text-white">
                                                            Filter
                                                        </h6>
                                                        <ul class="space-y-2 text-sm"
                                                            aria-labelledby="filterDropdownButton">
                                                            <li class="flex items-center">
                                                                <input id="edit" type="checkbox" value="Edit"
                                                                       class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]"
                                                                       onchange="filterTable()"> <label for="edit"
                                                                                                        class="ml-2 text-sm font-medium text-white">Edit
                                                                    Event</label>
                                                            </li>
                                                            <li class="flex items-center">
                                                                <input id="delete" type="checkbox" value="Delete"
                                                                       class=" w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]"
                                                                       onchange="filterTable()"> <label for="delete"
                                                                                                        class="ml-2 text-sm font-medium text-white">Delete
                                                                    Event</label>
                                                            </li>
                                                            <li class="flex items-center">
                                                                <input id="create" type="checkbox" value="Create"
                                                                       class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]"
                                                                       onchange="filterTable()"> <label for="create"
                                                                                                        class="ml-2 text-sm font-medium text-white">Create
                                                                    Event</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="overflow-x-auto">
                                            <table class="w-full text-sm text-left text-white">
                                                <thead class="text-xs  uppercase bg-[#2a2d35]  text-white">
                                                <tr>
                                                    <th scope="col" class="px-4 py-3 text-left border border-[#424650]">
                                                        Club Manager
                                                    </th>
                                                    <th scope="col" class="px-4 py-3 text-left border border-[#424650]">
                                                        Club Name
                                                    </th>
                                                    <th scope="col" class="px-4 py-3 text-left border border-[#424650]">
                                                        Request Type
                                                    </th>
                                                    <th scope="col" class="px-4 py-3 text-left border border-[#424650]">
                                                        Event Content
                                                    </th>
                                                    <th scope="col" class="px-4 py-3 text-left border border-[#424650]">
                                                        Date Request
                                                    </th>
                                                    <th scope="col"
                                                        class="px-4 py-3 text-right border border-[#424650]">
                                                        Action
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody id="table-body">
                                                @foreach($events as $event)
                                                    <tr class="border border-[#424650]">

                                                    <td class="px-4 py-3 font-medium text-white whitespace-nowrap ">
                                                        {{$event->user?->name}}
                                                    </td>
                                                    <td class="px-4 py-3">
                                                        {{$event->club?->name}}
                                                    </td>
                                                    <td class="px-4 py-3 text-[#4a90e2] font-bold">
                                                        Edit
                                                    </td>
                                                    <td class="px-4 py-3">
                                                        <button onclick="openModal({{$event->id}})"
                                                                class="bg-[#827FFF]  text-white font-bold py-1 px-2 rounded">
                                                            View Event
                                                        </button>
                                                    </td>
                                                    <td class="px-4 py-3">
                                                        {{ \Carbon\Carbon::parse($event->created_at)->diffForHumans() }}
                                                    </td>

                                                        <td class="px-4 py-3 text-right">
                                                            <div class="flex justify-end items-center gap-2">
                                                                    <button onclick="openRejectionModal()" class="text-red-500 focus:outline-none"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                                                        <rect width="18" height="18" x="3" y="3" fill="none" stroke="currentColor"></rect>
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9l-6 6m0-6l6 6"></path></svg></button> <button class="text-green-500 focus:outline-none"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                                                        <rect width="18" height="18" x="3" y="3" fill="none" stroke="currentColor"></rect>
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4"></path></svg></button>
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
                        </article>
                    </div>
                </div>

                <!--End TABLE 1 -->
            </div>

            @include('layout.pagination',['paginationData' => $events])










            <!-------------------------------------->

       <!--post modal -->
            <div id="modal" class="hidden fixed inset-0 bg-[#23242A] bg-opacity-75 flex items-center justify-center z-50" onclick="closeModal(event)">
                <div class="modal-content bg-[#323741] rounded-lg shadow-xl overflow-hidden w-3/5 sm:w-2/3 md:w-1/2 lg:w-2/5 xl:w-1/3 relative" onclick="event.stopPropagation()">
                    <button onclick="closeModal(event)" class="modal-close-button absolute top-2.5 right-2.5 text-[#f5f5f7] border border-[#424650] bg-[#2a2d35] rounded-lg hover:bg-[#827FFF] focus:ring-2 focus:outline-none focus:ring-[#827FFF] rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    <div class="modal-body flex flex-col justify-center items-center bg-[#323741] rounded-lg shadow sm:flex border border-[#424650]">
                        <div class="w-full p-2 sm:p-4 text-left">
                            <img class="modal-image mx-auto rounded-lg sm:rounded-none sm:rounded-t-lg" src="assets/js/pages/css/image/prof.jpg" alt="Event Image">
                        </div>
                        <div class="modal-details w-full p-2 sm:p-4 text-left">
                            <h3 class="modal-title text-xl font-bold text-white mb-2">Brain Awareness Week Webinar</h3>
                            <p class="modal-event-name text-sm text-white mb-1"><strong>event_name:</strong> Health Technologies and Artificial Intelligence</p>
                            <p class="modal-date text-sm text-white mb-1"><strong>Start date:</strong> 30 April 2024</p>
                            <p class="modal-time text-sm text-white mb-1"><strong>Time:</strong> 15:00 pm</p>
                            <p class="modal-speaker text-sm text-white mb-1"><strong>speaker:</strong> Melih BULUT</p>
                            <p class="modal-tags text-sm text-white mb-1"><strong>Tag:</strong> Networking</p>
                            <p class="modal-location text-sm text-white mb-1"><strong>Location:</strong> Üsküdar Çarşı Campus</p>
                            <p class="modal-event-place text-sm text-white mb-1"><strong>Event_place:</strong> ÇARŞI 4. Kat Emirnebi 1 Konferans Salonu[304]</p>
                            <div class="modal-description text-sm text-white mb-2">
                                <strong>Description of the event:</strong>
                                <p>Organized by the Technology and Innovation Club, the event on "Health Technologies and Artificial Intelligence" aims to explore the latest advancements in health technologies and their application in artificial intelligence.</p>
                            </div>
                            <p class="modal-gender text-sm text-white mb-2">Gender: Both</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Rejection Modal -->
            <div id="rejectionModal" class="hidden fixed inset-0 bg-[#23242A] bg-opacity-75 flex items-center justify-center z-50" onclick="closeRejectionModal(event)">
                <div class="bg-[#323741] rounded-lg shadow-xl overflow-hidden w-3/5 sm:w-2/3 md:w-1/2 lg:w-2/5 xl:w-1/3 relative" onclick="event.stopPropagation()">
                    <button onclick="closeRejectionModal(event)" class="absolute top-2.5 right-2.5 text-[#f5f5f7] border border-[#424650] bg-[#2a2d35] rounded-lg hover:bg-[#827FFF] focus:ring-2 focus:outline-none focus:ring-[#827FFF] rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    <div class="flex flex-col items-center justify-center p-5 w-full">
                        <h3 class="text-xl font-bold tracking-tight text-white mb-3">
                            Reason for Rejection
                        </h3>
                        <textarea id="rejectionReason" class="p-2 w-full h-32 text-white bg-[#23242A] border border-[#424650] focus:border-[#827FFF] placeholder-white rounded mb-4" placeholder="Write the reason for rejection here..."></textarea>
                        <div class="flex space-x-3">
                            <button onclick="sendRejection()" class="bg-[#827FFF] text-white font-bold py-2 px-4 rounded">
                                Send
                            </button>
                            <button onclick="closeRejectionModal()" class="bg-red-600 text-white font-bold py-2 px-4 rounded">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Catogray modal -->
            <div id="Category-modal" tabindex="-1" aria-hidden="true" class="bg-[#23242A] bg-opacity-80 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-[#323741] rounded-lg shadow border border-[#424650]">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-white">
                                Create Category
                            </h3>
                            <button type="button"
                                    class="absolute top-2.5 right-2.5 text-[#f5f5f7] border border-[#424650] bg-[#2a2d35] rounded-lg hover:bg-[#827FFF] focus:ring-2 focus:outline-none focus:ring-[#827FFF] rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                    data-modal-toggle="Category-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5">
                            <form class="space-y-4" action="#">
                                <div>
                                    <label for="text" class="block mb-2 text-sm font-medium text-white">Name of
                                        Category </label>
                                    <input type="text" name="user name" id="user name" class="bg-[#2a2d35] border border-[#424650] text-white text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5 placeholder-white" placeholder="Enter your Category:" required/>
                                </div>

                                <div class="mt-8 flex items-center justify-end ">

                                    <button type="button" data-modal-target="Tag-modal" data-modal-toggle="Tag-modal" class=" mt-4 text-[#f5f5f7] inline-flex items-center bg-[#827FFF]  focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                                        Save
                                    </button>
                                </div>

                            </form>
                        </div>



                </div>
            </div>
            <!------>


            </div>

        </main>
    </div>
@endsection

<!----------------------------------------------------->
@section('scripts')
    <script src="{{asset('assets/js/Admin/filter.js')}}"></script>
    <script src="{{asset('assets/js/Admin/RejectionModal.js')}}"></script>
    <script src="{{asset('assets/js/Admin/dropdownToggles.js')}}"></script>
    <script src="{{asset('assets/js/Admin/postModal.js')}}"></script>
    <script src="{{asset('assets/js/Admin/search.js')}}"></script>
    <script>
        function openModal() {
            document.getElementById('modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }
    </script>
    <script>
        // Function to open the modal and load event data dynamically
        function openModal(eventId) {
            fetch(`/sks/events/${eventId}`)  // Adjust this endpoint as needed
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP status ${response.status}`);
                    }
                    return response.json();
                })
                .then(event => {
                    console.log(event);
                    const modal = document.getElementById('modal');
                    modal.querySelector('.modal-image').src = event.image || 'path/to/default-image.jpg'; // Provide a default image path as fallback
                    modal.querySelector('.modal-title').textContent = event.club.name;
                    modal.querySelector('.modal-event-name').textContent = "Name: " + event.name;
                    modal.querySelector('.modal-date').textContent = "Date: " + event.date_event;
                    modal.querySelector('.modal-time').textContent = "Time: " + event.start_time;
                    modal.querySelector('.modal-speaker').textContent = "Speaker: " + (event.represented ? event.represented.name : 'TBA');
                    modal.querySelector('.modal-location').textContent = "Location: " + event.location;
                    modal.querySelector('.modal-event-place').textContent = "Place: " + event.place;
                    modal.querySelector('.modal-description').textContent = "Description: " + event.description;

                    // Handle categories and sub-categories
                    const tagsContainer = modal.querySelector('.modal-tags');
                    tagsContainer.innerHTML = '';  // Clear previous content
                    if (event.category) {
                        let mainTag = document.createElement('p');
                        mainTag.className = 'text-sm text-white mb-1';
                        mainTag.textContent = "Main Category: " + event.category.name;
                        tagsContainer.appendChild(mainTag);

                        event.category.children.forEach(subCategory => {
                            let subTag = document.createElement('p');
                            subTag.className = 'text-sm text-white mb-1';
                            subTag.textContent = "Sub-category: " + subCategory.name;
                            tagsContainer.appendChild(subTag);
                        });
                    }

                    // Display the modal
                    modal.classList.remove('hidden');
                })
                .catch(error => {
                    console.error('Error fetching event details:', error);
                    alert('Failed to fetch event details: ' + error.message);
                });
        }

        // Function to close the modal
        function closeModal(event) {
            if (event) event.stopPropagation(); // Prevents the modal from closing when clicked inside
            document.getElementById('modal').classList.add('hidden');
        }
    </script>


@endsection
