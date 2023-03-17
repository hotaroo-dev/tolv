<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
  public function entireCartTable()
  {
    return CartResource::collection(Cart::all());
  }

  public function cartList()
  {
    $user_id = Auth::user()->id;

    return CartResource::collection(
      Cart::where('user_id', $user_id)->get()
    );
  }

  public function addToCart(Request $request)
  {
    $cart = Cart::create([
      'product_id' => $request['productId'],
      'name' => $request['name'],
      'price' => $request['price'],
      'count' => 1,
      'user_id' => $request['id']
    ]);

    return response(new CartResource($cart), 201);
  }

  public function updateCart(Request $request)
  {
    $cart = Cart::where('name', $request['name']);
    $cart->increment('count', 1);

    return response('', 204);
  }

  public function deleteCart(Request $request)
  {
    $cart = Cart::where('name', $request['name']);
    $cart->delete();

    return response('', 204);
  }
}
