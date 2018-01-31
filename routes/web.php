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
//home
Route::get('/', 'homeController@Display');
Route::get('/searchdata', 'homeController@search');

//Admin
Route::get('adminpanel', 'adminController@login')->name('adminpanel');
Route::post('adminlogin', 'adminController@admindisplay')->name('adminlogin');
Route::get('admin/getshades', 'adminController@getshades')->name('getshades');

Route::get('shadeformdata', 'adminController@shadeform')->name('shadeformdata');
Route::post('senddata', 'adminController@savedata');
Route::get('pakfm', 'adminController@pakingview')->name('pakfm');
Route::post('pkfmdata', 'adminController@savepkfm');
Route::get('userdata', 'adminController@usdata')->name('userdata');
Route::get('orderdata', 'adminController@ordata')->name('orderdata');
Route::get('querydata', 'adminController@qudata')->name('querydata');
Route::get('upbrand', 'updateController@brand')->name('upbrand');
Route::get('upshade{id}', 'updateController@shade')->name('upshade');
//shades

Route::get('/brand-shades', 'PaintController@shades');
Route::get('/brand-shades/{id}', 'PaintController@shades');

//khareedo
Route::get('/khareedo', 'PaintController@khareedo');

//services
Route::post('get-price-packing', 'ServicesController@getPriceforPacking');
Route::post('kahredo-proceed', 'ServicesController@khareedo_proceed');
Route::post('place-order', 'ServicesController@place_order');
Route::post('get-verified-for-order', 'ServicesController@get_verified_order');
Route::get('get-basket', 'ServicesController@get_basket');
Route::post('place-query', 'ServicesController@place_query');
Route::get('remove-shopping', 'ServicesController@remove_shopping');


//users
Route::post('get-login', 'ServicesController@get_verified_order');
Route::get('logout', 'UserController@logout');
Route::post('get-register', 'UserController@signup');
Route::get('profile', 'UserController@profile');
Route::post('add-logo', 'UserController@add_logo');
Route::post('aboutus-update', 'UserController@update_aboutus');

//state controller
Route::get('company-bar', 'StateController@companyLeftsideBar');


//services for paints
Route::get('service-painter', 'PServicesController@painter');
Route::get('service-carpenter', 'PServicesController@carpainter');
Route::get('service-plumber', 'PServicesController@plumber');
Route::get('service-architecture', 'PServicesController@architecture');
Route::post('/email-sub', 'ServicesController@email_sub');


//paint wall
Route::get('/paint-wall', 'PaintController@paintwall');
Route::post('/start-sharing-update', 'StateController@start_sharing_update');

Route::get('all-brands', 'CompanyController@allBrands');
Route::get('{company}', 'CompanyController@index');


