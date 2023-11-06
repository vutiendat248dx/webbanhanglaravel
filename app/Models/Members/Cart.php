<?php

namespace App\Models\Members;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'tb_cart';
    protected $fillable = [
        'product_id',
        'member_id',
        'quantity',
    ];

    public function showProductCart()
    {
        return DB::table('tb_cart')
            ->join('tb_product_admin', 'tb_cart.product_id', '=', 'tb_product_admin.pro_id')
            ->join('tb_member', 'tb_cart.member_id', '=', 'tb_member.id')
            ->select('tb_cart.quantity', 'tb_product_admin.images', 'tb_product_admin.price', 'tb_product_admin.name')
            ->get();
    }
}
