<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Glitch team Log in page</title>
    <link rel="icon" href="{{asset('assets/images/logo.svg')}}">
    <meta name="description" content="Glitch team"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body>
    @include('components.notf')
    <div class="flex items-center justify-center min-h-screen bg-[#1E1F25]">
        <div
            class="relative flex flex-col m-6 space-y-8 bg-[#323741] border-2 border-gray-600 shadow-2xl rounded-2xl md:flex-row md:space-y-0 w-[400px] h-[400px]"
        >
        <!-- left side -->
        <div class="flex flex-col justify-center p-8 md:p-14">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-[#FFFFFF] md:text-2xl dark:text-white text-center ">
                Forgot your password?
            </h1>
            <span class="font-light text-gray-400 mb-8 text-center">
            your password will be reset by email
          </span>
            <form method="post" action="{{route('reset-email')}}">
                @csrf
            <div class="py-4">
                <label for="email" class="block mb-2 text-sm font-medium text-[#FFFFFF] dark:text-white">Enter your email address</label>
                <input type="email" name="email" id="email" placeholder="example@uskudar.edu.tr" class="bg-[#1E1F25] border border-[#424650] text-gray-900 sm:text-sm rounded-lg focus:ring-[#827FFF] focus:border-[#827FFF] block w-full p-2.5 dark:bg-gray-700 dark:border-[#424650] placeholder-[#FFFFFF]  dark:text-white  dark:focus:border-[#7879C5]" required="">
                <div id="resetMessage" class="text-sm mt-2 hidden"></div>
            </div>
             <button type="submit" class="text-white bg-[#827FFF]   font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:[#7879C5]  focus:outline-none dark:focus:ring-[#7879C5] w-full ">Next</button>
            </form>
            <a href="{{route('login')}}" class="text-sm font-medium text-[#FFFFFF] hover:underline dark:text-white text-center mt-2">Back to login</a>
        </div>
        <!-- {/* right side */} -->

    </div>
</div>
</body>
</html>
