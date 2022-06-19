<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/blog-detail', function () {
    return view('blog-detail');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home2', [App\Http\Controllers\HomeController::class, 'index']);
Route::post('/add-product', [App\Http\Controllers\HomeController::class, 'store']);
Route::get('add-product', [App\Http\Controllers\HomeController::class, 'create']);
Route::get('admin', [App\Http\Controllers\HomeController::class, 'dashboard1']);
Route::get('admin2', [App\Http\Controllers\HomeController::class, 'dashboard2']);
Route::get('admin3', [App\Http\Controllers\HomeController::class, 'dashboard3']);
Route::get('admin4', [App\Http\Controllers\HomeController::class, 'dashboard4']);
Route::get('my-vehicles', [App\Http\Controllers\HomeController::class, 'vehiclesFunc']);
// Route::get('home', [App\Http\Controllers\ProductController::class, 'homeFunc']);
Route::get('listing-grid', [App\Http\Controllers\HomeController::class, 'listingFunc']);
Route::get('deleteRecord/{id}', [App\Http\Controllers\HomeController::class, 'destroy']);
Route::get('deleteRecord1/{id}', [App\Http\Controllers\HomeController::class, 'destroy1']);
Route::get('deleteRecord2/{id}', [App\Http\Controllers\HomeController::class, 'destroy2']);
Route::get('deleteRecord3/{id}', [App\Http\Controllers\HomeController::class, 'destroy3']);
Route::get('deleteRecord4/{id}', [App\Http\Controllers\HomeController::class, 'destroy4']);
// Route::get('kaka', [App\Http\Controllers\ProductController::class, 'kakaFunc']);
// Route::get('baba', [App\Http\Controllers\ProductController::class, 'kakaFunc1']);
Route::get('get-id/{id}', [App\Http\Controllers\HomeController::class, 'getUserDetail']);