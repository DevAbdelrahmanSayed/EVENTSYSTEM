<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Glitch team Log in page</title>
    <link rel="icon" href="{{asset('assets/image/logo2.png')}}">
    <meta name="description" content="Glitch team"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/toastr/build/toastr.min.css" rel="stylesheet"/>
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body>
@include('layout.notf')
<div class="flex items-center justify-center min-h-screen bg-[#1E1F25]">
    <div
        class="relative flex flex-col m-6 space-y-8 bg-[#323741] border-2 border-gray-600 shadow-2xl rounded-2xl md:flex-row md:space-y-0">
        <!-- left side -->
        <div class="flex flex-col justify-center p-8 md:p-14">

            <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl dark:text-white">
                Sign in to your account
            </h1>
            <p class="text-xs text-red-500 mt-1" id="error-un_id"></p>
            <form class="space-y-4 md:space-y-6" id="loginForm" action="#">
                <div class="py-4">
                    <label for="id" class="block mb-2 text-sm font-medium text-[#FFFFFF] dark:text-white">ID</label>
                    <input type="text" name="un_id" placeholder="Enter your ID"
                           class="bg-[#1E1F25] border border-[#424650] text-[#FFFFFF]  sm:text-sm rounded-lg focus:ring-[#827FFF] focus:border-[#827FFF] block w-full p-2.5 dark:bg-gray-700 dark:border-[#424650] placeholder-[#FFFFFF]  dark:text-white  dark:focus:border-[#7879C5]">

                </div>

                <div class="py-4">
                    <label for="password"
                           class="block mb-2 text-sm font-medium text-white dark:text-white">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password"
                           class="bg-[#1E1F25] border border-[#424650] text-[#FFFFFF]  sm:text-sm rounded-lg focus:ring-[#827FFF] focus:border-[#827FFF] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-[#FFFFFF] dark:text-white dark:focus:border-[#827FFF]">
                    <!-- Error message placeholder -->
                    <p class="text-xs text-red-500 mt-1" id="error-password"></p>
                </div>
                <div class="flex justify-between w-full py-4">
                    <div class="mr-24">
                        <input id="remember" aria-describedby="remember" type="checkbox"
                               class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-[#7879C5]  dark:focus:ring-[#7879C5]">
                        <span class="text-md text-white">Remember me</span>
                    </div>
                    <a href="{{route('reset-email')}}"
                       class="text-sm font-medium text-white hover:underline dark:text-primary-500">Forgot password?</a>
                </div>
                <button type="submit"
                        class="text-white bg-[#827FFF]  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:[#7879C5]  focus:outline-none dark:focus:ring-[#7879C5] w-full">
                    Log in
                </button>
            </form>

        </div>

        <!-- {/* right side */} -->
        <div class="relative">
            <div class="absolute top-0 left-0 text-white p-4">
                <h1 class="text-l font-bold leading-tight md:text-2xl">
                    Welcome to Uskudar University Student Club
                </h1>
                <p class="text-lg">
                    <span class="text-[#347A60]"> Explore</span>,
                    <span class="text-[#F34C37]"> Learn</span>,
                    <span class="text-[#B0B5C1]"> Grow!</span>
                </p>
            </div>
            <img
                src="{{asset('assets/image/Component 8.svg')}}"
                alt="img"
                class="w-[550px] h-550px hidden rounded-r-2xl md:block object-cover mt-12 shadow-lg"/>
        </div>
    </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/toastr/build/toastr.min.js"></script>

<script>
    $(document).ready(function () {
    });
</script>
<script>
    $(document).ready(function () {
        $('#loginForm').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "{{ route('login.store') }}",
                data: $(this).serialize(),
                success: function (response) {
                    window.location.href = response.redirectTo;
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        console.log(errors);
                        errors.all_errors.forEach(function (error) {
                            toastr.warning(error);
                        });
                    } else {
                        toastr.error('An unexpected error occurred. Please try again.');
                    }
                }
            });
        });
    });

</script>
</html>

