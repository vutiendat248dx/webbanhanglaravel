<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class AdminLoginController extends Controller
{
    public function index()
    {
        return view('Admin\login');
    }
}
