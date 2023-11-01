<div id="authentication-modal" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
    <div class="relative w-full max-w-md px-4 h-full md:h-auto">
        <!-- Modal content -->
        <div class="bg-white rounded-lg shadow relative">
            <div class="flex justify-end p-2">
                <x-form.close-button />
            </div>
            <form method="POST" action="{{ route('artists.store') }}" class="space-y-4 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8">
                @csrf
                <h3 class="text-xl font-medium text-gray-900">Adding an artist</h3>

                <x-form.form-field label="Title" name="title" type="text" placeholder="Enter title" />

                @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror

                <x-form.form-field label="Album" name="album" type="text" placeholder="Enter Album" />

                @error('album')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror

                <x-form.form-field label="Duration" name="duration" type="number" placeholder="Enter duration" />
                @error('duration')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                <x-form.button type="submit" text="ADD" />
            </form>
        </div>
    </div>
</div>
