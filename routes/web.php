<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ProductsController@index');

Route::get('cart', 'ProductsController@cart');

Route::get('cartt', 'ProductsController@cartt');

Route::get('add-to-cart/{id}', 'ProductsController@addToCart');

Route::patch('update-cart', 'ProductsController@update');

Route::delete('remove-from-cart', 'ProductsController@remove');