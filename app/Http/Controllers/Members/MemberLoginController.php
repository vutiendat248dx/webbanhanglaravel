<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Members\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class MemberLoginController extends Controller
{
    public function index()
    {
        return view('Member\loginmember');
    }
    public function checkmember(Request $request)
    {
        $value['list'] = Session::get('member');
        if (isset($value['list'])) {
            if ($request->email == $value['list']['email']) {
                $data = new Product();
                $pro['list'] = $data->viewProbyCate();
                return view('Member.homepage', $pro);
            } else {
                return redirect()->back();
            }
        } else {
            return Redirect()->route('register');
        }
    }
}
