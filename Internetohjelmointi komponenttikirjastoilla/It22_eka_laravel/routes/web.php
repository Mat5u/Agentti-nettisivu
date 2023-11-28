<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TuoteController;
use App\Http\Controllers\PalauteController;
use App\Http\Controllers\ValmistajaController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\Auth\LoginRegisterController;

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

//Etusivu
Route::get('/', function () {
    return view('etusivu');
});

//Lisää
/*Route::get('/kauppa', function(){
    return view('kauppa');
});*/

//Thudrutuut
Route::get('/todo', [TodoController::class, 'lomake']) -> name('todoLomake');
Route::post('/todo', [TodoController::class, 'todoTallenna']) -> name('todoTallenna');
Route::get('/todoKaikki', [TodoController::class, 'todoKaikki'])->name('todoKaikki');
Route::get('/todoEdit/{todo}', [TodoController::class, 'todoEdit'])->name('todoEdit');
Route::put('/todoUpdate/{todo}', [TodoController::class, 'todoUpdate'])->name('todoUpdate');
Route::delete('/todo/{todo}', [TodoController::class, 'todoDelete'])->name('todoDelete');

//Tuotteet
Route::get('/tuotteet', [TuoteController::class, 'lomake']) -> name('tuotteetLomake');
Route::post('/tuotteet', [TuoteController::class, 'tuotteetTallenna']) -> name('tuotteetTallenna');
Route::get('/kauppa', [TuoteController::class, 'kauppaKaikki'])->name('kauppaKaikki');
Route::get('/tuotteetKaikki', [TuoteController::class, 'tuotteetKaikki'])->name('tuotteetKaikki');
Route::get('/tuotteetEdit/{tuote}', [TuoteController::class, 'tuotteetEdit'])->name('tuotteetEdit');
Route::put('/tuotteetUpdate/{tuote}', [TuoteController::class, 'tuotteetUpdate'])->name('tuotteetUpdate');
Route::delete('/tuotteet/{tuote}', [TuoteController::class, 'tuotteetDelete'])->name('tuotteetDelete');

//Valmistaja
Route::get('/valmistaja', [ValmistajaController::class, 'lomake']) -> name('valmistajaLomake');
Route::post('/valmistaja', [ValmistajaController::class, 'valmistajaTallenna']) -> name('valmistajaTallenna');
Route::get('/valmistajaKaikki', [ValmistajaController::class, 'valmistajaKaikki'])->name('valmistajaKaikki');
Route::get('/valmistajaEdit/{valmistaja}', [ValmistajaController::class, 'valmistajaEdit'])->name('valmistajaEdit');
Route::put('/valmistajaUpdate/{valmistaja}', [ValmistajaController::class, 'valmistajaUpdate'])->name('valmistajaUpdate');
Route::delete('/valmistaja/{valmistaja}', [ValmistajaController::class, 'valmistajaDelete'])->name('valmistajaDelete');

//Palaute
Route::get('/palaute', [PalauteController::class, 'lomake']);
Route::post('/palaute', [PalauteController::class, 'palauteTallenna']) -> name('palauteLomake');

//Käyttäjien hallinta
/*Route::get('/register', function(){
    return view('register', [UserController::class, 'lomake']);
});*/
Route::post('/regdb', [UserController::class, 'userTallenna']);

//Kuvat
Route::prefix('image')->group(function () {
    Route::get('img/{filename}','ImageController@showImage')
    ->name('Image');
});

//For adding an image
Route::get('/add-image',[ImageUploadController::class,'addImage'])->name('images.add');

//For storing an image
Route::post('/store-image',[ImageUploadController::class,'storeImage'])->name('images.store');

//For showing an image
Route::get('/view-image',[ImageUploadController::class,'viewImage'])->name('images.view');

//Real registration
Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});