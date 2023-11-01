{{-- <form method="POST" action="{{ route('artists.store') }}"
class="max-w-md mx-auto p-4 bg-white rounded-lg shadow-lg">
@csrf

<div class="mb-4">
    <label for="title" class="block text-gray-700 font-semibold">Title</label>
    <input type="text" name="title" id="title" class="form-input" required value="{{ old('title') }}">
    @error('title')
    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label for="album" class="block text-gray-700 font-semibold">Album</label>
    <input type="text" name="album" id="album" class="form-input" required value="{{ old('album') }}">
    @error('album')
    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-6">
    <label for="duration" class="block text-gray-700 font-semibold">Duration (in seconds)</label>
    <input type="number" name="duration" id="duration" class="form-input" required value="{{ old('duration') }}">
    @error('duration')
    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<button type="submit" class="btn btn-primary">Add Artist</button>
</form> --}}


<div id="authentication-modal" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
    <div class="relative w-full max-w-md px-4 h-full md:h-auto">
        <!-- Modal content -->
        <div class="bg-white rounded-lg shadow relative">
            <div class="flex justify-end p-2">
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="authentication-modal">
                    <x-css-close />
                </button>
            </div>
            <form method="POST" action="{{ route('artists.store') }}" class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8">
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
                <button type="submit" class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add</button>
            </form>
        </div>
    </div>
</div>
