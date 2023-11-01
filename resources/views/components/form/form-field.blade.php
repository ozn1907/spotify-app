<div>
    <label for="{{ $name }}" class="text-sm font-medium text-gray-900 block mb-2">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" placeholder="{{ $placeholder }}" required>

    @if ($errors->has($name))
    <p class="text-red-500 text-sm mt-1">{{ $errors->first($name) }}</p>
    @endif
</div>
