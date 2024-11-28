<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-semibold mb-6 text-center">Create New Product</h1>

                    <form method="POST" action="{{ route('products.store') }}" class="space-y-4">
                        @csrf
                        <div class="max-w-md mx-auto">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                    class="mt-1 block w-full max-w-xs mx-auto rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <x-type-select types='types'></x-type-select>

                            <x-size-select sizes='sizes'></x-size-select>

                            @for ($i = 1; $i <= 3; $i++)
                                <div>
                                    <label for="ingredient_{{ $i }}"
                                        class="block text-sm font-medium text-gray-700">Ingredient
                                        {{ $i }}</label>
                                    <select name="ingredients[]" id="ingredient_{{ $i }}"
                                        class="mt-1 block w-full max-w-xs mx-auto rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <option value="">Select an ingredient</option>
                                        @foreach ($ingredients as $ingredient)
                                            <option value="{{ $ingredient->id }}"
                                                {{ old('ingredients') && in_array($ingredient->id, old('ingredients')) ? 'selected' : '' }}>
                                                {{ $ingredient->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('ingredients.' . ($i - 1))
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            @endfor

                            <div class="flex items-center justify-center mt-4">
                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                    Create Product
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
