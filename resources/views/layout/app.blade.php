<!DOCTYPE html>
<html lang="id">
<head>
    @include('partials.head')
</head>
<body class="text-gray-800 flex flex-col min-h-screen">

    @include('partials.navbar')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>