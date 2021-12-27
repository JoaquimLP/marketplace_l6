<?php

use App\Http\Controllers\Admin\{
    StoreController
};
use Illuminate\Support\Facades\Route;

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
    return redirect()->route("store.index");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->group(function(){
    Route::get('/store', [StoreController::class, 'index'])->name("store.index");
    Route::get('/store/create', [StoreController::class, 'create'])->name("store.create");
    Route::post('/store/salvar', [StoreController::class, 'store'])->name("stores.save");
    Route::get('/store/edit/{id}', [StoreController::class, 'edit'])->name("stores.edit");
    Route::put('/store/update/{id}', [StoreController::class, 'update'])->name("stores.update");
    Route::delete('/store/destroy/{id}', [StoreController::class, 'destroy'])->name('stores.destroy');
});
