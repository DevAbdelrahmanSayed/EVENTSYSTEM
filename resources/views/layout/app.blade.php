<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body class="bg-[#23242A]">
@include('layout.notf')
@include('layout.sidebar')
    @yield('content')
@include('layout.scripts')
@yield('scripts')
</body>
</html>
