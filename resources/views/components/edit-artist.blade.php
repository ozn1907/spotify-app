@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/flowbite.js'])

<div class="max-w-3xl mx-auto">
    <div class="bg-white relative">
        <div class="flex justify-end pt-5 pr-5">
            <a href="{{ route('home') }}" class="w-8 h-8 hover:text-black">
                <x-monoicon-close />
            </a>

        </div>
        <form method="POST" action="{{ route('edit', ['id' => $artist->id]) }}"
            class="space-y-4 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8">
            @csrf
            <h3 class="text-xl font-medium text-gray-900">Edit an artist</h3>

            <x-form.form-field label="Title" name="title" type="text" placeholder="Edit title" />

            @error('title')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <x-form.form-field label="Album" name="album" type="text" placeholder="Edit Album" />

            @error('album')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <x-form.form-field label="Duration" name="duration" type="number" placeholder="Edit duration" />
            @error('duration')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            <x-form.button type="submit" text="UPDATE" />
        </form>
    </div>