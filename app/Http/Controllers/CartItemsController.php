<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class CartItemsController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::all();
        return response()->json(['data' => $cartItems]);
    }

    public function store(Request $request)
    {
        
        $validated = $request->validate([

            'name' => 'required|string|max:255',
            'product_id' => 'required|integer',
            'quantity' => 'required|integer',
            
        ]);

        // Create and return the new cart item
        $cartItem = CartItem::create($validated);
        return response()->json(['data' => $cartItem], 201);
    }

    public function show($id)
    {
        $cartItem = CartItem::find($id);

        if (!$cartItem) {
            return response()->json(['error' => 'Cart item not found'], 404);
        }

        return response()->json(['data' => $cartItem]);
    }

    public function update(Request $request, $id)
    {
        $cartItem = CartItem::find($id);

        if (!$cartItem) {
            return response()->json(['error' => 'Cart item not found'], 404);
        }

        $validated = $request->validate([
            'product_id' => 'sometimes|required|integer',
            'quantity' => 'sometimes|required|integer',
            
        ]);

        // Update and return the cart item
        $cartItem->update($validated);
        return response()->json(['data' => $cartItem]);
    }

    public function destroy($id)
    {
        $cartItem = CartItem::find($id);

        if (!$cartItem) {
            return response()->json(['error' => 'Cart item not found'], 404);
        }

        // Delete the cart item
        $cartItem->delete();
        return response()->json(['message' => 'Cart item deleted successfully']);
    }
}
