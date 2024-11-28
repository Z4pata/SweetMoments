<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Ingredient;
use App\Models\Product;
use App\sizes;
use App\types;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('Products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ingredients = Ingredient::all();
        $types = types::cases();

        return view('Products.create', compact('ingredients', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $validated = $request->validated();

        $product =Product::create([
            'name' => $validated['name'],
            'type' => $validated['type'],
            'size' => $validated['size']
        ]);

        if (empty($validated['ingredients'])) 
        {
            throw new \Exception('there are not ingredients in the array');
        }
        
        $product->ingredients()->attach($validated['ingredients']);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
