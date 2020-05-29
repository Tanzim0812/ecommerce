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


Route::get('/','sitecontroller@home')->name('home');
Route::get('/product','sitecontroller@product')->name('product');


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/category/add-category','categorycontroller@addcategory')->name('add-category');
Route::post('/category/save_category','categorycontroller@savecategory')->name('save_category');
Route::get('/category/manage-category','categorycontroller@managecategory')->name('manage-category');
Route::get('/category/active-category/{id}','categorycontroller@activecategory')->name('active-category');
Route::get('/category/inactive-category/{id}','categorycontroller@inactivecategory')->name('inactive-category');
Route::get('/category/delete-category/{id}','categorycontroller@deletecategory')->name('delete-category');

