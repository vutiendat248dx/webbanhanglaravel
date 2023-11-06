<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use App\Models\Members\OrderItems;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function viewOrder()
    {
        $data = new OrderItems();
        $orderDetail['list'] = $data->viewOrderDetail();
        return view('Member\orderdetail', $orderDetail);
    }
}
