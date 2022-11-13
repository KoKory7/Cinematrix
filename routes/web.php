<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CinemaController;

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

Route::get('/', [CinemaController::class,'home']);

Route::post('/sign_up', [CinemaController::class,'signUp'])->name('sign_up');
Route::get('/sign_out', [CinemaController::class,'signOut'])->name('sign_out');
Route::post('/custom_login', [CinemaController::class,'customLogin'])->name('custom_login');
Route::get('/book_seat/{seat}', [CinemaController::class,'bookSeat'])->name('book_seat');
Route::get('/booking', [CinemaController::class,'booking'])->name('booking');

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});