<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create New Page</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow sm:rounded-lg p-6">
                <form action="{{ route('admin.pages.store') }}" method="POST">
                    @csrf

                    <label class="block mt-4 font-medium text-gray-700">Title</label>
                    <input type="text" name="title" value="{{ old('title') }}" class="w-full border p-2 rounded" required>

                    <label class="block mt-4 font-medium text-gray-700">Slug</label>
                    <input type="text" name="slug" value="{{ old('slug') }}" class="w-full border p-2 rounded" required>

                    <label class="block mt-4 font-medium text-gray-700">Content</label>
                    <textarea name="content" class="w-full border p-2 rounded h-64" required>{{ old('content') }}</textarea>

                    <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">Create Page</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
