<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-semibold mb-6">Products</h1>

                    @if ($products->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="py-2 px-4 border-b text-left">Name</th>
                                        <th class="py-2 px-4 border-b text-left">Type</th>
                                        <th class="py-2 px-4 border-b text-left">Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td class="py-2 px-4 border-b">{{ $product->name }}</td>
                                            <td class="py-2 px-4 border-b">{{ $product->type }}</td>
                                            <td class="py-2 px-4 border-b">{{ $product->size }}</td>
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
