<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Glitch team</title>
    <meta name="description" content="Glitch team"/>
    <link rel="icon" href="{{asset('assets/images/logo.svg')}}" type="image/svg+xml"/>
    <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/libs/swiper-bundle.min.css')}}"/>
    @yield('head')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

