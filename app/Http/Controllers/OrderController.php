<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\priorities;
use App\statuses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = Order::create([
            'priority' => priorities::Normal->value,
            'status' => statuses::NewOrder->value,
            'product_id' => $request->product_id,
            'user_id' => Auth::user()->id,
            'delivered_date' => null,
            'created_at' => now(),
            'updated_at' => null,
        ]);

        return redirect()->route('products.index')->with('success', 'Pedido creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
