<?php

use App\Http\Controllers\ShawarmaController;
use App\Models\Shawarma;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::middleware(['auth'])->group(function(){
Route::resource('shawarma',ShawarmaController::class);
Route::get('shawarma/{shawarma}/destroy',[ShawarmaController::class,'destroy']);





});

Route::get('/{any}', function () {
    return view('welcome');
    })->where('any', '.*');