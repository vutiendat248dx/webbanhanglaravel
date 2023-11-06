<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductAdminController extends Controller
{
    public function viewproduct()
    {
        $pro['list'] = Product::all();
        // dd($pro['list']);
        return view('Admin\product', $pro);
    }
    public function showAddPro()
    {
        $categories = new Category();
        $cate['list'] = $categories->showCategory();
        return view('Admin\addproduct', $cate);
    }
    public function save(Request $request)
    {
        // $request->validate([
        //     'images' => 'required|image|mimes:jpeg,png,jpg,gif|size:1024',
        // ]);

        $pro = new Product();
        $pro->name = $request->name;
        $pro->cate_id = $request->cate_id;
        $pro->price = $request->price;
        $pro->amounts = $request->amounts;
        $pro->description = $request->description;
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $fileNameImg = time() . '.' . $extension;
            $path = $file->storeAs('images', $fileNameImg, 'public');
            $pro->images = 'storage/' . $path;
        }
        $pro->save();
        return redirect()->route('product_admin');
    }

    public function showEdit($pro_id)
    {
        // dd($pro_id);
        $pro_edit = new Product;
        $data['list'] = $pro_edit->viewEditPro($pro_id);
        $data_category = new Category;
        $data_cate['catelist'] = $data_category->showCategory();
        return view('Admin\showeditpro', $data, $data_cate);
    }

    public function updatePro(Request $request)
    {
        $dataPro = new Product();
        $dataPro->updatePro($request);
        return redirect()->route('product_admin');
    }
    public function deletePro($pro_id)
    {
        $delPro = new Product();
        $delPro->deletePro($pro_id);
        return redirect()->route('product_admin');
    }
}
