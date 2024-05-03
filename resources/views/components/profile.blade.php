<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Coda:wght@400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style1.css">

    <title>Document</title>
</head>
<body class="bg-[#2A2D35]">
@include('layout.notf')

@include('layout.sidebar')

<section class=" dark:bg-[#2A2D35]">
    <div class=" relative text-center mt-[100px] ">
        <h2 class="mb-4 text-3xl font-bold text-white pl-20 font-coda">your profile</h2>
        <div class="w-full h-0.5 bg-white mt-5">
            <!-- Customizable line color and length -->
        </div>
    </div>
</section>

<section class="bg-[#2A2D35] dark:bg-[#2A2D35]">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16 pl-[150px]">
        <div class="relative">
            <img id="image"
                 class="rounded-full w-[200px] h-[200px] ml-[150px] hover:opacity-75 transition-opacity duration-300 ease-in-out"
                 src="{{asset('assets/image/prof.jpg')}}" alt="image description">
            <div
                class="absolute top-0 left-0 w-full h-full flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <button id="editButton"
                        class="bg-black bg-opacity-50 text-white rounded-full p-3 hover:bg-opacity-75 focus:outline-none">
                    Edit
                </button>
            </div>
            <input type="file" id="fileInput" class="hidden" accept="image/*"/>
        </div>
        <form action="#">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mt-5">
                <div class="relative mb-4">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 text-white">Full name</label>
                    <div class="flex items-center">
                        <input type="text" name="text" id="text" value="{{auth()->user()->name}}"
                               class="bg-[#1E1F25] border border-[#424650] text-white sm:text-sm rounded-lg focus:ring-[#827FFF] focus:border-[#827FFF]  w-full p-2.5 dark:border-[#424650] placeholder-[#FFFFFF] dark:focus:border-[#7879C5]"
                               readonly required>

                    </div>
                </div>

                <div class="relative mb-4 ">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 text-white">Email</label>
                    <div class="flex items-center">
                        <input type="email" name="email" id="email" value="{{auth()->user()->email}}"
                               class="bg-[#1E1F25] border border-[#424650] text-white sm:text-sm rounded-lg focus:ring-[#827FFF] focus:border-[#827FFF] block w-full p-2.5  dark:border-[#424650] placeholder-[#FFFFFF]    dark:focus:border-[#7879C5]"
                               readonly required="">

                    </div>
                </div>
                <div class="relative mb-4">
                    <label for="id" class="block mb-2 text-sm font-medium text-gray-900 text-white">ID</label>
                    <div class="flex items-center">
                        <input type="text" name="text" id="text" value="{{auth()->user()->un_id}}"
                               class="bg-[#1E1F25] border border-[#424650] text-white sm:text-sm rounded-lg focus:ring-[#827FFF] focus:border-[#827FFF] block w-full p-2.5  dark:border-[#424650] placeholder-[#FFFFFF]  dark:text-white  dark:focus:border-[#7879C5]"
                               readonly required="">

                    </div>
                </div>
                <div class="relative mb-4">
                    <label for="id" class="block mb-2 text-sm font-medium text-gray-900 text-white">Department</label>
                    <div class="flex items-center">
                        <input type="text" name="text" id="text" value="{{auth()->user()->department}}"
                               class="bg-[#1E1F25] border border-[#424650] text-white sm:text-sm rounded-lg focus:ring-[#827FFF] focus:border-[#827FFF] block w-full p-2.5  dark:border-[#424650] placeholder-[#FFFFFF]  dark:text-white  dark:focus:border-[#7879C5]"
                               readonly required="">

                    </div>
                </div>
            </div>
            <button type="button"
                    class="text-white bg-[#827FFF]   font-medium rounded-lg text-sm px-5 py-2.5 me-2 mt-10 dark:[#7879C5]  focus:outline-none dark:focus:ring-[#7879C5] w-full">
                Save changes
            </button>
        </form>
    </div>
</section>


<script>
    // Get references to the image and the edit button
    document.getElementById('editButton').addEventListener('click', function () {
        document.getElementById('fileInput').click();
    });

    document.getElementById('fileInput').addEventListener('change', function (event) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('image').src = e.target.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
