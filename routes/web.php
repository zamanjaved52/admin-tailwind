<?php

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::middleware('auth')->group(function (){

Route::get('panel',[\App\Http\Controllers\AdminController::class,'index']);
Route::get('annuity/lookup',[\App\Http\Controllers\AdminController::class,'lookup']);
Route::get('annuity/getannuity',[\App\Http\Controllers\AdminController::class,'getannuity']);
Route::get('annuity/payment',[\App\Http\Controllers\AdminController::class,'payment']);
Route::get('annuity/validate',[\App\Http\Controllers\AdminController::class,'validatee']);

});
