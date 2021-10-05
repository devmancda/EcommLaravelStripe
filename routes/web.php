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
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/compte', 'HomeController@index')->name('home');

// La boutique & gestion des items

Route::get('/', 'ItemController@index')->name('item.index');
Route::resource('item', 'ItemController')->except('index', 'show', 'create');

// Panier d'achat

// Paiement
