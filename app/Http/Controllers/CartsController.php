<?php

namespace App\Http\Controllers;

use App\Models\Processing;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;


class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$request->get('product_id')) {
            return ['message' => 'Cart items returned', 'items' => Cart::where('user_id', auth()->user()->id)->sum('quantity'),];
        }


        // Getting product details.

        $product = Product::where('id', $request->get('product_id'))->first();

        $productFoundInCart = Cart::where('product_id', $request->get('product_id'))->pluck('id');


        if ($productFoundInCart->isEmpty()) {
            // Adding Product in cart.

            $cart = Cart::create(['product_id' => $product->id, 'quantity' => 1, 'price' => $product->price, 'user_id' => auth()->user()->id,]);
        } else {
            // Incrementing Product Quantity.

            $cart = Cart::where('product_id', $request->get('product_id'))->increment('quantity');
        }

        // Check user cart items.

        if ($cart) {
            return ['message' => 'Cart Updated', 'items' => Cart::where('user_id', auth()->user()->id)->sum('quantity'),];
        }
    }
}
