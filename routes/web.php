<?php

use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\CategoryAdminController;
use App\Http\Controllers\Admin\CheckLoginController;
use App\Http\Controllers\Admin\OrderAdminController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Members\AboutController;
use App\Http\Controllers\Members\BlogController;
use App\Http\Controllers\Members\CartMemberController;
use App\Http\Controllers\Members\CheckoutController;
use App\Http\Controllers\Members\ContactController;
use App\Http\Controllers\Members\MemberRegisterController;
use App\Http\Controllers\Members\MemberLoginController;
use App\Http\Controllers\Members\MemberShopController;
use App\Http\Controllers\Members\OrderDetailController;
use App\Http\Controllers\Members\ProductByCategoryController;
use App\Http\Controllers\Members\WebController;
use App\Http\Controllers\Members\WishlistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//admin
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('login');
Route::post('/admin/checkLogin', [CheckLoginController::class, 'logIn'])->name('checklogin');
Route::get('/dashboard', [CheckLoginController::class, 'dashboard'])->name('dashboard');

//admin_category
Route::get('/admin/category', [CategoryAdminController::class, 'index'])->name('category_admin');
Route::get('/category/showadd', [CategoryAdminController::class, 'showAdd'])->name('showcategory');
Route::post('/category/add', [CategoryAdminController::class, 'save'])->name('addcategory');
Route::get('/category/edit/{id}', [CategoryAdminController::class, 'show']);
Route::post('/category/update/{id}', [CategoryAdminController::class, 'update']);
Route::get('/category/delete/{id}', [CategoryAdminController::class, 'delete']);



//admin_product
Route::get('/admin/product', [ProductAdminController::class, 'viewproduct'])->name('product_admin');
Route::get('/product/showadd', [ProductAdminController::class, 'showAddPro'])->name('showaddproduct');
Route::post('/product/add', [ProductAdminController::class, 'save'])->name('addproduct');
Route::get('/product/showedit/{pro_id}', [ProductAdminController::class, 'showEdit']);
Route::post('/product/update/{pro_id}', [ProductAdminController::class, 'updatePro']);
Route::get('/product/deletepro/{pro_id}', [ProductAdminController::class, 'deletePro']);


//admin order
Route::get('/admin/orderdetails', [OrderAdminController::class, 'showOrder'])->name('showorder');
Route::get('/admin/orderdetails/{id}', [OrderAdminController::class, 'showOrderById']);



//Members
Route::get('/member/login', [MemberLoginController::class, 'index'])->name('loginmember');
Route::post('/member/checklogin', [MemberLoginController::class, 'checkmember'])->name('checkloginmember');

Route::get('/member/register', [MemberRegisterController::class, 'index'])->name('registermember');
Route::post('/member/register', [MemberRegisterController::class, 'register'])->name('register');

//web
Route::get('/member/client', [WebController::class, 'index'])->name('clientmember');
Route::get('/shop', [MemberShopController::class, 'index'])->name('viewshop');
Route::get('/wihslist', [WishlistController::class, 'index'])->name('wishlist');


Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/member/productbycategory/{cate_id}', [ProductByCategoryController::class, 'showproductbycategory']);

//cart
Route::get('/member/add-to-cart/{pro_id}', [CartMemberController::class, 'addToCart']);
Route::get('/cartmember', [CartMemberController::class, 'showCart'])->name('cartmember');
Route::get('/member/update-cart', [CartMemberController::class, 'updateCart'])->name('updatecart');
Route::get('/member/delete-pro-cart', [CartMemberController::class, 'deleteProCart'])->name('delCart');




//checkout
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/member/order', [CheckoutController::class, 'memberOrder'])->name('memberorder');
Route::get('/orderdetail', [OrderDetailController::class, 'viewOrder'])->name('vieworder');
