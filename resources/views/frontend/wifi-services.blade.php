@extends('layouts.frontend')

@section('title', 'WiFi Services')

@section('content')
<section class="py-16">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">
            <div class="fade-in">
                <p class="inline-flex items-center gap-2 text-sm px-3 py-1 rounded-full bg-gray-900/60 border border-white/10 text-gray-200">
                    <span data-feather="wifi" class="w-4 h-4 text-accent"></span>
                    Business Wi‑Fi & Hotspot Vouchers
                </p>
                <h1 class="mt-4 text-4xl md:text-5xl font-bold leading-tight">WiFi Services for homes, shops, and guest networks</h1>
                <p class="mt-4 text-gray-300 text-lg leading-relaxed">
                    I help you plan, install, and manage fast and secure Wi‑Fi with optional captive portal voucher access.
                    Ideal for small businesses, community locations, and private hotspots.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row gap-3">
                    <a href="{{ route('home') }}#contact" class="inline-flex justify-center items-center gap-2 px-6 py-3 rounded-lg bg-accent text-gray-900 hover:bg-blue-500">
                        <span data-feather="phone" class="w-5 h-5"></span>
                        Request a Quote
                    </a>
                    <a href="{{ route('voucher') }}" class="inline-flex justify-center items-center gap-2 px-6 py-3 rounded-lg bg-gray-900/60 border border-white/10 hover:border-white/20">
                        <span data-feather="key" class="w-5 h-5 text-accent"></span>
                        Voucher Page
                    </a>
                </div>
                <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4 text-sm text-gray-300">
                    <div class="bg-card border border-white/10 rounded-xl p-4">
                        <div class="text-accent font-semibold">Secure Setup</div>
                        <div class="mt-1">Guest isolation & strong WPA settings</div>
                    </div>
                    <div class="bg-card border border-white/10 rounded-xl p-4">
                        <div class="text-accent font-semibold">Voucher Access</div>
                        <div class="mt-1">Captive portal codes and time limits</div>
                    </div>
                    <div class="bg-card border border-white/10 rounded-xl p-4">
                        <div class="text-accent font-semibold">Support</div>
                        <div class="mt-1">Monitoring and quick troubleshooting</div>
                    </div>
                </div>
            </div>

            <div class="bg-card border border-white/10 rounded-2xl shadow p-6 md:p-8 fade-in">
                <h2 class="text-2xl font-bold flex items-center gap-2">
                    <span data-feather="check-circle" class="w-6 h-6 text-accent"></span>
                    What I deliver
                </h2>
                <ul class="mt-6 space-y-4 text-gray-200">
                    <li class="flex gap-3">
                        <span data-feather="map" class="w-5 h-5 text-accent mt-0.5"></span>
                        <div>
                            <div class="font-semibold">Coverage planning</div>
                            <div class="text-gray-300 text-sm">Site layout, AP placement, and signal optimization (indoor/outdoor).</div>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <span data-feather="shield" class="w-5 h-5 text-accent mt-0.5"></span>
                        <div>
                            <div class="font-semibold">Security & segmentation</div>
                            <div class="text-gray-300 text-sm">Separate guest Wi‑Fi from staff/home network with VLANs (where supported).</div>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <span data-feather="globe" class="w-5 h-5 text-accent mt-0.5"></span>
                        <div>
                            <div class="font-semibold">Captive portal & vouchers</div>
                            <div class="text-gray-300 text-sm">Voucher codes, time/data limits, and splash page branding.</div>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <span data-feather="settings" class="w-5 h-5 text-accent mt-0.5"></span>
                        <div>
                            <div class="font-semibold">Router & DNS tuning</div>
                            <div class="text-gray-300 text-sm">Stable routing, basic QoS, and safer DNS options.</div>
                        </div>
                    </li>
                    <li class="flex gap-3">
                        <span data-feather="activity" class="w-5 h-5 text-accent mt-0.5"></span>
                        <div>
                            <div class="font-semibold">Monitoring & maintenance</div>
                            <div class="text-gray-300 text-sm">Uptime checks, performance review, and periodic updates.</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-14 grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="bg-gray-900 border border-white/10 rounded-2xl p-6 fade-in">
                <h3 class="text-xl font-bold">Starter Setup</h3>
                <p class="mt-2 text-gray-300">For home hotspots and small shops.</p>
                <ul class="mt-4 text-sm text-gray-200 space-y-2 list-disc list-inside">
                    <li>Router + 1–2 AP configuration</li>
                    <li>Guest SSID + password</li>
                    <li>Basic security hardening</li>
                </ul>
                <a href="{{ route('home') }}#contact" class="mt-6 inline-flex items-center text-accent font-semibold">Ask for pricing <span data-feather="arrow-right" class="w-4 h-4 ml-2"></span></a>
            </div>

            <div class="bg-card border border-white/10 rounded-2xl p-6 fade-in">
                <h3 class="text-xl font-bold">Guest Wi‑Fi + Vouchers</h3>
                <p class="mt-2 text-gray-300">Perfect for shared access and fair usage.</p>
                <ul class="mt-4 text-sm text-gray-200 space-y-2 list-disc list-inside">
                    <li>Captive portal with voucher codes</li>
                    <li>Time/data limits per voucher</li>
                    <li>Guest isolation where supported</li>
                </ul>
                <a href="{{ route('voucher') }}" class="mt-6 inline-flex items-center text-accent font-semibold">See voucher flow <span data-feather="arrow-right" class="w-4 h-4 ml-2"></span></a>
            </div>

            <div class="bg-gray-900 border border-white/10 rounded-2xl p-6 fade-in">
                <h3 class="text-xl font-bold">Managed Wi‑Fi</h3>
                <p class="mt-2 text-gray-300">For businesses that want ongoing support.</p>
                <ul class="mt-4 text-sm text-gray-200 space-y-2 list-disc list-inside">
                    <li>Monitoring and performance checks</li>
                    <li>Firmware updates (scheduled)</li>
                    <li>Priority troubleshooting</li>
                </ul>
                <a href="{{ route('home') }}#contact" class="mt-6 inline-flex items-center text-accent font-semibold">Talk support <span data-feather="arrow-right" class="w-4 h-4 ml-2"></span></a>
            </div>
        </div>

        <div class="mt-14 bg-card border border-white/10 rounded-2xl p-6 md:p-8 fade-in">
            <h2 class="text-2xl font-bold">How it works</h2>
            <div class="mt-6 grid grid-cols-1 md:grid-cols-4 gap-4 text-sm text-gray-200">
                <div class="bg-gray-900/40 border border-white/10 rounded-xl p-4">
                    <div class="text-accent font-semibold">1) Quick check</div>
                    <div class="mt-1 text-gray-300">Discuss coverage area, users, and ISP (Starlink/other).</div>
                </div>
                <div class="bg-gray-900/40 border border-white/10 rounded-xl p-4">
                    <div class="text-accent font-semibold">2) Install</div>
                    <div class="mt-1 text-gray-300">Configure router, APs, SSIDs, and security.</div>
                </div>
                <div class="bg-gray-900/40 border border-white/10 rounded-xl p-4">
                    <div class="text-accent font-semibold">3) Test</div>
                    <div class="mt-1 text-gray-300">Speed, roaming, and captive portal voucher login.</div>
                </div>
                <div class="bg-gray-900/40 border border-white/10 rounded-xl p-4">
                    <div class="text-accent font-semibold">4) Handover</div>
                    <div class="mt-1 text-gray-300">Teach you how to generate vouchers and basic troubleshooting.</div>
                </div>
            </div>
        </div>

        <div class="mt-10 bg-gray-900 border border-white/10 rounded-2xl p-6 md:p-8 fade-in">
            <h2 class="text-2xl font-bold flex items-center gap-2">
                <span data-feather="cpu" class="w-6 h-6 text-accent"></span>
                Supported equipment (examples)
            </h2>
            <p class="mt-3 text-gray-300">
                I can deploy business Wi‑Fi and voucher hotspots using popular platforms based on your needs:
            </p>
            <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4 text-sm text-gray-200">
                <div class="bg-card border border-white/10 rounded-xl p-4">
                    <div class="font-semibold text-accent">TP‑Link Omada</div>
                    <div class="mt-1 text-gray-300">Great value for managed APs + controller.</div>
                </div>
                <div class="bg-card border border-white/10 rounded-xl p-4">
                    <div class="font-semibold text-accent">Ubiquiti UniFi</div>
                    <div class="mt-1 text-gray-300">Powerful ecosystem for business networks.</div>
                </div>
                <div class="bg-card border border-white/10 rounded-xl p-4">
                    <div class="font-semibold text-accent">Grandstream GWN</div>
                    <div class="mt-1 text-gray-300">Solid option for Wi‑Fi + captive portal.</div>
                </div>
            </div>
            <p class="mt-6 text-sm text-gray-300">
                <span class="font-semibold text-gray-100">Free installation:</span> Included for eligible projects (configuration, SSIDs, guest portal/vouchers, and basic security hardening).
            </p>
        </div>
    </div>
</section>
@endsection
