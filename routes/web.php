<?php

use App\Http\Controllers\ShortURLController;
use App\Http\Controllers\ShortURLRedirectController;
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

Route::get('/short-url', [ShortURLController::class, 'index']);
Route::get('/{url_short}', [ShortURLRedirectController::class, 'show']);
