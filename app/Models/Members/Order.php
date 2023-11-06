<?php

namespace App\Models\Members;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;
    protected $table = 'tb_order_member';
    protected $fillable = [
        'mem_id',
        'bill',
        'status',
        'payment_method',
    ];


    public function viewOrderAdmin()
    {
        return DB::table('tb_order_member')
            ->join('tb_member', 'tb_order_member.mem_id', '=', 'tb_member.id')
            ->select('tb_member.fullname', 'tb_member.address', 'tb_member.phonenumber', 'tb_order_member.*')
            ->get();
    }
}
