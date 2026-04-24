<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Preview Page: {{ $page->title }}</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">{{ $page->title }}</h1>
                <div class="prose max-w-full">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
