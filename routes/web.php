<?php

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
Auth::routes();

Route::get('/', 'HomeController@index');

/**
*   process images 
*/

Route::post('ajaxImageUpload', 'AjaxImageUploadController@ajaxImageUploadPost')->name('ajaxImageUpload');
Route::post('get_image','HomeController@getRandomImage')->name('get_image');
Route::post('get_previews','HomeController@getPreviewImages')->name('get_previews');
Route::post('update_score','HomeController@updateScore')->name('update_score');
Route::post('set_inappropriate','HomeController@set_inappropriate')->name('set_inappropriate');


/**
*
*/

Route::get('/auth/redirect/{provider}', 'SocialController@redirect')->name('facebookLogin');
Route::get('/callback/{provider}', 'SocialController@callback');
Route::get('/ratedpictures', 'RatedPicturesController@index')->name('ratedpictures');


/**
*   login panel
*/

Route::post('authenticate', 'Auth\LoginController@authenticate')->name('authenticate');
// Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
// Route::get('home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('/logout', 'Auth\LoginController@logout');

/**
*   admin panel
*/

Route::get('/admin', 'AdminHomeController@index')->name('admin')->middleware('is_admin');
Route::post('/remove_user', 'AdminHomeController@remove_user')->name('remove_user')->middleware('is_admin');

/**
*   user panel
*/
Route::get('/user', 'UserHomeController@index')->name('user');//->middleware('auth');
Route::post('get_image_user', 'UserHomeController@get_image')->name('get_image_user');//->middleware('auth');
Route::post('unflag_image', 'AdminHomeController@unflag_image')->name('unflag_image');//->middleware('auth');
Route::post('remove_image_user', 'UserHomeController@remove_image')->name('remove_image_user');//->middleware('auth');
