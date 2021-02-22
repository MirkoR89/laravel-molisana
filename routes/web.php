<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {     
    return view('pages.home');
})->name('home');

Route::get('products', function () {

    $data = json_decode(config('data.data'), true);

    return view('pages.products', compact('data'));
})->name('products');

Route::get('contacts', function () {     
    return view('pages.contacts');
})->name('contacts');
