
@extends('layout.app')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

@endsection
@section('content')
    <div class="antialiased bg-[#23242A]">

        <main class="md:ml-64 p-4 pt-20">
            <!---Nav Home> create Post --->
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
                                Create Post

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
                <h2 class="text-gray-100 font-semibold  ">Fill out the form below to create a new Post for our student club. Please provide all necessary details to ensure clarity and organization.</h2>
                <p class="text-gray-300 text-sm">After submitting the form, your Post details will be sent to the SKS admin for review. Once approved, your Post will be published on your club page.</p>
            </div>




            <div id="postEditForm" class=" flex items-center justify-center w-full  max-h-full">

                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-[#323741] rounded-lg shadow border border-[#424650] ">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-[#424650]">
                            <h3 class="text-lg font-semibold text-white">
                                Create Post Form
                            </h3>
                        </div>

                        <!-- Modal body -->
                        <form class="max-w-lg mx-auto p-2" action="{{route('club.post.store')}}" method="POST" enctype="multipart/form-data">
                            <div class=" p-2 relative">
                                @csrf
                                <input type="hidden" name="club_id" id="club_id" value="{{$clubId}}">
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
                                    Reset
                                </button>


                            </div>
                        </form>

                    </div>
                </div>

            </div>



        </main>

    </div>
@endsection

@section('scripts')
@endsection
