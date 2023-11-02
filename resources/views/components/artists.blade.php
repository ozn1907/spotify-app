<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="mt-10">
    <div class="flex text-gray-600">
        <div class="p-3 w-full">Title</div>
        <div class="p-3 w-full">Album</div>
        <div class="p-3 w-full">Date Added</div>
        <div class="p-3 w-full">
            <x-css-stopwatch />
        </div>
        <div class="p-3 w-12 text-right">
            {{-- <a href="{{ route('delete.all') }}">
            </a> --}}
            <a href="javascript:void(0);" class="text-red-500 hover:text-red-950" onclick="deleteAllArtists()">
                <x-css-trash class="duration-300" />
            </a>

        </div>
    </div>
</div>

@foreach ($artists as $artist)
<div class="flex border-b border-gray-800 hover:bg-gray-800">
    <div class="p-3 w-full">{{ $artist['title'] }}</div>
    <div class="p-3 w-full">{{ $artist['album'] }}</div>
    <div class="p-3 w-full">{{ $artist['date']->format('d F Y') }}</div>
    <div class="p-3 w-full">
        {{ number_format($artist['duration'] / 60, 2) }}
    </div>
    <div class="p-3 w-12 text-right"><a href="{{ route('delete', ['id' => $artist['id']]) }}"
            class="hover:text-red-500  duration-300">
            <x-css-trash />
        </a>
    </div>
</div>
@endforeach

<script>
    function deleteAllArtists() {
        Swal.fire({
            title: 'Are you sure?',
            text: "This action will delete all artists. This cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete all artists'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ route('delete.all') }}";
            }
        });
    }
</script>