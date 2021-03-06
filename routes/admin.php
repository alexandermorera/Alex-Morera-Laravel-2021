<?php

Route::prefix('/admin')->group(function(){
	Route::get('/', 'Admin\DashboardController@getDashboard');
	Route::get('/users', 'Admin\UserController@getUsers');

	Route::get('/products', 'Admin\ProductController@getHome');
	Route::get('/products/add', 'Admin\ProductController@getProductAdd');
});