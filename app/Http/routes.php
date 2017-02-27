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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('index');
});
Route::get('/sign', function () {
    return view('sign');
});
/*Route::get('/congratulation', function () {
    return view('congratulation');
});*/


Route::get('sign/store','chatuserController@store');
Route::post('sign/store','chatuserController@store');
/*Route::delete('chatrooms/destroy/{chatroom}','ChatroomsController@destroy');
Route::post('chatrooms/destroy/{chatroom}','ChatroomsController@destroy');*/

Route::get('users','chatuserController@index');
Route::post('users','chatuserController@index');


Route::get('login/check','chatuserController@check');
Route::post('login/check','chatuserController@check');


Route::get('messages/store','messageController@store');
Route::post('messages/store','messageController@store');

Route::get('messages/getmessages','messageController@getmessages');
Route::post('messages/getmessages','messageController@getmessages');


Route::get('/room', function () {
    return view('rooms');
});


Route::get('rooms','roomController@index');
Route::post('rooms','roomController@index');
Route::get('rooms/store','roomController@store');
Route::post('rooms/store','roomController@store');
Route::delete('rooms/destroy/{chatroom}','roomController@destroy');
Route::post('rooms/destroy/{chatroom}','roomController@destroy');


Route::get('/message', function () {
    return view('messages');
});


Route::get('messages','messageController@index');
Route::post('messages','messageController@index');
Route::get('messages/store','messageController@store');
Route::post('messages/store','messageController@store');
Route::delete('messages/destroy/{message}','messageController@destroy');
Route::post('messages/destroy/{message}','messageController@destroy');


Route::get('/user', function () {
    return view('users');
});
Route::get('/login', function () {
    return view('login');
});



Route::get('users','chatuserController@index');
Route::post('users','chatuserController@index');
Route::get('users/store','chatuserController@store');
Route::post('users/store','chatuserController@store');
Route::get('show','chatuserController@show');
Route::post('show','chatuserController@show');
Route::get('edit','chatuserController@edit');
Route::post('edit','chatuserController@edit');
Route::get('update','chatuserController@update');
Route::post('update','chatuserController@update');
Route::get('delete','chatuserController@delete');
Route::post('delete','chatuserController@delete');
Route::get('users/login','chatuserController@check');
Route::post('users/login','chatuserController@check');


Route::get('/profile', function () {
    return view('profile');
});



Route::post('store','chatuserController@store');


Route::get('allrooms','roomController@getall');
Route::post('allrooms','roomController@getall');


Route::get('allmessages','messageController@getall');
Route::post('allmessages','messageController@getall');

Route::get('allusers','chatuserController@getall');
Route::post('allusers','chatuserController@getall');

Route::get('/about', function () {
    return view('about');
});
Route::get('/FAQ', function () {
    return view('FAQ');
});


