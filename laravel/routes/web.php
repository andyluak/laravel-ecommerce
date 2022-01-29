<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Tables\ProduseController;
// Frontend controller
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\Cartcontroller;

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

Route::get( '/', [ FrontendController::class, 'index' ] );
Route::get( '/produs', [ FrontendController::class, 'produse' ] );
Route::get( '/produs/{id}', [ FrontendController::class, 'produsview' ] );

Auth::routes();


Route::get('/home', [ App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::post('add-to-cart', [CartController::class, 'addToCart']);
Route::post('update-cart', [CartController::class, 'addToCart']);

Route::middleware(['auth'])->group(function() {
	Route::get('/cart', [CartController::class, 'viewcart']);
});
Route::middleware( ['auth', 'isAdmin'])->group( function() {
	Route::get('/dashboard', 'Admin\FrontendController@index');


	Route::get('/produse', 'Admin\Tables\ProduseController@index');
	Route::get('/produse/create', 'Admin\Tables\ProduseController@create');
	Route::post('adauga-produs', 'Admin\Tables\ProduseController@adauga');

	Route::get('produse/edit-prod/{id}', [ProduseController::class, 'edit']);
	Route::put( 'modifica-produs/{id}', [ProduseController::class, 'modifica']);
	Route::get( 'produse/sterge-produs/{id}', [ProduseController::class, 'sterge']);

	Route::get('/clienti', 'Admin\Tables\ClientiController@index');

});
