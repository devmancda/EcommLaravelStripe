<?php

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

// Auth & gestion compte et commandes

use App\Http\Controllers\ItemController;

Auth::routes();

Route::get('/compte', 'HomeController@index')->name('home');

// La boutique & gestion des intl_get_error_message

Route::get('/', 'ItemController@index')->name('item.index');
Route::resource('item', 'ItemController')->except('index', 'show', 'create');

// Panier d'achat

// Paiement
