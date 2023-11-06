<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Members\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class MemberLoginController extends Controller
{
    public function index()
    {
        Session::forget('member');
        return view('Member\loginmember');
    }

    public function checkmember(Request $request)
    {
        // dd(Session::get('member'));
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $e = $request->email;
        if (Auth::guard('member')->attempt($arr)) {

            $request->session()->regenerate();
            $data = new Member();
            $value =  $data->findMembyEmail($e);
            Session::put('member', $value);
            return redirect()->route('clientmember');
        } else {
            return redirect()->back();
        };
    }
}
