<?php

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

/* Route::get('/', function () {
    return view('home');
}); */

Route::get('/', function () {
    $data = [
        "items" => ['home', 'about', 'products', 'service', 'contacts'],
        
    ];
    return view('home', $data);
});


Route::get('/about', function () {
    $data = [
        "items" => ['home', 'about', 'products', 'service', 'contacts'],
        
    ];
    return view('about', $data);
});

Route::get('/products', function () {
    $data = [
        "items" => ['home', 'about', 'products', 'service', 'contacts'],
        
    ];
    return view('products', $data);
});

Route::get('/service', function () {
    $data = [
        "items" => ['home', 'about', 'products', 'service', 'contacts'],
        
    ];
    return view('service', $data);
});

Route::get('/contacts', function () {
    $data = [
        "items" => ['home', 'about', 'products', 'service', 'contacts'],
        
    ];
    return view('contacts', $data);
});
