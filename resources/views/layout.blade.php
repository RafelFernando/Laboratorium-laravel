<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul') | Laboratorium</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Navbar -->
        <nav class="flex items-center justify-between py-4">
            <div class="flex items-center space-x-4">
                <a href="/" class="text-lg font-bold text-indigo-700">LABORATORIUM</a>
                <a href="/pasien" class="text-sm font-medium text-gray-700 hover:text-indigo-600">Pasien</a>
                <a href="/profil" class="text-sm font-medium text-gray-700 hover:text-indigo-600">Profil</a>
            </div>

            <!-- Burger (opsional) -->
            <div class="md:hidden">
                <button id="burger" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </nav>

        <!-- Konten Dinamis -->
        <main>
            @yield('konten')
        </main>
    </div>

    <!-- Burger Toggle Script -->
    <script>
        const burger = document.getElementById('burger');
        const nav = document.querySelector('nav');

        burger?.addEventListener('click', () => {
            nav.classList.toggle('open');
        });
    </script>
</body>
</html>
