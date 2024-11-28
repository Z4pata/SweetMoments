<div>
    <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
    <select name="type" id="type" required
        class="mt-1 block w-full max-w-xs mx-auto rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        <option value="">Select a product type</option>
        @foreach ($types as $type)
            <option value="{{ $type->value }}"
                {{ old('type') == $type->value ? 'selected' : '' }}>
                {{ $type->name }}
            </option>
        @endforeach
    </select>
    @error('type')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>