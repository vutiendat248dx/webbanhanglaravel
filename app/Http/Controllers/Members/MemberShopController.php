<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class MemberShopController extends Controller
{
    public function index()
    {
        $data['list'] = Category::all();
        $datapro['datapro'] = Product::all();
        return view('Member\viewshop', $data, $datapro);
    }
}
