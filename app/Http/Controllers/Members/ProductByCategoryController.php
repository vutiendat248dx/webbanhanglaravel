<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class ProductByCategoryController extends Controller
{
    public function showproductbycategory($cate_id)
    {
        // dd($cate_id);
        $dataCate = new Category();
        $item['item'] = $dataCate->viewCate($cate_id);
        $data = new Product();
        $pro['data'] = $data->viewProbyCategory($cate_id);
        return view('Member\showProbyCate', $pro, $item);
    }
}
