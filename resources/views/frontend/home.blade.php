@extends('layouts.frontend')

@section('title', $page->title ?? 'Home')

@section('content')
<!-- Hero Section -->
<section class="py-24 text-center fade-in">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-5xl font-bold mb-4 text-accent">Mauri, I'm Tioneti Tiare</h1>
        <p class="text-xl md:text-2xl mb-6">Assistant ICT Specialist | Tech Enthusiast</p>
        <a href="#about" class="bg-accent text-gray-900 px-6 py-3 rounded shadow hover:bg-blue-500 inline-flex items-center gap-2">
            <span data-feather="arrow-down" class="w-5 h-5"></span>
            Learn More
        </a>
    </div>
</section>

<div class="max-w-6xl mx-auto p-6 space-y-16">

    <!-- About Me -->
    <section id="about" class="bg-card shadow rounded-xl p-6 fade-in">
        <h2 class="text-3xl font-bold mb-6 border-b-2 border-accent inline-block pb-1">About Me</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <p>I am an Assistant ICT specialist with experience in web development, server administration, and cybersecurity. I enjoy creating tools that make life easier and exploring new technologies.</p>
                <p class="mt-4">I mainly code on Linux (my dev OS) and occasionally use Windows for gaming.</p>
            </div>
            <div>
                <ul class="space-y-2">
                    <li class="flex items-center"><span data-feather="user" class="w-5 h-5 mr-2 text-accent"></span> <strong>Full Name:</strong> Tioneti Tiare</li>
                    <li class="flex items-center"><span data-feather="cpu" class="w-5 h-5 mr-2 text-accent"></span> <strong>Primary OS:</strong> Linux (Development)</li>
                    <li class="flex items-center"><span data-feather="monitor" class="w-5 h-5 mr-2 text-accent"></span> <strong>Secondary OS:</strong> Windows (Gaming)</li>
                    <li class="flex items-center"><span data-feather="users" class="w-5 h-5 mr-2 text-accent"></span> <strong>Family:</strong> Married, 2 kids</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Skills -->
    <section id="skills" class="bg-card shadow rounded-xl p-6 fade-in">
        <h2 class="text-3xl font-bold mb-6 border-b-2 border-accent inline-block pb-1">Skills</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="flex items-center space-x-3 p-4 bg-gray-800 rounded shadow hover:shadow-lg transition">
                <span data-feather="code" class="w-6 h-6 text-accent"></span>
                <span>Grails & Laravel</span>
            </div>
            <div class="flex items-center space-x-3 p-4 bg-gray-800 rounded shadow hover:shadow-lg transition">
                <span data-feather="monitor" class="w-6 h-6 text-accent"></span>
                <span>Vue.js & TailwindCSS</span>
            </div>
            <div class="flex items-center space-x-3 p-4 bg-gray-800 rounded shadow hover:shadow-lg transition">
                <span data-feather="database" class="w-6 h-6 text-accent"></span>
                <span>MySQL & CMS</span>
            </div>
            <div class="flex items-center space-x-3 p-4 bg-gray-800 rounded shadow hover:shadow-lg transition">
                <span data-feather="server" class="w-6 h-6 text-accent"></span>
                <span>Linux Server Admin</span>
            </div>
            <div class="flex items-center space-x-3 p-4 bg-gray-800 rounded shadow hover:shadow-lg transition">
                <span data-feather="shield" class="w-6 h-6 text-accent"></span>
                <span>Cybersecurity & Backup</span>
            </div>
            <div class="flex items-center space-x-3 p-4 bg-gray-800 rounded shadow hover:shadow-lg transition">
                <span data-feather="cloud" class="w-6 h-6 text-accent"></span>
                <span>Cloud & Automation</span>
            </div>
        </div>

        <div class="flex flex-wrap gap-3">
            <span class="bg-gray-800 text-accent px-3 py-1 rounded-full text-sm font-semibold hover:bg-accent hover:text-gray-900 transition">Laravel</span>
            <span class="bg-gray-800 text-accent px-3 py-1 rounded-full text-sm font-semibold hover:bg-accent hover:text-gray-900 transition">Vue.js</span>
            <span class="bg-gray-800 text-accent px-3 py-1 rounded-full text-sm font-semibold hover:bg-accent hover:text-gray-900 transition">TailwindCSS</span>
            <span class="bg-gray-800 text-accent px-3 py-1 rounded-full text-sm font-semibold hover:bg-accent hover:text-gray-900 transition">Linux</span>
            <span class="bg-gray-800 text-accent px-3 py-1 rounded-full text-sm font-semibold hover:bg-accent hover:text-gray-900 transition">MySQL</span>
            <span class="bg-gray-800 text-accent px-3 py-1 rounded-full text-sm font-semibold hover:bg-accent hover:text-gray-900 transition">Docker</span>
            <span class="bg-gray-800 text-accent px-3 py-1 rounded-full text-sm font-semibold hover:bg-accent hover:text-gray-900 transition">Git</span>
            <span class="bg-gray-800 text-accent px-3 py-1 rounded-full text-sm font-semibold hover:bg-accent hover:text-gray-900 transition">CMS</span>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="bg-gray-900 p-6 rounded-xl fade-in">
        <h2 class="text-3xl font-bold mb-6 border-b-2 border-accent inline-block pb-1">Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <div class="bg-card shadow rounded p-4 hover:shadow-lg transition flex flex-col">
                <span data-feather="monitor" class="w-6 h-6 text-accent mb-2"></span>
                <h3 class="font-bold text-xl mb-1">Government Systems</h3>
                <p>Business applications for government operations and reporting.</p>
                <ul class="mt-2 text-sm list-disc list-inside">
                    <li>Asset System (tracking & audits)</li>
                    <li>Complaint System (intake & workflow)</li>
                    <li>Case/Record Management (role‑based access)</li>
                    <li>LMS + Inservice App (coming soon)</li>
                </ul>
            </div>

            <a href="{{ route('wifi-services') }}" class="bg-card shadow rounded p-4 hover:shadow-lg transition flex flex-col focus:outline-none focus:ring-2 focus:ring-sky-400/60">
                <span data-feather="wifi" class="w-6 h-6 text-accent mb-2"></span>
                <h3 class="font-bold text-xl mb-1">Wi‑Fi Voucher Hotspot</h3>
                <p>Starlink connected to a gateway router, Omada Controller vouchers, and TP‑Link access points for secure guest Wi‑Fi.</p>
                <ul class="mt-2 text-sm list-disc list-inside">
                    <li>Captive portal login with vouchers</li>
                    <li>Guest isolation & secure network design</li>
                    <li>Outdoor AP coverage planning</li>
                </ul>
                <span class="mt-4 inline-flex items-center text-accent font-semibold">View WiFi Services <span data-feather="arrow-right" class="w-4 h-4 ml-2"></span></span>
            </a>

            <div class="bg-card shadow rounded p-4 hover:shadow-lg transition flex flex-col">
                <span data-feather="cpu" class="w-6 h-6 text-accent mb-2"></span>
                <h3 class="font-bold text-xl mb-1">Future Projects</h3>
                <ul class="mt-2 text-sm list-disc list-inside">
                    <li>Vue.js + Laravel Web Apps</li>
                    <li>Mobile Applications</li>
                    <li>Drupal Government Sites</li>
                </ul>
            </div>

        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="bg-card shadow rounded-xl p-6 fade-in">
        <h2 class="text-3xl font-bold mb-6 border-b-2 border-accent inline-block pb-1 flex items-center">
            <span data-feather="mail" class="w-6 h-6 mr-2 text-accent"></span>Contact
        </h2>
        <div class="space-y-2 flex flex-col md:flex-row md:space-x-6">
            <p class="flex items-center"><span data-feather="mail" class="w-5 h-5 mr-2 text-accent"></span>Email: <a href="mailto:tioneti@tiodev.com" class="text-accent hover:underline">tioneti@tiodev.com</a></p>
            <p class="flex items-center"><span data-feather="phone" class="w-5 h-5 mr-2 text-accent"></span>Phone: <a href="tel:+68673095950" class="text-accent hover:underline">+686 73095950</a></p>
            <p class="flex items-center"><span data-feather="linkedin" class="w-5 h-5 mr-2 text-accent"></span>LinkedIn: <a href="https://www.linkedin.com/in/tioneti-tiare" target="_blank" class="text-accent hover:underline">tioneti-tiare</a></p>
            <p class="flex items-center"><span data-feather="github" class="w-5 h-5 mr-2 text-accent"></span>GitHub: <a href="https://github.com/Tioneti" target="_blank" class="text-accent hover:underline">tioneti</a></p>
        </div>
    </section>

</div>
@endsection
