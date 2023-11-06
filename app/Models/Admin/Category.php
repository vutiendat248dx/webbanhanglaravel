<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected $table = 'tb_category_admin';
    protected $fillable = [
        'id',
        'category_name',
    ];


    public function showCategory()
    {
        return DB::table('tb_category_admin')->get();
    }
    public function viewCate($cate_id)
    {
        return DB::table('tb_category_admin')
            ->where('id', '=', $cate_id)
            ->first();
    }
}
