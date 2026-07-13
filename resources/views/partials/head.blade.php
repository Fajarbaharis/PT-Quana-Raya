<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Quana Raya Shakatama - Integrated Solutions</title>
    
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            dark: '#0a3a2a', /* Hijau sangat gelap sesuai footer */
                            DEFAULT: '#0f523c', /* Hijau utama */
                            light: '#1a7558',
                        },
                        accent: {
                            gold: '#d4a84c',
                            lightgreen: '#8dc63f' /* Warna hijau terang untuk icon */
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    fontSize: {
                        'xxs': '0.65rem',
                    }
                }
            }
        }
    </script>
    
    <style>
        body { 
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            background-color: #ffffff;
        }
        html { scroll-behavior: smooth; }
        
        /* Animasi Garis Navigasi */
        .nav-link { position: relative; transition: color 0.3s ease; padding-bottom: 4px; }
        .nav-link::after { content: ''; position: absolute; width: 0; height: 2px; bottom: 0; left: 50%; background: #0f523c; transition: all 0.3s ease; transform: translateX(-50%); }
        .nav-link:hover::after, .nav-link.active::after { width: 100%; }

        /* Custom scrollbar untuk kepadatan */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #0f523c; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #0a3a2a; }
    </style>
</head>