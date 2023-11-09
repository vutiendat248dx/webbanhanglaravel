<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use App\Models\Members\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class MemberRegisterController extends Controller
{
    public function index()
    {
        return view('Member\register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'address' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phonenumber' => 'required',
        ]);
        $data = new Member();
        $data->fullname = $request->fullname;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->phonenumber = $request->phonenumber;
        $data->save();
        Session::put('member', $data);
        return redirect()->route('loginmember');
    }
}
