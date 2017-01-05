<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

route::get('/','pagescontroller@front');

Auth::routes();

Route::get('/home', 'HomeController@index');
route::resource('categories','categoriescontroller');
route::get('index','pagescontroller@index');
route::get('products','pagescontroller@products');
route::resource('product','productcontroller');
route::resource('cart','cartcontroller');
route::get('ananta','pagescontroller@ship');
route::resource('ship','shipcontroller');
route::get('checkout','paycontroller@checkout');
route::get('done',function(){
	return "done";
});
route::get('cancel',function(){
	return "cancel";
});