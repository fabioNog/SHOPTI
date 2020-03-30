<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/departments',function(){
    return view('others.departments');
})->name('departments');

Route::get('/clients',function(){
    return view('others.clients');
})->name('clients');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products','ProductsController');
