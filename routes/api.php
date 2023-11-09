<?php

use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\MemberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/member', function (Request $request) {
    return $request->member();
});
Route::post('/login', [MemberController::class, 'login']);
Route::post('/register', [MemberController::class, 'register']);


Route::post('/cartmember', [CartController::class, 'saveCart']);
