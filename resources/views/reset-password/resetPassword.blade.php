<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Glitch team Log in page</title>
    <link rel="icon" href="{{asset('assets/images/logo.svg')}}">
    <meta name="description" content="Glitch team"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body>
@include('layout.notf')

<div class="flex items-center justify-center min-h-screen bg-[#1E1F25]">
    <div
            class="relative flex flex-col m-6 space-y-8 bg-[#323741] border-2 border-gray-600 shadow-2xl rounded-2xl md:flex-row md:space-y-0 "
    >
        <!-- left side -->
        <div class="flex flex-col justify-center p-8 md:p-14">

            <h1 class="text-xl font-bold leading-tight tracking-tight text-[#FFFFFF] md:text-2xl dark:text-white text-center">
                Create your new password
            </h1>
            <span class="font-light text-gray-400 mb-8 text-center">
            your new password must be different from previous used password
          </span>
            <form id="resetPasswordForm" method="post" action="{{route('password.reset')}}">
                @csrf
                <!-- Your form fields -->
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="py-4">
                    <label for="password"
                           class="block mb-2 text-sm font-medium text-white dark:text-white">Email</label>
                    <input type="email" name="email" value="{{old('email')}}"
                           class="bg-[#1E1F25] border border-[#424650] text-gray-900 sm:text-sm rounded-lg focus:ring-[#827FFF] focus:border-[#827FFF] block w-full p-2.5 dark:bg-gray-700 dark:border-[#424650] placeholder-[#FFFFFF] dark:text-white dark:focus:border-[#7879C5]"
                           required="">
                </div>
                <div class="py-4">
                    <label for="password"
                           class="block mb-2 text-sm font-medium text-white dark:text-white">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your new password"
                           class="bg-[#1E1F25] border border-[#424650] text-gray-900 sm:text-sm rounded-lg focus:ring-[#827FFF] focus:border-[#827FFF] block w-full p-2.5 dark:bg-gray-700 dark:border-[#424650] placeholder-[#FFFFFF] dark:text-white dark:focus:border-[#7879C5]"
                           required="">
                </div>
                <div class="py-4">
                    <label for="password_confirmation"
                           class="block mb-2 text-sm font-medium text-[#FFFFFF] dark:text-white">Re-Enter
                        Password:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                           placeholder="Enter your reset password"
                           class="bg-[#1E1F25] border border-[#424650] text-gray-900 sm:text-sm rounded-lg focus:ring-[#827FFF] focus:border-[#827FFF] block w-full p-2.5 dark:bg-gray-700 dark:border-[#424650] placeholder-[#FFFFFF] dark:text-white dark:focus:border-[#827FFF]"
                           required="">
                </div>
                <button type="submit" id="resetPasswordBtn"
                        class="text-white bg-[#827FFF]  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mt-4 dark:[#7879C5]  focus:outline-none dark:focus:ring-[#7879C5] w-full">
                    Reset Password
                </button>
            </form>
        </div>
    </div>
</div>
</body>
{{--<script>--}}
{{--    $(document).ready(function() {--}}
{{--        $('#resetPasswordForm').on('submit', function(e) {--}}
{{--            e.preventDefault();--}}
{{--            $.ajax({--}}
{{--                headers: {--}}
{{--                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--                },--}}
{{--                type: "POST",--}}
{{--                url: "{{route('password.reset')}}",--}}
{{--                data: $(this).serialize(),--}}
{{--                success: function(response) {--}}
{{--                    window.location.href = response.redirect;--}}
{{--                    },--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
</html>
