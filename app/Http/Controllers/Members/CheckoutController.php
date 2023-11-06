<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Members\Order;
use App\Models\Members\OrderItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function checkout()
    {

        $data['listmember'] = Session::get('member');
        $datacart['listcart'] = Session::get('cart');
        if (isset($data['listmember']) && isset($datacart['listcart'])) {
            if ($datacart['listcart'] != []) {
                return view('Member.checkout', $data, $datacart);
            } else {
                return Redirect()->route('viewshop');
            }
        } else {
            return Redirect()->route('loginmember');
        }
    }
    public function memberorder(Request $request)
    {
        if (Session::get('member')) {
            if (Session::get('cart') != []) {
                $order = new Order();
                $order->status = 'Đang chờ yêu cầu';
                $order->mem_id = Session::get('member')->id;
                $order->bill = $request->bill;
                $order->payment_method = $request->payment_method;

                if ($order->save()) {
                    $datacart = Session::get('cart');
                    foreach ($datacart as $items) {
                        $pro = new Product();
                        $value = $items['product_id'];
                        $data = $pro->viewProCart($value);
                        $orderItems = new OrderItems();
                        $orderItems->product_id = $items['product_id'];
                        $orderItems->orderId = $order->id;
                        $orderItems->quantity = $items['quantity'];
                        $orderItems->total_price = $data->price;
                        $orderItems->save();
                    }
                    Session::forget('cart');
                    return redirect()->route('vieworder');
                } else {
                    return Redirect()->route('viewshop');
                }
            }
        } else {
            return Redirect()->route('loginmember');
        }
    }
}
