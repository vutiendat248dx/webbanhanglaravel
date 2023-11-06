<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class CategoryAdminController extends Controller
{
    public function index()
    {
        $categories = new Category();
        $data['list'] = $categories->showCategory();
        return view('Admin.category', $data);
    }
    public function showAdd()
    {
        return view('Admin\addcategory');
    }
    public function save(Request $request)
    {

        $request->validate([
            'category_name' => 'required',
        ]);
        $categoryName = new Category([
            'category_name' => $request->category_name,
        ]);
        $categoryName->save();
        return redirect()->route('category_admin');
    }
    public function show($id)
    {
        $data['cate'] = Category::find($id);
        return view('Admin\editcategory', $data);
    }
    public function update(Request $request, $id)
    {
        $data = Category::find($id);
        $data->category_name = $request->category_name;
        $data->update();
        return redirect()->route('category_admin');
    }
    public function delete($id)
    {
        Category::destroy($id);
        return redirect()->route('category_admin');
    }
}
