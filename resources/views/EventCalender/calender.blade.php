@extends('layout.app')
@section('content')


<div class="bg-[#23242A] antialiased ">
    <section id="demos" class=" p-4 md:ml-64 pt-20 mt-[50px]" >
        <nav class="flex px-2 py-3  border border-[#424650] rounded-lg bg-[#323741]  md-4" aria-label="Breadcrumb">
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
                        <a href="apps-calendar.html" class="inline-flex items-center text-sm font-medium text-[#F5F5F7] hover:text-[#827FFF] ">

                            Weekly Activity
                        </a>
                    </div>
                </li>
            </ol>
        </nav>
        <div class="section-content mt-[30px]">
            <div class="log-content" >
                <div class="--noshadow" id="demoEvoCalendar"></div>
            </div>

        </div>
    </section>


</div>
@endsection
@section('scripts')

    <script src="{{asset('assets/js/evo-calendar.min.js')}}"></script>

@endsection
