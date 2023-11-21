<?php

use App\Http\Controllers\OutfitsController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\WeaponsController;
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

Route::get('/home', function () {
    return view ('home' , [
        "title" => "Home"
    ]);
});

Route::get('weapon/all', [WeaponsController::class, 'index']);
Route::get('weapon/detail/{weapon}', [WeaponsController::class, 'show']);
Route::get('outfit/detail/{outfit}', [OutfitsController::class, 'show']);
Route::get('suppliers/detail/{suppliers}', [SuppliersController::class, 'show']);
Route::get('outfit/all', [OutfitsController::class, 'index']);
Route::get('suppliers/all', [SuppliersController::class, 'index']);


