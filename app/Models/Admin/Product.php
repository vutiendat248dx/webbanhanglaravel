<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class Product extends Model
{
    use HasFactory;
    protected $table = 'tb_product_admin';
    protected $fillable = [
        'pro_id', 'cate_id', 'name', 'price', 'amounts', 'images', 'description',
    ];

    public function viewEditPro($pro_id)
    {
        return DB::table('tb_product_admin')
            ->where('pro_id', '=', $pro_id)
            ->first();
    }
    public function viewProCart($value)
    {
        return DB::table('tb_product_admin')
            ->where('pro_id', '=',  $value)
            ->first();
    }

    public function updatePro(Request $request)
    {
        // dd($request->all());
        return DB::table('tb_product_admin')
            ->where('pro_id', '=', $request->pro_id)
            ->update(['cate_id' => $request->cate_id, 'name' => $request->name, 'price' => $request->price, 'amounts' => $request->amounts, 'description' => $request->description, 'images' => $request->images]);
    }
    public function deletePro($pro_id)
    {
        return  DB::table('tb_product_admin')->where('pro_id', '=', $pro_id)->delete();
    }
    public function viewProbyCate()
    {
        return DB::table('tb_product_admin')
            ->join('tb_category_admin', 'tb_product_admin.cate_id', '=', 'tb_category_admin.id')
            ->select('tb_product_admin.*', 'tb_category_admin.category_name')
            // ->groupBy('tb_category_admin.category_name')
            ->orderBy('tb_product_admin.cate_id', 'asc')
            ->limit(4)
            ->get();
    }
    public function viewProbyCategory($cate_id)
    {
        return DB::table('tb_product_admin')
            ->select('tb_product_admin.*')
            ->where('cate_id', '=', $cate_id)
            ->get();
    }
}
