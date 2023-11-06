<?php

namespace App\Models\Members;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Member extends Model
{
    use HasFactory;
    protected $table = 'tb_member';
    protected $fillable = [
        'fullname',
        'address',
        'phonenumber',
        'email',
        'password',
    ];

    public function findAll()
    {
        return DB::table('tb_member')->get();
    }
}
