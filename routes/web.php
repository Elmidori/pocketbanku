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



Route::get('/', 'WelcomeController@index')->middleware('guest');
Route::get('/virement', 'WelcomeController@virement')->middleware('auth');
Route::get('/deposer', 'WelcomeController@deposer')->middleware('auth');
Route::get('/transactions', 'WelcomeController@transactions')->middleware('auth');


Route::get('/login', 'WelcomeController@login');
Route::get('/register', 'WelcomeController@register');

Route::resource('transaction','transactionController');
Route::post('newTransaction', 'transactionController@store');
Route::post('newDeposit', 'transactionController@deposit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
