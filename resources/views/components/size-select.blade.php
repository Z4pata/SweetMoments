<div>
    <label for="size" class="block text-sm font-medium text-gray-700">Size</label>
    <select name="size" id="size" required
        class="mt-1 block w-full max-w-xs mx-auto rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        <option value="">Select a size</option>
        @foreach ($sizes as $size)
            <option value="{{ $size->value }}"
                {{ old('size') == $size->value ? 'selected' : '' }}>
                {{ $size->name }}
            </option>
        @endforeach
    </select>
    @error('size')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>