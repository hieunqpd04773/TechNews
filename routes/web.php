<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tin;
use App\Models\DanhMuc;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\BinhLuanController;
use App\Http\Controllers\TinController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PagesController::class,'index']);
Route::get('tin/{id}',[PagesController::class,'getTin'])->name('getTin');
Route::get('danhmuc/{id}',[PagesController::class,'getTinByDanhMuc'])->name('getTinByDanhMuc');
Route::post('search',[PagesController::class,'search'])->name('search');
Route::post('comment',[PagesController::class,'addComment'])->name('addComment');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
Route::get('adminLoadLogin',[UsersController::class,'loadLogin'])->name('adminLoadLogin');
Route::post('adminLogin',[UsersController::class,'login'])->name('adminLogin');
Route::prefix('admin',[DanhMucController::class,'getAll'])->middleware('checkAdmin')->group(function () {
    Route::get('/', [DanhMucController::class,'getAll']);
    Route::prefix('danhmuc')->group(function () {
        Route::get('/', [DanhMucController::class,'getAll']);
        Route::get('index',[DanhMucController::class,'getAll'])->name('listDM');
        Route::post('create',[DanhMucController::class,'add'])->name('addDM');
        Route::get('delete/{id}',[DanhMucController::class,'delete'])->name('deleteDM');
        Route::get('update/{id}',[DanhMucController::class,'loadUpdate'])->name('loadUpdateDM');
        Route::post('update',[DanhMucController::class,'update'])->name('updateDM');
    });
    Route::prefix('user')->group(function () {
        Route::get('/', [UsersController::class,'getAll']);
        Route::get('index', [UsersController::class,'getAll'])->name('listUser');
        Route::get('disable/{id}', [UsersController::class,'disable'])->name('disableUser');
        Route::get('able/{id}', [UsersController::class,'able'])->name('ableUser');
        Route::get('delete/{id}', [UsersController::class,'delete'])->name('deleteUser');
        Route::get('loadUpdate/{id}', [UsersController::class,'getById'])->name('loadUpdateUser');
        Route::post('update',[UsersController::class,'update'])->name('updateUser');
        Route::get('create', [UsersController::class,'loadCreate'])->name('loadCreateUser');
        Route::post('create',[UsersController::class,'create'])->name('createUser');
        
    });
    Route::prefix('tin')->group(function () {
        Route::get('/', [TinController::class,'getAll']);
        Route::post('create',[TinController::class,'create'])->name('createTin');
        Route::get('index', [TinController::class,'getAll'])->name('listTin');
        Route::get('create', [TinController::class,'loadCreate'])->name('loadCreateTin');
        Route::get('loadUpdate/{id}', [TinController::class,'loadUpdate'])->name('loadUpdateTin');
        Route::post('update',[TinController::class,'update'])->name('updateTin');
        Route::get('delete{id}', [TinController::class,'delete'])->name('deleteTin');
    });
    Route::prefix('binhluan')->group(function () {
        Route::get('index', [BinhLuanController::class,'getAll'])->name('listBL');
        Route::get('hidden/{id}', [BinhLuanController::class,'hidden'])->name('hiddenBL');
        Route::get('delete/{id}', [BinhLuanController::class,'delete'])->name('deleteBL');
    });  
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
