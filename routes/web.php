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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts/{contact}', 'ContactsController@index');

Route::get('/allianz-aliado-experto/contacts/{contact}/edit', 'ContactsController@edit')->name('allianz.aliado.experto');

Route::post('/allianz-aliado-experto', 'ContactsController@update')->name('allianz.aliado.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('data/import', 'ContactsController@import')->middleware('auth.basic');

Route::get('data/update', 'ContactsController@dataUpdate')->middleware('auth.basic');

/*
SMS
*/

Route::get('{contact}', 'ContactsController@edit')->name('sms');
Route::get('sms/parse', 'SmsController@parse')->middleware('auth.basic')->name('sms.parse');