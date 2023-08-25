<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\SubAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KpiController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/kpi', [KpiController::class, 'index'])->name('kpi');
Auth::routes(['register' => false]);
Route::get('/login',function(){
    return redirect('/');
});
Route::get('/',[AuthController::class,'loadLogin']);
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

// ********** Super Admin Routes *********
Route::group(['prefix' => 'super-admin','middleware'=>['web','isSuperAdmin']],function(){
    Route::get('/getUsers', [SuperAdminController::class, 'getData'])->name('super-admin.getData');
    Route::get('/dashboard',[SuperAdminController::class,'dashboard'])->name('super-admin/dashboard');
    Route::get('/users',[SuperAdminController::class,'users'])->name('superAdminUsers');
    Route::get('/manage-role/{id}', [SuperAdminController::class, 'manageRole'])->name('manageRole');
    Route::post('/update-role',[SuperAdminController::class,'updateRole'])->name('updateRole');
    Route::get('/create',[SuperAdminController::class,'create'])->name('create');
    Route::post('/create-user',[SuperAdminController::class,'createUser'])->name('createUser');
});

// ********** Sub Admin Routes *********
Route::group(['prefix' => 'sub-admin','middleware'=>['web','isSubAdmin']],function(){
    Route::get('/dashboard',[SubAdminController::class,'dashboard'])->name('sub-admin/dashboard');
    Route::get('/users',[SubAdminController::class,'users'])->name('subAdminUsers');
});

// ********** Admin Routes *********
Route::group(['prefix' => 'admin','middleware'=>['web','isAdmin']],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard']);
    Route::get('/users',[AdminController::class,'users'])->name('AdminUsers');
});

// ********** User Routes *********
Route::group(['middleware'=>['web','isUser']],function(){
    // Route::get('/dashboard',[UserController::class,'dashboard']);
    Route::get('/users',[UserController::class,'users'])->name('Users');

});