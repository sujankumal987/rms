<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/sells', function(){
    return view('sells.index');
});



// product
Route::get('/products', function(){
    return view('products.index');
});

Route::get('/products/edit', function(){
    return view('products.edit');
});




// customer

Route::get('/customers', function(){
    return view('customers.index');
});

Route::get('/customers/create', function(){
    return view('customers.create');
});

Route::get('/customers/edit', function(){
    return view('customers.edit');
});




//pettycash

Route::get('/pettycashs', function(){
    return view('pettycashs.index');
});




// setting

Route::get('/settings', function(){
    return view('settings.index');
});

Route::get('/settings/register', function(){
    return view('settings.create-register');
});
Route::get('/settings/category', function(){
    return view('settings.create-category');
});

Route::get('/settings/tax', function(){
    return view('settings.create-tax');
});

Route::get('/settings/charge', function(){
    return view('settings.charge');
});

Route::get('/settings/custom', function(){
    return view('settings.custom');
});
Route::get('/settings/user', function(){
    return view('settings.user');
});
Route::get('/settings/discount', function(){
    return view('settings.discount');
});
Route::get('/settings/create-discount', function(){
    return view('settings.create-discount');
});
Route::get('/settings/production', function(){
    return view('settings.production-option');
});

Route::get('/settings/shop', function(){
    return view('settings.shop');
});

// end setting

// Dashboard
Route::get('/', function () {
    return view('dashboard');
});

// practise
Route::get('/settings/manisha', function () {
    return view('settings.manisha');
});

