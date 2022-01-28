<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Produs;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Cartcontroller extends Controller
{
	public function addToCart(Request $request)
	{

		$product_id = $request->input('produs_id');
		$quantity = $request->input('quantity');
		// Get updateQuantity passed from data
		$updateQuantity = $request->input('updateQuantity');
		if( Auth::check() ) {
			$user_id = Auth::user()->id;
			$prod_check = Produs::where('id', $product_id)->first();
			if( $prod_check ) {
				if( $updateQuantity ) {
					$cart_item = Cart::where('prod_id', $product_id )->where('user_id', Auth::id() )->first();
					$cart_item->prod_quantity = $quantity;
					$cart_item->save();
					return response()->json(['status' => 'success', 'message' => $prod_check->produs_nume . ' updated to cart!']);
				}
				if( Cart::where('prod_id', $product_id )->where('user_id', $user_id )->exists() ) {
					$cart_item = Cart::where('prod_id', $product_id )->where('user_id', Auth::id() )->first();
					$cart_item->prod_quantity = $cart_item->prod_quantity + $quantity;
					$cart_item->save();
				} else {
					$cart_item = new Cart;
					$cart_item->user_id = $user_id;
					$cart_item->prod_id = $product_id;
					$cart_item->prod_quantity = $quantity;
					$cart_item->save();
				}
				return response()->json(['status' => 'success', 'message' => $prod_check->produs_nume . ' added to cart!']);
			}
		} else {
			return response()->json(['status' => 'You must be logged in to add items to your cart.']);
		}
	}

	public function viewcart()
	{
		$cart_items = Cart::where('user_id', Auth::id() )->get();
		return view('frontend.cart.index', compact('cart_items'));
	}
}
