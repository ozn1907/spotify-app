<div class="mt-10">
    <div class="flex text-gray-600">
        <div class="p-3 w-12">#</div>
        <div class="p-3 w-full">Title</div>
        <div class="p-3 w-full">Album</div>
        <div class="p-3 w-full">Date Added</div>
        <div class="p-3 w-full">
            <x-css-stopwatch />
        </div>
        <div class="p-3 w-12 text-right"></div>
    </div>


    @foreach ($artists as $artist)
    <div class="flex border-b border-gray-800 hover:bg-gray-800">
        <div class="p-3">{{$artist['id'] }}</div>
        <div class="p-3 w-full">{{ $artist['title'] }}</div>
        <div class="p-3 w-full">{{ $artist['album'] }}</div>
        <div class="p-3 w-full">{{ $artist['date']->format('d F Y') }}</div>
        <div class="p-3 w-full">
            {{ number_format($artist['duration'] / 60, 2) }}
        </div>
        <div class="p-3 w-12 text-right"><a href="{{ route('delete', ['id' => $artist['id']]) }}">
                <x-css-trash />
            </a>
        </div>
    </div>
    @endforeach
</div>