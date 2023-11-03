@if(session('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded absolute right-4 bottom-0"
    role="alert">
    <strong class="font-bold">!</strong>
    <span class="block sm:inline">{{ session('success') }}</span>
</div>
@endif

@if(session('delete'))
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded absolute right-4 bottom-0" role="alert">
    <strong class="font-bold"></strong>
    <span class="block sm:inline">{{ session('delete') }}</span>
</div>
@endif

@if(session('edit'))
<div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded absolute right-4 bottom-0"
    role="alert">
    <strong class="font-bold"></strong>
    <span class="block sm:inline">{{ session('edit') }}</span>
</div>
@endif