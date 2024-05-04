@extends('layout.app')
@section('content')
    <div class="antialiased bg-[#23242A] ">
        <main class="p-4  md:ml-64 h-auto pt-10 ">
            <div class=" px-3 py-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-1  ">
                <!--TABLE 1-->
                <div class="col-span-4">
                    <div class="p-4   transform transition duration-500 hover:scale-10 ">
                        <article>
                            <section class="p-3 sm:p-5 ">
                                <div class="mx-auto max-w-screen-xl px-4 lg:px-12">

                                    <div class="bg-[#323741] relative sm:rounded-lg ">
                                        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                                            <div class="w-full md:w-1/2">
                                                <form class="flex items-center">
                                                    <label for="simple-search" class="sr-only">Search</label>
                                                    <div class="relative w-full">
                                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                                        </div><input type="text" id="simple-search" class="bg-[#2a2d35] text-[#f5f5f7] text-sm rounded-lg   block w-full pl-10 p-2 border border-[#424650] focus:border-[#827FFF]" placeholder="Search" required="">
                                                    </div>
                                                </form>
                                            </div>
{{--                                            filter--}}
                                            <div class="relative z-10 w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                                <div class="flex items-center space-x-3 w-full md:w-auto">
                                                    <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="text-[#f5f5f7] inline-flex items-center bg-[#827FFF] focus:ring-2 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                                                            <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd"></path></svg> Filter <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"></path></svg></button>
                                                    <div id="filterDropdown" class="absolute z-50 hidden mt-2 w-48 p-3 bg-[#2a2d35] rounded-lg shadow-lg">
                                                        <h6 class="mb-3 text-sm font-medium text-white">
                                                            Filter
                                                        </h6>
                                                        <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                                            <li class="flex items-center">
                                                                <input id="edit" type="checkbox" value="Edit" class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]" onchange="filterTable()"> <label for="edit" class="ml-2 text-sm font-medium text-white">Edit Post</label>
                                                            </li>
                                                            <li class="flex items-center">
                                                                <input id="delete" type="checkbox" value="Delete" class=" w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]" onchange="filterTable()"> <label for="delete" class="ml-2 text-sm font-medium text-white">Delete Post</label>
                                                            </li>
                                                            <li class="flex items-center">
                                                                <input id="create" type="checkbox" value="Create" class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]" onchange="filterTable()"> <label for="create" class="ml-2 text-sm font-medium text-white">Create Post</label>
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
                                                        Post Content
                                                    </th>
                                                    <th scope="col" class="px-4 py-3 text-left border border-[#424650]">
                                                        Date Request
                                                    </th>
                                                    <th scope="col" class="px-4 py-3 text-right border border-[#424650]">
                                                        Action
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody id="table-body">
                                                @foreach($posts as $post)
                                                    <tr class="border border-[#424650]">
                                                    <td class="px-4 py-3 font-medium text-white whitespace-nowrap ">
                                                        {{$post->user->name}}
                                                    </td>
                                                    <td class="px-4 py-3">
                                                        {{$post->club->name}}
                                                    </td>
                                                    <td class="px-4 py-3 text-[#4a90e2] font-bold" >
                                                        delete
                                                    </td>
                                                    <td class="px-4 py-3">
                                                        <button onclick="openModal({{$post->id}})" class="bg-[#827FFF]  text-white font-bold py-1 px-2 rounded">View Post</button>
                                                    </td>
                                                    <td class="px-4 py-3">
                                                        {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
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

            <!-- Post Modal -->
            <!-- Modal -->
            <div id="modal" class="hidden fixed inset-0 bg-[#23242A] bg-opacity-75 flex items-center justify-center z-50" onclick="closeModal(event)">
                <div class="bg-[#323741] rounded-lg shadow-xl overflow-hidden w-1/2 relative" onclick="event.stopPropagation()">
                    <button onclick="closeModal(event)" class="modal-close-button absolute top-2.5 right-2.5 text-[#f5f5f7] border border-[#424650] bg-[#2a2d35] rounded-lg hover:bg-[#827FFF] focus:ring-2 focus:outline-none focus:ring-[#827FFF] rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    <div class="flex items-center justify-center">
                        <div class="w-full p-4 text-center">
                            <img class="modal-image mx-auto rounded-lg sm:rounded-none sm:rounded-t-lg" src="" alt="Post Image" style="max-width:100%; height:auto;">
                            <div class="mt-4 text-left">
                                <h3 class="modal-title text-xl font-bold tracking-tight text-white"></h3>
                                <span class="modal-date text-white"></span>
                                <p class="modal-description mt-3 mb-4 font-light text-white whitespace-normal break-words"></p>
                                <p class="modal-user text-sm text-white"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rejection Modal -->
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
                        <textarea id="rejectionReason" class="p-2 w-full h-48 text-white bg-[#23242A] border border-[#424650] focus:border-[#827FFF] placeholder-white rounded mb-4" placeholder="Write the reason for rejection here..."></textarea>
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

            @include('layout.pagination',['paginationData' => $posts])

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
        function openModal(postId) {
            fetch(`/sks/posts/${postId}`)  // Adjust the endpoint to match your routing
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP status ${response.status}`);
                    }
                    return response.json();
                })
                .then(post => {
                    const modal = document.getElementById('modal');
                    modal.querySelector('.modal-image').src = "{{ asset('storage/' . $post->image) }}";



                    modal.querySelector('.modal-title').textContent = post.name;
                    modal.querySelector('.modal-date').textContent = `Date: ${post.created_at}`;
                    modal.querySelector('.modal-description').textContent = `Description: ${post.description}`;
                    modal.querySelector('.modal-user').textContent = `Posted by: ${post.user ? post.user.name : 'Unknown'}`;

                    // Display the modal
                    modal.classList.remove('hidden');
                })
                .catch(error => {
                    console.error('Error fetching post details:', error);
                    alert('Failed to fetch post details: ' + error.message);
                });
        }

        function closeModal(event) {
            if (event) event.stopPropagation();
            document.getElementById('modal').classList.add('hidden');
        }
    </script>


@endsection
