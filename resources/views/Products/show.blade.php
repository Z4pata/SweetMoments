<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-semibold mb-6">Product Details</h1>

                    <div class="grid grid-cols-2 md:grid-cols-2 gap-6">
                        <div>
                            <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
                            <p class="text-gray-600 mb-4">Type: {{ $product->type }}</p>
                            <p class="text-gray-600 mb-4">Size: {{ $product->size }}</p>

                            <h3 class="text-lg font-semibold mb-2">Ingredients:</h3>
                            @if ($product->ingredients->count() > 0)
                                <ul class="list-disc list-inside">
                                    @foreach ($product->ingredients as $ingredient)
                                        <li>{{ $ingredient->name }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-gray-600">No ingredients listed for this product.</p>
                            @endif
                        </div>

                        {{-- Mas adelante con URL --}}

                        {{-- <div>
                            <img src="https://www.johaprato.com/files/styles/flexslider_full/public/budino_cioccolato_cocco2.png?itok=xaX42jAn" alt="{{ $product->name }}"
                                class="w-full h-auto rounded-lg shadow-md">
                        </div> --}}
                    </div>

                    <div class="mt-8 flex justify-between items-center">
                        <a href="{{ route('products.edit', $product->id) }}"
                            class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Order now ->
                        </a>


                        {{-- Mas adelante con Delete --}}

                        {{-- <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this product?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Delete Product
                            </button>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
