<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function () {


Route::get('/', function () {
    return view('index');
});
		
Route::get('/admin', function () {
    return view('admin_page.admin');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/room-single' , function(){
	return view('room-single');
});

Route::get('/personalinfo' , function(){
	return view('personal_info');
});

Route::get('/pastorders','ordersController@pastOrders');

Route::get('/upcomingorders','ordersController@upcomingOrders');

Route::get('/dashboard' ,'dashboardController@show');




Route::get('/admin' , 'adminController@index');

Route::post('/admin' , 'adminController@form');

Route::post('/search' , 'indexSearchController@indexSearch');

//Route::get('/search' , 'indexSearchController@indexSearch');

Route::get('/place/{place_name}/{place_id}', 'placeShowController@showPlace');

Route::get('/category-grid' , 'categoryGridController@index');

Route::get('/category-list' , 'categoryListController@index');

Route::get('/contact' , 'contactController@index');

Route::post('/contact' , 'contactController@form');

Route::get('/news' , 'newsController@index');

Route::get('/about' , 'aboutController@index');

//Route::get('/personalinfo' , 'personalInfoController@showPage' );

Route::get('personalinfo',[
   'middleware' => 'auth',
   'uses' => 'personalInfoController@showPage',
]);

Route::post('/personalinfo' , 'personalInfoController@form');
});

Route::auth();

Route::get('/get' , 'getCurrentController@get');

Route::get('/home', 'HomeController@index');

Route::get('/signup' , 'signUpController@check');