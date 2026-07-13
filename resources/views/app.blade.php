<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Title dinamis, jika halaman tidak mendefinisikan title, pakai default ini -->
    <title>@yield('title', 'PT. Quana Raya Shakatama - Integrated Solutions')</title>

    <!-- CSS & FontAwesome (Sesuaikan jika Anda menggunakan Vite/Mix) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Konfigurasi Warna Custom Tailwind (Sesuaikan dengan warna asli project Anda) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-dark': '#064e3b',
                        'primary': '#047857',
                        'accent-lightgreen': '#a7f3d0',
                        'accent-gold': '#fbbf24',
                    }
                }
            }
        }
    </script>

    @include('partials.head')
</head>
<body class="bg-gray-50 font-sans antialiased">

    <!-- Memanggil Navbar -->
    @include('partials.navbar')

    <!-- Konten Utama Halaman akan di-inject di sini -->
    <main>
        @yield('content')
    </main>

    <!-- Memanggil Footer -->
    @include('partials.footer')

</body>
</html>