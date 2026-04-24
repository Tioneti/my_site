@extends('layouts.frontend')

@section('title', $page->title)

@section('content')
<section class="py-16 fade-in">
    <div class="max-w-5xl mx-auto px-4">
        <div class="mb-10">
            <h1 class="text-4xl md:text-5xl font-bold text-white">{{ $page->title }}</h1>
            <p class="mt-3 text-gray-300">Updated from the admin panel under <span class="text-accent font-semibold">Admin → Pages</span>.</p>
        </div>

        <article class="bg-card border border-white/10 rounded-2xl shadow p-6 md:p-8 leading-relaxed">
            {!! $page->content !!}
        </article>

        <div class="mt-10 flex flex-col sm:flex-row gap-3">
            <a href="{{ route('wifi-services') }}" class="inline-flex justify-center items-center gap-2 px-5 py-3 rounded-lg bg-gray-900/60 border border-white/10 hover:border-white/20">
                <span data-feather="wifi" class="w-5 h-5 text-accent"></span>
                WiFi Services
            </a>
            <a href="{{ route('voucher') }}" class="inline-flex justify-center items-center gap-2 px-5 py-3 rounded-lg bg-gray-900/60 border border-white/10 hover:border-white/20">
                <span data-feather="credit-card" class="w-5 h-5 text-accent"></span>
                Voucher
            </a>
            <a href="{{ route('home') }}#contact" class="inline-flex justify-center items-center gap-2 px-5 py-3 rounded-lg bg-accent text-gray-900 hover:bg-blue-500">
                <span data-feather="mail" class="w-5 h-5"></span>
                Contact
            </a>
        </div>
    </div>
</section>
@endsection

