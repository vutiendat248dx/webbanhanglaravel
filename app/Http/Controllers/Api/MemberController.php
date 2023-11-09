<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Members\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class MemberController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $data = Member::where('email', $request->email)->first();
        if (!$data || !Hash::check($request->password, $data->password, [])) {
            return response()->json([
                'message' => 'Dose not exist',
            ], 404);
        }

        $token = $data->createToken('token_member')->plainTextToken;
        return response()->json([
            'token' => $token,
            'type' => 'bearer',
        ], 200);
    }
    public function register(Request $request)
    {
        $data = new Member();
        $data->email = $request->email;
        $data->fullname = $request->fullname;
        $data->address = $request->address;
        $data->phonenumber = $request->phonenumber;
        $data->password = Hash::make($request->password);
        $data->save();
        return response()->json([
            'data' => $data,
            'messages' => 'Success'
        ], 200);
    }
}
