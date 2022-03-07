<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\SellerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ===================== Admin ROutes =============
Route::prefix('admin')->group(function(){

Route::get('/login',[AdminController::class, 'index'])->name('login_form');
Route::post('/login/owner',[AdminController::class, 'login'])->name('admin.login');
Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');

Route::get('/logout',[AdminController::class, 'admin_logout'])->name('admin.logout')->middleware('admin');

//admin register
Route::get('/register',[AdminController::class, 'admin_register'])->name('admin.register');

// admin create user 
Route::post('/user-create',[AdminController::class, 'admin_user_create'])->name('admin.user_create');
Route::get('/user-create',[AdminController::class, 'admin_user_create'])->name('seller_login_form');


});


// ===================== Admin ROutes =============
// Route::get('/sample',[SellerController::class,'testing']);

// ===================== Seller ROutes =============
Route::prefix('seller')->group(function(){

Route::get('/login',[SellerController::class, 'index'])->name('seller_login');
Route::get('/dashboard',[SellerController::class, 'seller_dashboard'])->name('seller.dashboard')->middleware('seller');

Route::post('/login',[SellerController::class, 'seller_login'])->name('seller.login');

Route::get('/logout',[SellerController::class, 'seller_logout'])->name('seller.logout')->middleware('seller');

//admin register
Route::get('/register',[SellerController::class, 'seller_register'])->name('seller.register');

// admin create user 
Route::post('/usercreate',[SellerController::class, 'seller_user_create'])->name('seller.user_create');
Route::get('/user-create',[AdminController::class, 'admin_user_create'])->name('seller_login_form');


});


// ===================== Seller ROutes =============

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
