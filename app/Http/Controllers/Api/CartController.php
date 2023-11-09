<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function saveCart(Request $request)
    {
        $pro = Product::where('pro_id', $request->product_id)->first();
        $value = Session::get('member');
        $cart = Session::get('cart');
        if (isset($cart[$pro_id])) {
            $cart[$pro_id]['quantity']++;
        } else {
            $cart[$pro_id] = [
                'product_id' => $pro_id,
                'name' => $pro->name,
                'price' => $pro->price,
                // 'images' => $pro->images,
                'quantity' => 1,
                'member_id' => $value->id,
            ];
        }
        Session::put('cart', $cart);
        return response()->json([
            'data' => $cart,
            'message' => 'success'
        ], 200);
    }
}
