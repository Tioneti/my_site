@extends('layouts.frontend')

@section('title', $page->title ?? 'Home')

@section('content')
<!-- Hero Section -->
<section class="py-20 md:py-24 fade-in">
    <div class="max-w-6xl mx-auto px-6">
        <div class="bg-card border border-white/10 rounded-3xl shadow p-8 md:p-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div>
                    <p class="inline-flex items-center gap-2 text-sm px-3 py-1 rounded-full bg-gray-900/60 border border-white/10 text-gray-200">
                        <span data-feather="briefcase" class="w-4 h-4 text-accent"></span>
                        ICT Services • Kiribati
                    </p>
                    <h1 class="mt-5 text-4xl md:text-5xl font-bold leading-tight">
                        Assistant ICT Specialist helping businesses run reliable systems and Wi‑Fi
                    </h1>
                    <p class="mt-4 text-gray-300 text-lg leading-relaxed">
                        From secure guest Wi‑Fi with vouchers to government systems like Asset and Complaint workflows — built clean, supported, and easy to manage.
                    </p>
                    <div class="mt-8 flex flex-col sm:flex-row gap-3">
                        <a href="#contact" class="inline-flex justify-center items-center gap-2 px-6 py-3 rounded-lg bg-accent text-gray-900 hover:bg-blue-500">
                            <span data-feather="message-circle" class="w-5 h-5"></span>
                            Get a Quote
                        </a>
                        <a href="{{ route('wifi-services') }}" class="inline-flex justify-center items-center gap-2 px-6 py-3 rounded-lg bg-gray-900/60 border border-white/10 hover:border-white/20">
                            <span data-feather="wifi" class="w-5 h-5 text-accent"></span>
                            WiFi Services
                        </a>
                        <a href="{{ route('voucher') }}" class="inline-flex justify-center items-center gap-2 px-6 py-3 rounded-lg bg-gray-900/60 border border-white/10 hover:border-white/20">
                            <span data-feather="key" class="w-5 h-5 text-accent"></span>
                            Voucher
                        </a>
                    </div>

                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4 text-sm text-gray-200">
                        <div class="bg-gray-900/40 border border-white/10 rounded-xl p-4">
                            <div class="text-accent font-semibold">Secure networks</div>
                            <div class="mt-1 text-gray-300">Guest isolation, strong Wi‑Fi, safer DNS</div>
                        </div>
                        <div class="bg-gray-900/40 border border-white/10 rounded-xl p-4">
                            <div class="text-accent font-semibold">Voucher access</div>
                            <div class="mt-1 text-gray-300">Captive portal with time/data limits</div>
                        </div>
                        <div class="bg-gray-900/40 border border-white/10 rounded-xl p-4">
                            <div class="text-accent font-semibold">Clean systems</div>
                            <div class="mt-1 text-gray-300">Asset/Complaint workflows & reporting</div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-900/40 border border-white/10 rounded-2xl p-6 md:p-8">
                    <h2 class="text-2xl font-bold flex items-center gap-2">
                        <span data-feather="check-circle" class="w-6 h-6 text-accent"></span>
                        Service highlights
                    </h2>
                    <ul class="mt-6 space-y-4 text-gray-200">
                        <li class="flex gap-3">
                            <span data-feather="wifi" class="w-5 h-5 text-accent mt-0.5"></span>
                            <div>
                                <div class="font-semibold">Business Wi‑Fi setup</div>
                                <div class="text-gray-300 text-sm">AP placement, roaming tuning, and performance checks.</div>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <span data-feather="key" class="w-5 h-5 text-accent mt-0.5"></span>
                            <div>
                                <div class="font-semibold">Guest vouchers & captive portal</div>
                                <div class="text-gray-300 text-sm">Voucher codes, fair‑use limits, and basic splash branding.</div>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <span data-feather="shield" class="w-5 h-5 text-accent mt-0.5"></span>
                            <div>
                                <div class="font-semibold">Security hardening</div>
                                <div class="text-gray-300 text-sm">Safer defaults, access control, and segmentation where supported.</div>
                            </div>
                        </li>
                        <li class="flex gap-3">
                            <span data-feather="cpu" class="w-5 h-5 text-accent mt-0.5"></span>
                            <div>
                                <div class="font-semibold">Government systems</div>
                                <div class="text-gray-300 text-sm">Asset tracking, Complaint workflow, reporting, and access roles.</div>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-8 flex flex-col sm:flex-row gap-3">
                        <a href="#services" class="inline-flex justify-center items-center gap-2 px-5 py-3 rounded-lg bg-card border border-white/10 hover:border-white/20">
                            <span data-feather="arrow-down" class="w-5 h-5 text-accent"></span>
                            View services
                        </a>
                        <a href="#about" class="inline-flex justify-center items-center gap-2 px-5 py-3 rounded-lg bg-card border border-white/10 hover:border-white/20">
                            <span data-feather="user" class="w-5 h-5 text-accent"></span>
                            About me
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="max-w-6xl mx-auto p-6 space-y-16">

    <!-- Services -->
    <section id="services" class="fade-in">
        <div class="flex items-end justify-between gap-6 flex-wrap">
            <div>
                <h2 class="text-3xl font-bold border-b-2 border-accent inline-block pb-1">Services</h2>
                <p class="mt-3 text-gray-300">Clear packages for Wi‑Fi, vouchers, and business systems.</p>
            </div>
            <a href="#contact" class="inline-flex items-center gap-2 text-accent font-semibold hover:underline">
                Request pricing <span data-feather="arrow-right" class="w-4 h-4"></span>
            </a>
        </div>

        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-card border border-white/10 rounded-2xl shadow p-6 hover:shadow-lg transition">
                <div class="flex items-center gap-3">
                    <span data-feather="wifi" class="w-6 h-6 text-accent"></span>
                    <h3 class="text-xl font-bold">WiFi Services</h3>
                </div>
                <p class="mt-3 text-gray-300 text-sm">Coverage planning, AP setup, and secure network configuration.</p>
                <ul class="mt-4 text-sm text-gray-200 space-y-2 list-disc list-inside">
                    <li>Indoor/outdoor access points</li>
                    <li>Guest + staff SSIDs</li>
                    <li>Basic performance & roaming checks</li>
                </ul>
                <div class="mt-5 flex gap-3">
                    <a href="{{ route('wifi-services') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-gray-900/60 border border-white/10 hover:border-white/20 text-sm">
                        Learn more <span data-feather="arrow-right" class="w-4 h-4 text-accent"></span>
                    </a>
                    <a href="#contact" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-accent text-gray-900 hover:bg-blue-500 text-sm">
                        Get quote
                    </a>
                </div>
            </div>

            <div class="bg-gray-900 border border-white/10 rounded-2xl shadow p-6 hover:shadow-lg transition">
                <div class="flex items-center gap-3">
                    <span data-feather="key" class="w-6 h-6 text-accent"></span>
                    <h3 class="text-xl font-bold">Voucher Hotspot</h3>
                </div>
                <p class="mt-3 text-gray-300 text-sm">Captive portal vouchers for fair guest access (time/data limits).</p>
                <ul class="mt-4 text-sm text-gray-200 space-y-2 list-disc list-inside">
                    <li>Voucher codes with limits</li>
                    <li>Guest isolation where supported</li>
                    <li>Works with Omada / UniFi / GWN (examples)</li>
                </ul>
                <div class="mt-5 flex gap-3">
                    <a href="{{ route('voucher') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-card border border-white/10 hover:border-white/20 text-sm">
                        Voucher details <span data-feather="arrow-right" class="w-4 h-4 text-accent"></span>
                    </a>
                    <a href="#contact" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-accent text-gray-900 hover:bg-blue-500 text-sm">
                        Buy/help
                    </a>
                </div>
            </div>

            <div class="bg-card border border-white/10 rounded-2xl shadow p-6 hover:shadow-lg transition">
                <div class="flex items-center gap-3">
                    <span data-feather="monitor" class="w-6 h-6 text-accent"></span>
                    <h3 class="text-xl font-bold">Government Systems</h3>
                </div>
                <p class="mt-3 text-gray-300 text-sm">Operational systems to reduce paperwork and improve reporting.</p>
                <ul class="mt-4 text-sm text-gray-200 space-y-2 list-disc list-inside">
                    <li>Asset System (tracking & audits)</li>
                    <li>Complaint System (intake & workflow)</li>
                    <li>LMS + Inservice App (coming soon)</li>
                </ul>
                <div class="mt-5 flex gap-3">
                    <a href="#contact" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-accent text-gray-900 hover:bg-blue-500 text-sm">
                        Request demo
                    </a>
                    <a href="#projects" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-gray-900/60 border border-white/10 hover:border-white/20 text-sm">
                        See examples <span data-feather="arrow-right" class="w-4 h-4 text-accent"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Me -->
	    <section id="about" class="bg-card shadow rounded-xl p-6 fade-in">
	        <h2 class="text-3xl font-bold mb-6 border-b-2 border-accent inline-block pb-1">About Me</h2>
	        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
	            <div>
	                <p>I am an Assistant ICT specialist with experience in web development, server administration, and cybersecurity. I focus on reliable deployments, clear documentation, and maintainable setups.</p>
	                <p class="mt-4">I work mainly on Linux and also support Windows environments when required.</p>
	            </div>
	            <div>
	                <ul class="space-y-2">
	                    <li class="flex items-center"><span data-feather="user" class="w-5 h-5 mr-2 text-accent"></span> <strong>Full Name:</strong> Tioneti Tiare</li>
	                    <li class="flex items-center"><span data-feather="cpu" class="w-5 h-5 mr-2 text-accent"></span> <strong>Primary OS:</strong> Linux (Development)</li>
	                    <li class="flex items-center"><span data-feather="monitor" class="w-5 h-5 mr-2 text-accent"></span> <strong>Secondary OS:</strong> Windows (Support)</li>
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
	        <p class="text-gray-300 mb-6">A few examples of systems and network services I build and support.</p>
	        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <div class="bg-card shadow rounded p-4 hover:shadow-lg transition flex flex-col">
                <span data-feather="monitor" class="w-6 h-6 text-accent mb-2"></span>
                <h3 class="font-bold text-xl mb-1">Government Systems</h3>
                <p>Operational systems with workflows, roles, and reporting.</p>
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
                <p>Secure guest Wi‑Fi with voucher login, fair‑use controls, and strong network design.</p>
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
	                    <li>Vue.js + Laravel web applications</li>
	                    <li>Mobile applications</li>
	                    <li>Drupal government sites</li>
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
