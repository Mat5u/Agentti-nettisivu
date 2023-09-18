<?php

use App\Http\Controllers\UserController;
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
    return view('etusivu');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/palaute', function(){
    return view('palaute');
});
Route::get('/register', function(){
    return view('register', [UserController::class, 'lomake']);
});
Route::post('/regdb', [UserController::class, 'userTallenna']);