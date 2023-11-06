<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {

        $data = new Product();
        $pro['list'] = $data->viewProbyCate();
        return view('Member.homepage', $pro);
    }
}
