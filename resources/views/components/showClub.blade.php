<!DOCTYPE html>
<html lang="en" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="violet">
@include('layout.head')

<body class="bg-white dark:bg-neutral-800">

@include('layout.dashboard')

<!-- Start grid -->
<section class="py-16 bg-[#23242A]  pl-[300px]">


    <div class="container mx-auto my-8">
        <div class="grid grid-cols-12 gap-4 items-center">
            <div class="col-span-12 lg:col-span-3">
                <h2 class="text-2xl font-bold text-white">Brain Awareness Week Webinar </h2>
                <div class="w-full h-0.5 rounded-full bg-gray-100/60 dark:bg-gray-500/20">
                    <!-- تعيين اللون المخصص للخط الأفقي -->
                    <div class="h-0.5 ltr:rounded-l-full rtl:rounded-r-full" style="width: 40%; background-color: #F5F5F7;"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mx-auto">
        <div class="grid grid-cols-12 md:gap-8">
            <div class="col-span-12 md:col-span-6 md:col-start-4">

            </div>
        </div>
        <div class="grid grid-cols-12 mt-8 md:gap-14">
            <div class="col-span-12 lg:col-span-8">
                <div class="swiper clubdetailSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <img src=" {{asset('assets/image/beyin.webp')}}" alt="" class="w-[550px] h-[550px] rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('assets/image/mental.webp')}}" alt="" class="w-[550px] h-[550px] rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('assets/image/gradient.webp')}}" alt="" class="w-[550px] h-[550px] rounded-lg">
                        </div>
                    </div>
                </div>
                <ul class="flex flex-wrap items-center mt-3 mb-0 text-gray-500">
                    <li>
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <img src="{{asset('assets/image/BAW.webp')}}" alt="" class="w-[64px] h-[64px]  rounded-full">
                            </div>
                            <div class="ltr:ml-3 rtl:mr-3">
                                <a href="blog-author.html" class="text-white dark:text-white"><h6 class="mb-0 dark:text-white">Brain Awareness Week Webinar</h6></a>
                            </div>
                        </div>
                    </li>
                    <li class="ltr:ml-3 rtl:mr-3">
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <i class="uil uil-calendar-alt"></i>
                            </div>
                            <div class="ltr:ml-2 rtl:mr-2">
                                <p class="mb-0 text-white"> Mar 15, 2024</p>
                            </div>
                        </div>
                    </li>
                    <li class="ltr:ml-3 rtl:mr-3">
                        <div class="flex items-center">
                        </div>
                    </li>
                </ul>
                <div class="mt-4">
                    <h5 class="mb-2 text-white">Brain Awareness Week Webinar ?</h5>
                    <p class="text-white">The "Brain Awareness Week Webinar" organized by the Neuroscience Club under the Üsküdar.</p>
                    <p class="mb-4 text-white">University Health, Culture and Sports Department will be held on March 16, 2024 at 12:00 with the </p>
                    <p class="text-white">participation of Prof. Dr. Oğuz Tanrıdağ, Prof. Dr. Neslihan Serap Şengör, Prof. Dr. Erkan Yula. </p>
                    <p class="text-white">March 16, 2024 at 12:00</p>
                    <div class="flex items-center my-4">


                        <div class="relative w-full max-w-xs ml-[450px]">
                            <form action="#" method="GET" class="flex items-center ">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" stroke="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path>
                                    </svg>
                                </div>
                                <input type="text" name="email" id="topbar-search" class="bg-[#1E1F25] border border-[#424650] text-white text-sm rounded-lg focus:ring-[#827FFF] focus:border-[#827FFF] block w-full pl-10 p-2.5  border-[#424650] dark:placeholder-white text-white dark:focus:ring-primary-500 dark:focus:border-[#827FFF]" placeholder="Search" />
                            </form>
                        </div>
                    </div>



                    <div class="w-full h-0.5 rounded-full bg-gray-100/60 dark:bg-gray-500/20">
                        <div class="h-0.5 ltr:rounded-l-full rtl:rounded-r-full" style="width: 50%; background-color: white;"></div>
                    </div>

                    <div style="display: flex; flex-direction: column; justify-content: space-between; gap: 16px; padding: 16px; border: 2px solid #424650; border-radius: 8px; margin-top: 16px;">

                        <!-- Event 1 -->
                        <div style="padding: 16px; border-radius: 8px; display: flex; border: 2px solid #424650; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: border-color 0.3s ease; /* Adding transition for smooth effect */"
                             onmouseover="this.style.borderColor='#827FFF';"
                             onmouseout="this.style.borderColor='#424650';">
                            <img src="assets/js/pages/css/image/scr.jpg" alt="Logo" style="width: 100px; height: 100px; border-radius: 8px; object-fit: cover; margin-right: 16px;">
                            <div style="display: flex; flex-direction: column; justify-content: center; flex-grow: 1;">
                                <h3 style="font-size: 1.25rem; font-weight: bold; color: white; margin: 0 0 8px 0;">Brain Awareness Week Webinar</h3>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;"><strong>event_name:</strong> Article Sessions </p>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;"><strong>Start date:</strong> 16 March 2024 </p>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;"><strong>Time:</strong> 12:00 pm </p>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;"><strong>speaker:</strong> Tayfun Gözler </p>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;"><strong>Tag:</strong> Arts </p>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;">
                                    <strong>Location:</strong>
                                    <a href="https://www.google.com/maps?q=Üsküdar+Altunizade+Central+Campus" style="text-decoration: underline; color: #827fff;">
                                        Üsküdar Altunizade Central Campus
                                    </a>
                                </p>

                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;"><strong>Event_place:</strong> MERKEZ D BLOK -1 AYHAN SONGAR[220] </p>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 8px 0;"><strong>Description of the event:</strong>The Introductory Meeting organized by the Neuroscience Club affiliated to Üsküdar University Health, Culture and Sports</p>

                            </div>
                        </div>


                        <!-- Event 2 -->
                        <div style="padding: 16px; border-radius: 8px; display: flex; border: 2px solid #424650; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: border-color 0.3s ease; /* Adding transition for smooth effect */"
                             onmouseover="this.style.borderColor='#827FFF';"
                             onmouseout="this.style.borderColor='#424650';">
                            <img src="assets/js/pages/css/image/scr club/6.jpg" alt="Logo" style="width: 100px; height: 100px; border-radius: 8px; object-fit: cover; margin-right: 16px;">
                            <div style="display: flex; flex-direction: column; justify-content: center; flex-grow: 1;">
                                <h3 style="font-size: 1.25rem; font-weight: bold; color: white; margin: 0 0 8px 0;">Brain Awareness Week Webinar</h3>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;"><strong>event_name:</strong> Health Technologies and Artificial Intelligence </p>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;"><strong>Start date:</strong> 30 April 2024 </p>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;"><strong>Time:</strong> 15:00 pm </p>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;"><strong>speaker:</strong> Melih BULUT </p>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;"><strong>Tag:</strong> Networking </p>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;">
                                    <strong>Location:</strong>
                                    <a href="https://www.google.com/maps?q=Üsküdar+Altunizade+Central+Campus" style="text-decoration: underline; color: #827fff;">
                                        Üsküdar Çarşı Campus
                                    </a>
                                </p>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;"><strong>Event_place:</strong> ÇARŞI 4. Kat Emirnebi 1 Konferans Salonu[304] </p>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 8px 0;"><strong>Description of the event:</strong>Organized by the Technology and Innovation Club, the event on "Health Technologies and Artificial Intelligence</p>
                            </div>
                        </div>
                        <div style="padding: 16px; border-radius: 8px; display: flex; border: 2px solid #424650; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: border-color 0.3s ease; /* Adding transition for smooth effect */"
                             onmouseover="this.style.borderColor='#827FFF';"
                             onmouseout="this.style.borderColor='#424650';">
                            <img src="assets/js/pages/css/image/scr.jpg" alt="Logo" style="width: 100px; height: 100px; border-radius: 8px; object-fit: cover; margin-right: 16px;">
                            <div style="display: flex; flex-direction: column; justify-content: center; flex-grow: 1;">
                                <h3 style="font-size: 1.25rem; font-weight: bold; color: white; margin: 0 0 8px 0;">Brain Awareness Week Webinar</h3>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;"><strong>Start date:</strong> 5 April 2024 </p>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;"><strong>Time:</strong> 16:00 pm </p>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;"><strong>speaker:</strong> Emre UYAR </p>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;"><strong>Tag:</strong> Cultural </p>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;">
                                    <strong>Location:</strong>
                                    <a href="https://www.google.com/maps?q=Üsküdar+Altunizade+Central+Campus" style="text-decoration: underline; color: #827fff;">
                                        Üsküdar Altunizade Central Campus
                                    </a>
                                </p>

                                <p style="font-size: 0.925rem; color: white; margin: 0 0 4px 0;"><strong>Event_place:</strong> AZİZ SANCAR MERKEZ C BLOK -1 KAT [115] </p>
                                <p style="font-size: 0.925rem; color: white; margin: 0 0 8px 0;"><strong>Description of the event:</strong>The Poetry Hour event organized by the History, Art and Literature Club</p>
                            </div>
                        </div>

                        <!-- Pagination Container -->
                        <div style="text-align: center; margin-top: 16px;">
                            <style>
                                .pagination-link {
                                    text-decoration: none;
                                    margin: 0 5px;
                                    padding: 8px 12px;
                                    border-radius: 50%;
                                    transition: background-color 0.3s ease, color 0.3s ease;
                                }

                                .pagination-link:hover, .pagination-link:focus {
                                    background-color: #007bff;
                                    color: white;
                                    cursor: pointer;
                                }

                                .pagination-link.active {
                                    background-color: #0056b3;
                                    color: white;
                                }
                            </style>
                            <ul class="flex justify-center gap-2 mt-8">
                                <!-- Left Arrow (Disabled state) -->
                                <li class="w-12 h-12 text-center border rounded-full cursor-not-allowed border-gray-200 dark:border-gray-700 bg-[#2A2D35] hover:bg-[#827FFF]">
                                    <a href="javascript:void(0)" tabindex="-1" class="block text-2xl leading-[3rem] text-white">
                                        &#xab; <!-- HTML entity for double left arrow -->
                                    </a>
                                </li>
                                <!----#23242A backround--->
                                <!----#323741 div-secoin--->
                                <!----#424650 strok--->
                                <!----#827FFF selec--->
                                <!-- Page Numbers -->
                                <li class="w-12 h-12 text-center text-white transition-colors duration-300 border rounded-full cursor-pointer bg-[#2A2D35] hover:bg-[#827FFF]">
                                    <a class="block text-1xl leading-[3rem] text-white" href="javascript:void(0)">1</a>
                                </li>
                                <li class="w-12 h-12 text-center text-gray-900 transition-colors duration-300 border rounded-full cursor-pointer border-gray-200 dark:border-gray-700 bg-[#2A2D35] hover:bg-[#827FFF]">
                                    <a class="block text-1xl leading-[3rem] text-white" href="javascript:void(0)">2</a>
                                </li>
                                <li class="w-12 h-12 text-center text-gray-900 transition-colors duration-300 border rounded-full cursor-pointer border-gray-200 dark:border-gray-700 bg-[#2A2D35] hover:bg-[#827FFF]">
                                    <a class="block text-1xl leading-[3rem] text-white" href="javascript:void(0)">3</a>
                                </li>
                                <li class="w-12 h-12 text-center text-gray-900 transition-colors duration-300 border rounded-full cursor-pointer border-gray-200 dark:border-gray-700 bg-[#2A2D35] hover:bg-[#827FFF]">
                                    <a class="block text-1xl leading-[3rem] text-white" href="javascript:void(0)">4</a>
                                </li>
                                <!-- Right Arrow -->
                                <li class="w-12 h-12 text-center transition-colors duration-300 border rounded-full cursor-pointer border-gray-200 dark:border-gray-700 bg-[#2A2D35] hover:bg-[#827FFF]">
                                    <a href="javascript:void(0) " class="block text-2xl leading-[3rem] text-white">
                                        &#xbb; <!-- HTML entity for double right arrow -->
                                    </a>
                                </li>
                            </ul>
                        </div>


                    </div>



                </div>

            </div>
            <div class="col-span-12 lg:col-span-4">


                <div class="mt-8">
                    <h6 class="mb-2 text-gray-900 text-16 text-white">Related Club</h6>
                    <div class="w-full h-0.5 rounded-full bg-gray-100/60 dark:bg-gray-500/20">
                        <div class="h-0.5 ltr:rounded-l-full rtl:rounded-r-full" style="width: 40%; background-color: white;"></div>
                    </div>
                    <ul class="my-4">

                        <li class="flex flex-wrap items-center pb-4 mb-4 border-b gap-y-3 md:gap-y-0 border-gray-100/50 dark:border-zinc-600">
                            <div class="flex items-center">
                                <img src="{{asset('assets/image/image.webp')}}" alt="" class="w-[64px] object-cover h-16 rounded">
                                <div class="ltr:ml-3 rtl:mr-3 grow">
                                    <a href="blog-details.html" class="overflow-hidden font-medium text-white">Introduction of Ecmo and Cell Saver Devices</a>
                                    <span class="block text-sm text-white">Jun 24, 2023</span>
                                </div>
                            </div>
                        </li>
                        <li class="flex flex-wrap items-center pb-4 mb-4 border-b gap-y-3 md:gap-y-0 border-gray-100/50 dark:border-zinc-600">
                            <div class="flex flex-wrap items-center pb-4 mb-4 border-b gap-y-3 md:gap-y-0 border-gray-100/50 dark:border-zinc-600">
                                <img src="{{asset('assets/image/imagew.webp')}}" alt="" class="w-[64px] object-cover h-16 rounded">
                                <div class="ltr:ml-3 rtl:mr-3 grow"><a href="blog-details.html" class="overflow-hidden font-medium text-gray-900 truncate text-white">Medical Skills Workshop</a>
                                    <span class="block text-sm text-white">July 13, 2023</span>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="mt-8">
                    <h6 class="mb-2 text-gray-900 text-16 text-white">Tags</h6>
                    <div class="w-full h-0.5 rounded-full bg-gray-100/60 dark:bg-gray-500/20">
                        <div class="h-0.5 ltr:rounded-l-full rtl:rounded-r-full" style="width: 40%; background-color: white;"></div>
                    </div>
                    <div class="flex flex-wrap gap-2 mt-3">
                        <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-[#424650]  rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 text-white dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Academic</a>
                        <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-[#424650]  rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 text-white dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Workshop</a>
                        <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-[#424650]  rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 text-white dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Seminar</a>
                        <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-[#424650] rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 text-white dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Conference</a>
                        <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-[#424650]  rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 text-white dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Cultural</a>
                        <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-[#424650]  rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 text-white dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Sports</a>
                        <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-[#424650]  rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 text-white dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Networking</a>
                        <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-[#424650]  rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 text-white dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Social</a>
                        <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-[#424650]  rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 text-white dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Arts</a>
                        <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-[#424650]  rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 text-white dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Volunteer</a>
                        <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-[#424650]  rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 text-white dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Career Development</a>
                        <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-[#424650]  rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 text-white dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Special Event</a>
                        <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-[#424650]  rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 text-white dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Online</a>
                        <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-[#424650]  rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 text-white dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">On-campus</a>
                        <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-[#424650]  rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 text-white dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Off-campus</a>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>





@include('layout.scripts')


</body>
</html>
