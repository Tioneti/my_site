<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Page: {{ $page->title }}</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow sm:rounded-lg p-6">
                <form action="{{ route('admin.pages.update', $page) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <label class="block mt-4 font-medium text-gray-700">Title</label>
                    <input type="text" name="title" value="{{ old('title', $page->title) }}" class="w-full border p-2 rounded" required>

                    <label class="block mt-4 font-medium text-gray-700">Slug</label>
                    <input type="text" name="slug" value="{{ old('slug', $page->slug) }}" class="w-full border p-2 rounded" required>

                    <label class="block mt-4 font-medium text-gray-700">Content</label>
                    <textarea name="content" class="w-full border p-2 rounded h-64" required>{{ old('content', $page->content) }}</textarea>

                    <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">Update Page</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
