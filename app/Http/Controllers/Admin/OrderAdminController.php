<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Members\Order;
use App\Models\Members\OrderItems;
use Illuminate\Http\Request;

class OrderAdminController extends Controller
{
    public function showOrder()
    {
        $data = new Order();
        $viewOrder['list'] = $data->viewOrderAdmin();
        return view('Admin\vieworder', $viewOrder);
    }
    public function showOrderById($id)
    {
        $data = new OrderItems();
        $viewdetailorder['list'] = $data->viewOrderDetailByAdmin($id);
        return view('Admin\viewdetailorder', $viewdetailorder);
    }
}
