<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AlerteController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\EvenementController;
use App\Http\Controllers\Controller;

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

Route::get('/', [Controller::class,'accueil'])->name("accueil"); /*function () {
    return view('welcome');
});*/
/*Route::get('/askToJoin', function () {
    return view('askToJoin');

});*/

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/admin/addcategory', function () {
//     return view('admin/add_category');
// })->middleware(['auth'])->name('admin/addcategory');
Route::post('admin/document/upload',[DocumentController::class,'uploadFile'])->name('document.upload');

// Détails article
Route::get('/article/{id}', [ArticleController::class,'show'])->name('details-article');

Route::middleware(['auth'])->group(function () {
    Route::get('admin/user/actived/{user}',[UserController::class,'actived'])->name('user.actived');
    Route::get('admin/user/unactived/{user}',[UserController::class,'unActived'])->name('user.unactived');
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/category', CategoryController::class) ;
    Route::resource('admin/evenement', EvenementController::class);
    Route::resource('admin/article', ArticleController::class);
    Route::resource('admin/document', DocumentController::class);
});
Route::resource('admin/alerte', AlerteController::class);

require __DIR__.'/auth.php';
