<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-6">
                        <h1 class="text-2xl font-semibold">Products</h1>
                        <a href="{{ route('products.create') }}"
                            class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                            Create Product
                        </a>
                    </div>

                    @if ($products->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="py-2 px-4 border-b text-left">Name</th>
                                        <th class="py-2 px-4 border-b text-left">Type</th>
                                        <th class="py-2 px-4 border-b text-left">Size</th>
                                        <th class="py-2 px-4 border-b text-left"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td class="py-2 px-4 border-b">{{ $product->name }}</td>
                                            <td class="py-2 px-4 border-b">{{ $product->type }}</td>
                                            <td class="py-2 px-4 border-b">{{ $product->size }}</td>
                                            <td class="py-2 px-4 border-b">
                                                <a href="{{ route('products.show', $product->id) }}" class="bg-indigo-400 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                                    More
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-4">
                            {{ $products->links() }}
                        </div>
                    @else
                        <p class="text-gray-500">No products found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
