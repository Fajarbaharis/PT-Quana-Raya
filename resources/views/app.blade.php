<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Title dinamis -->
    <title>@yield('title', 'PT. Quana Raya Shakatama - Integrated Solutions')</title>
    
    <!-- CSS AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @include('partials.head')
</head>

<body class="bg-gray-50 font-sans antialiased">

    <!-- Memanggil Navbar -->
    @include('partials.navbar')

    <!-- Konten Utama Halaman -->
    <main>
        @yield('content')
    </main>

    <!-- Memanggil Footer -->
    @include('partials.footer')

    <!-- 2. JS AOS (WAJIB di sini, tepat sebelum </body>) -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 800,    // Durasi animasi (ms)
        once: true,       // Animasi hanya terjadi sekali saat scroll ke bawah
        offset: 100       // Jarak trigger dari bawah layar
      });
    </script>

</body>
</html>