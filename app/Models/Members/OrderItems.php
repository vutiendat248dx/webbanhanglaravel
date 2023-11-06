<?php

namespace App\Models\Members;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OrderItems extends Model
{
    use HasFactory;
    protected $table = 'tb_order_items_member';
    protected $fillable = [
        'product_id',
        'orderId',
        'quantity',
        'total_price',
    ];
    public function viewOrderDetail()
    {
        return DB::table('tb_order_items_member')
            ->join('tb_product_admin', 'tb_order_items_member.product_id', '=', 'tb_product_admin.pro_id')
            ->join('tb_order_member', 'tb_order_items_member.orderId', '=', 'tb_order_member.id')
            ->select('tb_order_member.status', 'tb_order_member.payment_method', 'tb_product_admin.images', 'tb_product_admin.name', 'tb_order_items_member.*')
            ->get();
    }
    public function viewOrderDetailByAdmin($id)
    {
        return DB::table('tb_order_items_member')
            ->join('tb_product_admin', 'tb_order_items_member.product_id', '=', 'tb_product_admin.pro_id')
            ->join('tb_order_member', 'tb_order_items_member.orderId', '=', 'tb_order_member.id')
            ->select('tb_product_admin.images', 'tb_product_admin.name', 'tb_order_items_member.*')
            ->where('orderId', '=', $id)
            ->get();
    }
}
