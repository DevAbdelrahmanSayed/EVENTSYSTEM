@extends('layout.app')
@section('content')
<div class="antialiased bg-[#23242A]">

    <main class="p-4  md:ml-64 h-auto pt-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-4"></div>
        <div class=" px-3 py-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-1 border border-[#424650] rounded bg-[#323741] ">
            <div class="col-span-1">
                <div class="p-4 overflow-hidden bg-[#2a2d35] border-2 border-[#424650] rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:border-[#827FFF]">
                    <article>
                        <div class="card-body">
                            <div class="flex flex-wrap content-between">
                                <div class="">
                                    <p class="uppercase text-slate-400 font-medium text-xs">
                                        Total Student
                                    </p>
                                    <h4 class="text-center font-medium text-[20px] dark:text-slate-300" style="color: rgb(148, 163, 184);">
                                        24000
                                    </h4>
                                </div>
                                <div class="ml-auto self-center">
                                    <img src="{{asset('assets/image/student.png')}}" style="color: rgb(148, 163, 184); filter: invert(100%);" alt="Asana Icon" class="w-12 h-12">
                                </div>
                            </div><!--end card-body-->
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-span-1">
                <div class="p-4 overflow-hidden bg-[#2a2d35] border-2 border-[#424650] rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:border-[#827FFF]">
                    <article>
                        <div class="card-body">
                            <div class="flex flex-wrap content-between">
                                <div class="">
                                    <p class="uppercase text-slate-400 font-medium text-xs">
                                        Total Clubs
                                    </p>
                                    <h4 class="text-center font-medium text-[20px] dark:text-slate-300" style="color: rgb(148, 163, 184);">
                                        168
                                    </h4>
                                </div>
                                <div class="ml-auto self-center">
                                    <img src="{{asset('assets/image/club.png')}}" style="color: rgb(148, 163, 184); filter: invert(100%);" alt="Asana Icon" class="w-12 h-12">
                                </div>
                            </div><!--end card-body-->
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-span-1">
                <div class="p-4 overflow-hidden bg-[#2a2d35] border-2 border-[#424650] rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:border-[#827FFF]">
                    <article>
                        <div class="card-body">
                            <div class="flex flex-wrap content-between">
                                <div class="">
                                    <p class="uppercase text-slate-400 font-medium text-xs">
                                        Total Event
                                    </p>
                                    <h4 class="text-center font-medium text-[20px] dark:text-slate-300" style="color: rgb(148, 163, 184);">
                                        94
                                    </h4>
                                </div>
                                <div class="ml-auto self-center">
                                    <img src="{{asset('assets/image/event.png')}}" style="color: rgb(148, 163, 184); filter: invert(100%);" alt="Asana Icon" class="w-12 h-12">
                                </div>
                            </div><!--end card-body-->
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-span-1">
                <div class="p-4 overflow-hidden bg-[#2a2d35] border-2 border-[#424650] rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:border-[#827FFF]">
                    <article>
                        <div class="card-body">
                            <div class="flex flex-wrap content-between">
                                <div class="">
                                    <p class="uppercase text-slate-400 font-medium text-xs">
                                        Total Post
                                    </p>
                                    <h4 class="text-center font-medium text-[20px] dark:text-slate-300" style="color: rgb(148, 163, 184);">
                                        48
                                    </h4>
                                </div>
                                <div class="ml-auto self-center">
                                    <img src="{{asset('assets/image/post.png')}}" style="color: rgb(148, 163, 184); filter: invert(100%);" alt="Asana Icon" class="w-12 h-12">
                                </div>
                            </div><!--end card-body-->
                        </div>
                    </article>
                </div>
            </div>

            <div class="col-span-2">
                <div class="p-4 overflow-hidden bg-[#2a2d35] border-2 border-[#424650] rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:border-[#827FFF]">
                    <article>
                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                            <div class="card">

                                <div class="card-body">
                                    <div class="chart-demo">
                                        <div id="apex_line1" class="apex-charts"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div> <!--end card-->
                        </div><!--end col-->
                    </article>
                </div>
            </div>




            <div class="col-span-2">
                <div class="p-4 overflow-hidden bg-[#2a2d35] border-2 border-[#424650] rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:border-[#827FFF]">
                    <article>
                        <div class="card">
                            <div class="card-body">
                                <div class="chart-demo">
                                    <div id="apex_area1" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </article>
                </div>
            </div>


            <div class="col-span-2">
                <div class="p-4 overflow-hidden bg-[#2a2d35] border-2 border-[#424650] rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:border-[#827FFF]">
                    <article>
                        <div class="card">
                            <div class="card-body">
                                <div class="chart-demo my-0">
                                    <div id="treemap_2" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div> <!--end card-->

                    </article>
                </div>
            </div>
            <div class="col-span-2">
                <div class="p-4 overflow-hidden bg-[#2a2d35] border-2 border-[#424650] rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:border-[#827FFF]"
                     onmouseover="this.style.transform='scale(1.05)'; this.style.borderColor='#827FFF';"
                     onmouseout="this.style.transform='scale(1)'; this.style.borderColor='#424650';">
                    <article>
                        <div class="panel h-full sm:col-span-3 xl:col-span-2" style="padding: 20px; background-color: #2a2d35; border: 2px solid #424650; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);">
                            <div class="mb-5 flex items-start justify-between">
                                <h5 class="text-lg font-semibold" style="color: white;">User Request </h5>
                            </div>
                            <div class="flex flex-col space-y-5">
                                <!-- Browser item for Chrome -->
                                <div class="flex items-center">
                                    <div class="h-9 w-9" style="display: flex; align-items: center; justify-content: center; background-color: rgba(255, 255, 255, 0.1); border-radius: 50%;">
                                        <img src="{{asset('assets/image/club.png')}}" alt="Event Icon" style="height: 80%; width: 80%; filter: invert(100%);">
                                    </div>
                                    <div class="w-full flex-initial px-3">
                                        <div class="mb-1 flex justify-between font-semibold" style="width: 100%; color: #ffffff;">
                                            <h6>CLUB</h6>
                                            <p class="text-xs" style="margin-left: auto; margin-right: auto; color: #ffffff;">1%</p>
                                        </div>

                                        <div>
                                            <div class="h-5 w-full overflow-hidden rounded-full" style="background-color: #444; padding: 1px; box-shadow: 3px 3px 5px rgba(0,0,0,0.3);">
                                                <div style="height: 100%; background: linear-gradient(to right, #328cc0, #3939f0); border-radius: 10px; width: 65%; position: relative;">
                                                    <div style="position: absolute; right: -5px; top: 50%; transform: translateY(-50%); height: 14px; width: 14px; background-color: white; border-radius: 50%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div style="height: 2px; background-color: rgba(255, 255, 255, 0); margin: 10px 0;"></div>

                                <div class="flex items-center">
                                    <div class="h-9 w-9" style="display: flex; align-items: center; justify-content: center; background-color: rgba(255, 255, 255, 0.1); border-radius: 50%;">
                                        <img src="{{asset('assets/image/event.png')}}" alt="Event Icon" style="height: 80%; width: 80%; filter: invert(100%);">
                                    </div>
                                    <div class="w-full flex-initial px-3">
                                        <div class="mb-1 flex justify-between font-semibold" style="width: 100%; color: #ffffff;">
                                            <h6>EVENT</h6>
                                            <p class="text-xs" style="margin-left: auto; margin-right: auto; color: #ffffff;">1%</p>
                                        </div>

                                        <div>
                                            <div class="h-5 w-full overflow-hidden rounded-full" style="background-color: #444; padding: 1px; box-shadow: 3px 3px 5px rgba(0,0,0,0.3);">
                                                <div style="height: 100%; background: linear-gradient(to right, #328cc0, #3939f0); border-radius: 10px; width: 65%; position: relative;">
                                                    <div style="position: absolute; right: -5px; top: 50%; transform: translateY(-50%); height: 14px; width: 14px; background-color: white; border-radius: 50%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div style="height: 2px; background-color: rgba(255, 255, 255, 0); margin: 10px 0;"></div>


                            <div class="flex items-center">
                                <div class="h-9 w-9" style="display: flex; align-items: center; justify-content: center; background-color: rgba(255, 255, 255, 0.1); border-radius: 50%;">
                                    <img src="{{asset('assets/image/post.png')}}" alt="Event Icon" style="height: 80%; width: 80%; filter: invert(100%);">
                                </div>
                                <div class="w-full flex-initial px-3">
                                    <div class="mb-1 flex justify-between font-semibold" style="width: 100%; color: #ffffff;">
                                        <h6>POST</h6>
                                        <p class="text-xs" style="margin-left: auto; margin-right: auto; color: #ffffff;">1%</p>
                                    </div>

                                    <div>
                                        <div class="h-5 w-full overflow-hidden rounded-full" style="background-color: #444; padding: 1px; box-shadow: 3px 3px 5px rgba(0,0,0,0.3);">
                                            <div style="height: 100%; background: linear-gradient(to right, #328cc0, #3939f0); border-radius: 10px; width: 65%; position: relative;">
                                                <div style="position: absolute; right: -5px; top: 50%; transform: translateY(-50%); height: 14px; width: 14px; background-color: white; border-radius: 50%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                </div>
                </article>
            </div>
            <div class="col-span-4">
                <div class="p-4 overflow-hidden bg-[#2a2d35] border-2 border-[#424650] rounded-lg shadow-lg transform transition duration-500 hover:scale-10 hover:border-[#827FFF]">
                    <div class="mx-auto max-w-screen-xl px-4 lg:px-12 ">
                        <div class="bg-[#323741] relative shadow-md sm:rounded-lg overflow-hidden border border-[#424650]">
                            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                    <div class="flex items-center space-x-3 w-full md:w-auto">
                                        <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-[#2a2d35] rounded-lg shadow ">
                                            <h6 class="mb-3 text-sm font-medium text-white">Choose Role</h6>
                                            <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                                <li class="flex items-center">
                                                    <input id="studentFilter" type="checkbox" value="" class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]">
                                                    <label for="studentFilter" class="ml-2 text-sm font-medium text-white">Student</label>
                                                </li>
                                                <li class="flex items-center">
                                                    <input id="clubMangerFilter" type="checkbox" value="" class="w-4 h-4  rounded text-[#827FFF] focus:ring-[#827FFF]">
                                                    <label for="clubMangerFilter" class="ml-2 text-sm font-medium text-white">Club Manager</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-x-auto mb-5">
                                <table id="userTable" class="w-full text-sm text-left text-white " data-rows-per-page="10">
                                    <thead class="text-xs text-white uppercase bg-[#2a2d35]  ">
                                    <!-------------Column Type----------->
                                    <th scope="col" class="px-4 py-3">#</th>
                                    <th scope="col" class="px-4 py-3">User name</th>
                                    <th scope="col" class="px-4 py-3">Email Address</th>
                                    <th scope="col" class="px-4 py-3">Department</th>
                                    <th scope="col" class="px-4 py-3">ID</th>
                                    <th scope="col" class="px-4 py-3">Role</th>

                                    </thead>
                                    <!-------------Rows data----------->

                                    <tbody>


                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3">01</td>
                                        <td class="px-4 py-3">Naji</td>
                                        <td class="px-4 py-3">naji@email.com</td>
                                        <td class="px-4 py-3">Electric</td>
                                        <td class="px-4 py-3">210209330</td>
                                        <td class="px-4 py-3">Club manager</td>

                                    </tr>

                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3">02</td>
                                        <td class="px-4 py-3">Muhammed</td>
                                        <td class="px-4 py-3">muhammed@email.com</td>
                                        <td class="px-4 py-3">Software</td>
                                        <td class="px-4 py-3">210209337</td>
                                        <td class="px-4 py-3">Student</td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>

                    <!-- Club Table ends here -->
                </div>


                <!----------------------------------------------------->


                <div id="formAdduser" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-[#323741] rounded-lg shadow border border-[#424650]">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-white">
                                    Add user
                                </h3>
                                <button type="button" class="absolute top-2.5 right-2.5 text-[#f5f5f7] border border-[#424650] bg-[#2a2d35] rounded-lg hover:bg-[#827FFF] focus:ring-2 focus:outline-none focus:ring-[#827FFF] rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-hide="formAdduser">
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
                                        <label for="text" class="block mb-2 text-sm font-medium text-white" >USER NAME</label>
                                        <input type="text" name="user name" id="user name" class="bg-[#2a2d35] border border-[#424650] text-white text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5 placeholder-white" placeholder="Enter your Name" required />
                                    </div>
                                    <div>
                                        <label for="email" class="block mb-2 text-sm font-medium text-white" >EMAIL ADDRESS</label>
                                        <input type="email" name="email" id="email" class="bg-[#2a2d35] border border-[#424650] text-white text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5 placeholder-white" placeholder="Enter your Email" required />
                                    </div>
                                    <div>
                                        <label for="text" class="block mb-2 text-sm font-medium text-white" >DEPARTMENT</label>
                                        <input type="text" name="DEPARTMENT" id="DEPARTMENT" class="bg-[#2a2d35] border border-[#424650] text-white text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5 placeholder-white" placeholder="Enter your Department" required />
                                    </div>
                                    <div>
                                        <label for="text" class="block mb-2 text-sm font-medium text-white" >ID</label>
                                        <input type="text" name="ID" id="ID" class="bg-[#2a2d35] border border-[#424650] text-white text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5 placeholder-white" placeholder="Enter your Id" required />
                                    </div>
                                    <div>
                                        <label for="text" class="block mb-2 text-sm font-medium text-white" >ROLE</label>
                                        <input type="text" name="ID" id="ID" class="bg-[#2a2d35] border border-[#424650] text-white text-sm rounded-lg focus:border-[#827FFF] block w-full p-2.5 placeholder-white" placeholder="Student" readonly />
                                    </div>

                                    <div class="mt-8 flex items-center justify-end ">
                                        <button  type="submit" id="submitUserForm" class="mt-4 p-4 text-[#f5f5f7] inline-flex items-center bg-[#827FFF]  focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 ">
                                            Submit

                                        </button>
                                        <button type="submit" id=" cancelUserForm"   class="mt-4 p-4 text-[#f5f5f7] inline-flex items-center bg-red-600   focus:ring-2 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                                            Cancel
                                        </button>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
</div>
@endsection

@section('scripts')
<script src="{{asset('assets/js/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/js/irregular-data-series.js')}}"></script>
<script src="{{asset('assets/js/apex.init.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

@endsection
