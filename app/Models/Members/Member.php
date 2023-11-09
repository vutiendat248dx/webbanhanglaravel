<?php

namespace App\Models\Members;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Member extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;
    protected $table = 'tb_member';
    protected $fillable = [
        'fullname',
        'address',
        'phonenumber',
        'email',
        'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function findAll()
    {
        return DB::table('tb_member')->get();
    }
    public function findMembyEmail($e)
    {
        return DB::table('tb_member')->where('email', '=', $e)->first();
    }
}
