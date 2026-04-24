<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TioDev') | TioDev</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        body { font-family: 'Inter', sans-serif; scroll-behavior: smooth; background-color: #0f172a; color: #f8fafc; }
        section { scroll-margin-top: 5rem; }
        .bg-card { background-color: #1e293b; }
        .text-accent { color: #38bdf8; }
        .bg-accent { background-color: #38bdf8; }
        .border-accent { border-color: #38bdf8; }
        a { transition: 0.2s; }
        .fade-in { animation: fadeIn 0.8s ease forwards; opacity: 0; }
        @keyframes fadeIn { to { opacity: 1; } }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="bg-card backdrop-blur shadow sticky top-0 z-50 border-b border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
        <a href="{{ route('home') }}" class="font-bold text-2xl text-accent">TioDev</a>

        <!-- Desktop -->
        <div class="hidden md:flex items-center gap-6">
            <a href="{{ route('home') }}" class="hover:text-accent {{ request()->routeIs('home') ? 'text-accent' : '' }}">Home</a>
            <a href="{{ route('wifi-services') }}" class="hover:text-accent {{ request()->routeIs('wifi-services') ? 'text-accent' : '' }}">WiFi Services</a>
            <a href="{{ route('voucher') }}" class="hover:text-accent {{ request()->routeIs('voucher') ? 'text-accent' : '' }}">Voucher</a>
            <a href="{{ route('home') }}#about" class="hover:text-accent">About</a>
            <a href="{{ route('home') }}#projects" class="hover:text-accent">Projects</a>
            <a href="{{ route('home') }}#contact" class="hover:text-accent">Contact</a>
        </div>

        <!-- Mobile -->
        <button id="mobileMenuButton" class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-lg bg-gray-900/60 border border-white/10 hover:border-white/20"
            aria-controls="mobileMenu" aria-expanded="false" aria-label="Open menu">
            <span data-feather="menu" class="w-5 h-5"></span>
        </button>
    </div>

    <div id="mobileMenu" class="md:hidden hidden border-t border-white/10 bg-card backdrop-blur">
        <div class="max-w-7xl mx-auto px-4 py-3 flex flex-col gap-3">
            <a href="{{ route('home') }}" class="hover:text-accent">Home</a>
            <a href="{{ route('wifi-services') }}" class="hover:text-accent">WiFi Services</a>
            <a href="{{ route('voucher') }}" class="hover:text-accent">Voucher</a>
            <a href="{{ route('home') }}#about" class="hover:text-accent">About</a>
            <a href="{{ route('home') }}#projects" class="hover:text-accent">Projects</a>
            <a href="{{ route('home') }}#contact" class="hover:text-accent">Contact</a>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-card shadow mt-12 p-6 text-center text-gray-400 border-t border-white/5">
    &copy; {{ date('Y') }} TioDev. All rights reserved.
</footer>

<script>
    feather.replace()

    const mobileButton = document.getElementById('mobileMenuButton')
    const mobileMenu = document.getElementById('mobileMenu')
    mobileButton?.addEventListener('click', () => {
        const isHidden = mobileMenu.classList.toggle('hidden')
        mobileButton.setAttribute('aria-expanded', (!isHidden).toString())
    })
</script>
</body>
</html>
