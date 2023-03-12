<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
  public function cartList()

  {
    $cart = session('cart');

    return response(compact('cart'));
  }

  public function addToCart(Request $request)
  {
    $cart = session('cart');

    if (!$cart) {
      $cart = [
        $request['id'] => [
          "productId" => $request["productId"],
          "name" => $request["name"],
          "price" => $request["price"],
          "count" => $request["count"]
        ]
      ];
    }
    session(['cart' => $cart]);

    return response('', 204);
  }

  public function deleteCart(Request $request)
  {
    //
  }

  public function clearAllCart()
  {
    //
  }
}
