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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/addlist', function () {
    return view('mailchimp.addlist');
});
Route::get('/adduser', function () {
    return view('mailchimp.adduser');
});
Route::post('mailchimp/list', 'MailchimpController@createList')->name('list');
Route::post('mailchimp/list/user', 'MailchimpController@updateUser')->name('mcuser');