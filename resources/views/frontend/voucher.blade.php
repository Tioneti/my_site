@extends('layouts.frontend')

@section('title', 'Voucher')

@section('content')
<section class="py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="fade-in">
            <p class="inline-flex items-center gap-2 text-sm px-3 py-1 rounded-full bg-gray-900/60 border border-white/10 text-gray-200">
                <span data-feather="key" class="w-4 h-4 text-accent"></span>
                Captive Portal Voucher Access
            </p>
            <h1 class="mt-4 text-4xl md:text-5xl font-bold leading-tight">Wi‑Fi Voucher</h1>
            <p class="mt-4 text-gray-300 text-lg leading-relaxed">
                Use a voucher code to access the guest Wi‑Fi. Vouchers can be time‑limited or data‑limited depending on the network setup.
            </p>
        </div>

        <div class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-6 items-start">
            <div class="bg-card border border-white/10 rounded-2xl shadow p-6 md:p-8 fade-in">
                <h2 class="text-2xl font-bold flex items-center gap-2">
                    <span data-feather="log-in" class="w-6 h-6 text-accent"></span>
                    How to connect
                </h2>
                <ol class="mt-6 space-y-4 text-gray-200 list-decimal list-inside">
                    <li>
                        Connect to the Wi‑Fi network (SSID) shown on the sign.
                    </li>
                    <li>
                        Open a browser. The login page should appear automatically (captive portal).
                    </li>
                    <li>
                        Enter your voucher code and tap <span class="font-semibold">Login</span>.
                    </li>
                    <li>
                        If the login page doesn’t open, type <span class="font-semibold">example.com</span> in your browser and it should redirect.
                    </li>
                </ol>

                <div class="mt-8 p-4 rounded-xl bg-gray-900/40 border border-white/10 text-sm text-gray-200">
                    <div class="flex items-center gap-2 font-semibold text-accent">
                        <span data-feather="info" class="w-4 h-4"></span>
                        Tip
                    </div>
                    <p class="mt-2 text-gray-300">
                        If your voucher is rejected, double‑check for spaces or incorrect characters. Voucher codes are usually one‑time or limited‑use.
                    </p>
                </div>
            </div>

            <div class="bg-gray-900 border border-white/10 rounded-2xl shadow p-6 md:p-8 fade-in">
                <h2 class="text-2xl font-bold flex items-center gap-2">
                    <span data-feather="shopping-bag" class="w-6 h-6 text-accent"></span>
                    Voucher options (example)
                </h2>
                <p class="mt-3 text-gray-300 text-sm">
                    These are sample packages. The actual price and limits depend on your hotspot setup.
                </p>

                <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-card border border-white/10 rounded-xl p-4">
                        <div class="font-semibold">1 Hour</div>
                        <div class="text-sm text-gray-300 mt-1">Quick browsing & messages</div>
                    </div>
                    <div class="bg-card border border-white/10 rounded-xl p-4">
                        <div class="font-semibold">3 Hours</div>
                        <div class="text-sm text-gray-300 mt-1">Streaming friendly (light)</div>
                    </div>
                    <div class="bg-card border border-white/10 rounded-xl p-4">
                        <div class="font-semibold">1 Day</div>
                        <div class="text-sm text-gray-300 mt-1">Best for visitors</div>
                    </div>
                    <div class="bg-card border border-white/10 rounded-xl p-4">
                        <div class="font-semibold">7 Days</div>
                        <div class="text-sm text-gray-300 mt-1">Weekly access</div>
                    </div>
                </div>

                <div class="mt-8 flex flex-col sm:flex-row gap-3">
                    <a href="{{ route('home') }}#contact" class="inline-flex justify-center items-center gap-2 px-6 py-3 rounded-lg bg-accent text-gray-900 hover:bg-blue-500">
                        <span data-feather="message-circle" class="w-5 h-5"></span>
                        Buy a Voucher / Help
                    </a>
                    <a href="{{ route('wifi-services') }}" class="inline-flex justify-center items-center gap-2 px-6 py-3 rounded-lg bg-card border border-white/10 hover:border-white/20">
                        <span data-feather="wifi" class="w-5 h-5 text-accent"></span>
                        WiFi Services
                    </a>
                </div>

                <div class="mt-8 p-4 rounded-xl bg-card border border-white/10 text-sm text-gray-200">
                    <div class="flex items-center gap-2 font-semibold text-accent">
                        <span data-feather="router" class="w-4 h-4"></span>
                        Works with these devices (examples)
                    </div>
                    <p class="mt-2 text-gray-300">
                        Voucher/captive portal hotspots can be deployed using TP‑Link (Omada), Ubiquiti (UniFi), or Grandstream (GWN) setups—depending on coverage, user load, and budget.
                    </p>
                    <p class="mt-2 text-gray-300">
                        <span class="font-semibold text-gray-100">Installation:</span> Free installation included for eligible setups (device configuration + captive portal + basic security).
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-10 bg-card border border-white/10 rounded-2xl p-6 md:p-8 fade-in">
            <h2 class="text-2xl font-bold flex items-center gap-2">
                <span data-feather="shield" class="w-6 h-6 text-accent"></span>
                Fair use & basic rules
            </h2>
            <div class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-4 text-sm text-gray-200">
                <div class="bg-gray-900/40 border border-white/10 rounded-xl p-4">
                    <div class="font-semibold text-accent">One device</div>
                    <div class="mt-1 text-gray-300">Some vouchers may allow only one device at a time.</div>
                </div>
                <div class="bg-gray-900/40 border border-white/10 rounded-xl p-4">
                    <div class="font-semibold text-accent">Speed limits</div>
                    <div class="mt-1 text-gray-300">Network speed may be shared and limited for fairness.</div>
                </div>
                <div class="bg-gray-900/40 border border-white/10 rounded-xl p-4">
                    <div class="font-semibold text-accent">Safe browsing</div>
                    <div class="mt-1 text-gray-300">Illegal activity is not allowed and may be blocked.</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
