<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function(){

    Route::get('dashboard', "Admin\DashboardController@index");

Route::resource('category','Admin\Category\Categorycontroller');
Route::resource('subcategory','Admin\subcategory\subcategoryController');
Route::resource('product','Admin\Product\ProductController');
Route::resource('review', 'Admin\reviews\ReviewController');

});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
