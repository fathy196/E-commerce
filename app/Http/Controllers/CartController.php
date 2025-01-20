<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addToCart(Request $request)
{
    // dd($request->all());
    $product = Product::findOrFail($request->product_id);

    $cartItem = Cart::updateOrCreate(
        [
            'user_id' => Auth::id(), 
            'product_id' => $product->id,
        ],
        [
            'quantity' => DB::raw('quantity + ' . $request->quantity),
            'price' => $product->price,
        ]
    );
    // dd($cartItem);
    $cartItem->refresh();

    // return response()->json(['message' => 'Item added to cart', 'cartItem' => $cartItem]);
    return redirect()->route('shop')->with('status', 'Item added to cart');
}

}
