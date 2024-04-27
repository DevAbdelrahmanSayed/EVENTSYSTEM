<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Student Club</title>

    <style>

        .main-container {
            position: relative;
            padding-top: 2rem;
        }

        .posts-container {
            margin-top: 4rem;
        }
    </style>
</head>
<body class="bg-[#23242A]">
<style>
    .blue-to-orange {
        background: linear-gradient(to right, rgb(0, 221, 255), orange);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>
<div class="antialiased bg-[#23242A]">
    @include('layout.dashboard')
    <main class="p-4  md:ml-64 h-auto pt-20">
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

            </ol>
        </nav>
        <!---Badges--------------------------------->
        <div class="flex flex-wrap justify-start items-center px-2 py-3 space-x-2 rounded-lg border border-[#424650] bg-[#323741] mt-4">
            @foreach ($categories as $category)
                <button type="button" class="category-btn px-4 py-2 text-sm font-medium text-[#F5F5F7] bg-[#2a2d35] border border-[#424650] rounded-full hover:bg-[#827FFF] hover:text-[#F5F5F7] focus:z-10 focus:ring-2 focus:ring-[#827FFF] focus:text-[#F5F5F7] mb-1" data-category-id="{{ $category->id }}">
                    {{ $category->name }}
                </button>
            @endforeach
        </div>
        <!---Badges--------------------------------->

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-4"></div>
        <div id="club-posts-container">
            <div class="px-3 py-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-1 border border-[#424650] rounded bg-[#323741]">
                @foreach ($clubs as $club)
                    <div class="col-span-1">
                        <div class="p-4 overflow-hidden bg-[#2a2d35] border-2 border-[#424650] rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:border-[#827FFF]">
                            <article>
                                <figure class="overflow-hidden rounded-t-lg">
                                    <a href="{{ route('clubs.show', $club->id) }}">
                                        <img src="{{ $club->image ?: 'default-image-url.jpg' }}" alt="{{ $club->name }}" class="object-cover w-full h-48 duration-500 ease-in-out transform hover:scale-110">
                                    </a>
                                </figure>
                                <div class="p-4 bg-[#2a2d35]">
                                    <p class="mb-2 text-sm text-white"><strong>{{ $club->category->name ?? 'General' }}</strong> <span aria-hidden="true">•</span> {{ $club->created_at->format('M d, Y') }}</p>
                                    <a href="{{ route('clubs.show', $club->id) }}" aria-label="Read more about {{ $club->name }}" class="inline-block mb-4 text-lg font-semibold text-white transition-colors duration-300 ease-in-out text-white hover:text-[#827FFF]">{{ $club->name }}</a>
                                    <div class="flex items-center">
                                        <img src="{{ $club->user->profile_image }}" alt="{{ $club->user->name }}" class="w-10 h-10 rounded-full">
                                        <div class="ml-3">
                                            <a href="#" class="text-sm font-medium text-white">{{ $club->user->name }}</a>
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

        <div id="posts-container">
                <div class="px-3 py-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-1 border border-[#424650] rounded bg-[#323741]">
                    <!-- Placeholder for dynamic content -->
                    <div class="col-span-1" id="club-template" style="display: none;">
                        <div class="p-4 overflow-hidden bg-[#2a2d35] border-2 border-[#424650] rounded-lg shadow-lg transform transition duration-500 hover:scale-105 hover:border-[#827FFF]">
                            <article>
                                <figure class="overflow-hidden rounded-t-lg">
                                    <a class="club-link" href="#">
                                        <img src="default-image-url.jpg" alt="Club Name" class="club-image object-cover w-full h-48 duration-500 ease-in-out transform hover:scale-110">
                                    </a>
                                </figure>
                                <div class="p-4 bg-[#2a2d35]">
                                    <p class="mb-2 text-sm text-white club-info"><strong>Category</strong> • Date</p>
                                    <a class="club-name-link" href="#" class="inline-block mb-4 text-lg font-semibold text-white">Club Name</a>
                                    <div class="flex items-center">
                                        <img class="user-image" src="default-user-image-url.jpg" alt="User Name" class="w-10 h-10 rounded-full">
                                        <div class="ml-3">
                                            <a class="user-name" id="club-name" href="#" class="text-sm font-medium text-white">User Name</a>
                                            <p class="text-xs text-white user-department">Department</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>

    </main>
</div>
@include('layout.scripts')

<script>
    $(document).ready(function() {
        $('.category-btn').click(function() {
            var categoryId = $(this).data('category-id');
            var urlTemplate = "{{ route('categories.posts', ['category' => ':id']) }}";
            var url = urlTemplate.replace(':id', categoryId);

            $.ajax({
                url: url,
                type: 'GET',
                success: function(data) {
                    console.log(data);
                    $('#club-posts-container').hide();
                    $('#posts-container > div').children().not('#club-template').remove();
                    data.forEach(function(club) {
                        var $template = $('#club-template').clone().removeAttr('id').show();
                        $template.find('.club-image').attr('src', club.image || 'default-image-url.jpg').attr('alt', club.name);
                        $template.find('.club-name-link').text(club.name).attr('href', club.link);
                        $template.find('.club-info').text(club.category + ' • ' + club.date);
                        $template.find('.user-image').attr('src', club.userImage || 'default-user-image-url.jpg');
                        $template.find('.user-name').text(club.userName);
                        $template.find('.user-department').text(club.userDepartment);
                        $('#posts-container > div').append($template);
                    });
                    $('#posts-container').show();
                },
                error: function() {
                    $('#posts-container > div').html('<div class="error">Failed to load data. Please try again.</div>');
                }
            });
        });
    });
</script>
</body>
</html>
