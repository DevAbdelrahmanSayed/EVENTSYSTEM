@extends('layout.app')
@section('head')
    <link rel="stylesheet" href="{{asset('assets/css/tailwind.css')}}"/>

@endsection
@section('content')
    <div class="antialiased bg-[#23242A]">
        @include('layout.sidebar')
        <main class="p-4  md:ml-64 h-auto pt-20">
            <nav class="flex px-2 py-3  border border-[#424650] rounded-lg bg-[#323741]  mt-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    @include('layout.navLink')
                    <li class="inline-flex items-center">
                        <a href="{{route('club.index')}}"
                           class="inline-flex items-center text-sm font-medium text-[#F5F5F7] hover:text-[#827FFF] ">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                 fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                            </svg>
                            Clubs
                        </a>
                    </li>
                </ol>
            </nav>
            <!---Badges--------------------------------->
            <div
                class="flex flex-wrap justify-start items-center px-2 py-3 space-x-2 rounded-lg border border-[#424650] bg-[#323741] mt-4">
                @foreach ($categories as $category)
                    <button type="button"
                            class="category-btn px-4 py-2 text-sm font-medium text-[#F5F5F7] bg-[#2a2d35] border border-[#424650] rounded-full hover:bg-[#827FFF] hover:text-[#F5F5F7] focus:z-10 focus:ring-2 focus:ring-[#827FFF] focus:text-[#F5F5F7] mb-1"
                            data-category-id="{{ $category->id }}">
                        {{ $category->name }}
                    </button>
                @endforeach
            </div>
            <!---Badges--------------------------------->
            <!---clubs--------------------------------->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-4"></div>
            <div id="club-posts-container">
                <div
                    class="px-3 py-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-1 border border-[#424650] rounded bg-[#323741]">
                    @foreach ($clubs as $club)
                        <div class="col-span-1">
                            <div
                                class="p-4 overflow-hidden bg-[#2a2d35] border-2 border-[#424650] rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:border-[#827FFF]">
                                <article>
                                    <figure class="overflow-hidden rounded-t-lg">
                                        <a href="{{ route('club.show', $club->id) }}">
                                            <img src="{{asset('storage/'.$club->image)  ?: 'default-image-url.jpg' }}" alt="{{ $club->name }}"
                                                 class="object-cover w-full h-48 duration-500 ease-in-out transform hover:scale-110">
                                        </a>
                                    </figure>
                                    <div class="p-4 bg-[#2a2d35]">
                                        <p class="mb-2 text-sm text-white">
                                            <strong>{{ $club->category->name ?? 'General' }}</strong> <span
                                                aria-hidden="true">•</span> {{ $club->created_at->format('M d, Y') }}</p>
                                        <a href="{{ route('club.show', $club->id) }}" aria-label="Read more about {{ $club->name }}" class="inline-block mb-4 text-lg font-semibold text-white transition-colors duration-300 ease-in-out text-white hover:text-[#827FFF]">{{ $club->name }}</a>
                                        <div class="flex items-center">
                                            <img src="{{ $club->user->profile}}" alt="{{ $club->user->name }}"
                                                 class="w-10 h-10 rounded-full">
                                            <div class="ml-3">
                                                <a href="#"
                                                   class="text-sm font-medium text-white">{{ $club->user->name }}</a>
                                                <p class="text-xs text-white">{{ $club->user->department }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!---clubs--------------------------------->
            <!---category--------------------------------->
            <div id="posts-container">
                <div
                    class="px-3 py-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-1 border border-[#424650] rounded bg-[#323741]">
                    <!-- Placeholder for dynamic content -->
                    <div class="col-span-1" id="club-template" style="display: none;">
                        <div
                            class="p-4 overflow-hidden bg-[#2a2d35] border-2 border-[#424650] rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:border-[#827FFF]">
                            <article>
                                <figure class="overflow-hidden rounded-t-lg">
                                    <a class="club-link" href="#">
                                        <img src="default-image-url.jpg" alt="Club Name"
                                             class="club-image object-cover w-full h-48 duration-500 ease-in-out transform hover:scale-110">
                                    </a>
                                </figure>
                                <div class="p-4 bg-[#2a2d35]">
                                    <p class="mb-2 text-sm text-white club-info"><strong>Category</strong> • Date</p>
                                    <a href="#" class="club-name-link inline-block mb-4 text-lg font-semibold text-white transition-colors duration-300 ease-in-out hover:text-[#827FFF]">Club Name</a>
                                    <div class="flex items-center">
                                        <img class="user-image w-10 h-10 rounded-full" src="default-user-image-url.jpg" alt="User Name">
                                        <div class="ml-3">
                                            <a class="user-name text-sm font-medium text-white" href="#">User Name</a>
                                            <p class="text-xs text-white user-department">Department</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <!---category--------------------------------->

        </main>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('.category-btn').click(function () {
                var categoryId = $(this).data('category-id');
                var urlTemplate = "{{ route('categories.posts', ['category' => ':id']) }}";
                var url = urlTemplate.replace(':id', categoryId);
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function (response) {
                        console.log("Received data:", response);
                        var assetUrl = "{{ asset('storage') }}";
                        if (response.data && response.data.length > 0) {
                            $('#club-posts-container').hide();
                            $('#posts-container > div').children().not('#club-template').remove();
                            response.data.forEach(function (club) {
                                var $template = $('#club-template').clone().removeAttr('id').show();
                                $template.find('.club-link').attr('href', "{{ route('club.show', ':id') }}".replace(':id', club.id));
                                $template.find('.club-image').attr('src', assetUrl + '/' + club.image || 'default-image-url.jpg').attr('alt', club.name);
                                $template.find('.club-name-link').text(club.name).attr('href', "{{ route('club.show', ':id') }}".replace(':id', club.id));
                                $template.find('.club-info').text(club.category.name + ' • ' + new Date(club.created_at).toLocaleDateString('en-US'));
                                $template.find('.user-image').attr('src', club.user.profile).attr('alt', club.user.name);
                                $template.find('.user-name').text(club.user.name);
                                $template.find('.user-name').attr("href","{{ route('club.show', ':id') }}".replace(':id', club.user.id));
                                $template.find('.user-department').text(club.user.department);
                                $('#posts-container > div').append($template);
                            });
                            $('#posts-container').show();
                        } else {
                            $('#posts-container > div').html('<div class="error">No clubs found in this category.</div>');
                        }
                    },
                    error: function () {
                        $('#posts-container > div').html('<div class="error">Failed to load data. Please try again.</div>');
                    }
                });
            });
        });
    </script>

@endsection
