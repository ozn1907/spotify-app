@props(['title'])

<div class="bg-black text-gray-300 min-h-screen p-10">
    <div class="flex">
        <img class="mr-6" src="https://placekitten.com/g/200/200">
        <div class="flex flex-col justify-center">
            <!-- content -->
            <h4 class="mt-0 mb-2 uppercase text-gray-500 tracking-widest text-xs">Playlist</h4>
            <h1 class="mt-0 mb-2 text-white text-4xl">{{ $title }}</h1>
            <p class="text-gray-600 text-sm">{{ $totalSongsSynced }} nummers -
                @if ($totalDurationInHours > 0)
                {{ $totalDurationInHours }} hour{{ $totalDurationInHours > 1 ? 's' : '' }}
                @endif
                @if ($totalDurationInMinutes > 0)
                {{ $totalDurationInMinutes }} minute{{ $totalDurationInMinutes > 1 ? 's' : '' }}
                @endif
            </p>
            <div class="pt-2">
                <button
                    class="bg-transparent hover:border-green-500 text-gray-500 hover:text-green-500 font-bold duration-300 focus:outline-none"
                    type="button" data-modal-toggle="authentication-modal">
                    <x-css-add />
                </button>
            </div>
        </div>
    </div>

    <!-- This is an example component -->
    <div class="max-w-2xl mx-auto">
        <!-- Main modal -->
        <x-add-artist />

    </div>