<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BetController;

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

Route::get('/', [HomeController::class, 'index']);
Route::prefix('bet')->group(function()
{
    Route::get('/add', [BetController::class, 'create']);
    Route::post('/add', [BetController::class, 'store'])->name('bet_add_post');
    Route::resource('/', BetController::class);
});

