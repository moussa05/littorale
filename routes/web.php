<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/admin/addcategory', function () {
//     return view('admin/add_category');
// })->middleware(['auth'])->name('admin/addcategory');


Route::middleware(['auth'])->group(function () {
    Route::get('admin/user/actived/{user}',[UserController::class,'actived'])->name('user.actived');
    Route::get('admin/user/unactived/{user}',[UserController::class,'unActived'])->name('user.unactived');
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/category', CategoryController::class) ;
});
require __DIR__.'/auth.php';
