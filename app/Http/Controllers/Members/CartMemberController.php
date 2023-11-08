<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CartMemberController extends Controller
{
    public function showCart()
    {
        $value = Session::get('member');
        if (isset($value)) {
            if (Session::get('cart') != null) {
                $datacart['list'] = Session::get('cart');
                return view('Member.cart', $datacart);
            } else {
                return Redirect()->route('viewshop');
            }
        } else {
            return Redirect()->route('loginmember');
        }
    }
    public function addToCart($pro_id)
    {
        // Session::flush();

        $pro = new Product();
        $data = $pro->viewEditPro($pro_id);
        $value = Session::get('member');
        $cart = Session::get('cart');
        if (isset($cart[$pro_id])) {
            $cart[$pro_id]['quantity']++;
        } else {
            $cart[$pro_id] = [
                'product_id' => $pro_id,
                'name' => $data->name,
                'price' => $data->price,
                'images' => $data->images,
                'quantity' => 1,
                'member_id' => $value->id,
            ];
        }
        Session::put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'success'
        ], status: 200,);
    }
    public function updateCart(Request $request)
    {
        // dd($request->all());
        if ($request->id && $request->quantity) {
            $carts = Session::get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;
            Session::put('cart', $carts);
            $dataCart['list'] = Session::get('cart');
            $cartView = view('Member.components.cart_component', $dataCart)->render();
            return response()->json([
                'cart_component' => $cartView,
                'code' => 200,
                'message' => 'success'
            ], status: 200);
        }
    }
    public function deleteProCart(Request $request)
    {
        if ($request->id) {
            $carts = Session::get('cart');
            unset($carts[$request->id]);
            Session::put('cart', $carts);
            $dataCart['list'] = Session::get('cart');
            $cartView = view('Member.components.cart_component', $dataCart)->render();
            return response()->json([
                'cart_component' => $cartView,
                'code' => 200,
                'message' => 'success'
            ], status: 200);
        }
    }
}
