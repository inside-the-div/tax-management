<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@UserProfile')->name('user-profile');
Route::post('/profile', 'HomeController@updateUserProfile')->name('update-user-profile');
Route::get('/tax/profile', 'HomeController@taxProfile')->name('tax-profile');
Route::post('/tax/profile', 'HomeController@updateTaxProfile')->name('update-tax-profile');
Route::get('/details/income', 'HomeController@detailsIncome')->name('details-income');
Route::post('/details/income', 'HomeController@updateDetailsIncome')->name('upadte-details-income');
Route::get('/statement/income', 'HomeController@statementIncome')->name('statement-income');
Route::post('/statement/income', 'HomeController@updateStatementIncome')->name('upadte-statement-income');
Route::get('/tax/information', 'publicController@taxInfo')->name('tax-info');
