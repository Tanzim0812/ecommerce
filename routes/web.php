<?php

use Illuminate\Support\Facades\Route;




Route::get('/','sitecontroller@home')->name('home');
Route::get('/product','sitecontroller@product')->name('product');


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
//category
Route::get('/category/add-category','categorycontroller@addcategory')->name('add-category');
Route::post('/category/save_category','categorycontroller@savecategory')->name('save_category');
Route::get('/category/manage-category','categorycontroller@managecategory')->name('manage-category');
//Route::get('/category/active-category/{id}','categorycontroller@activecategory')->name('active-category');
//Route::get('/category/inactive-category/{id}','categorycontroller@inactivecategory')->name('inactive-category');
Route::get('/category/category-status/{id}/{category_status}','categorycontroller@categorystatus')->name('category-status');

//Route::get('/category/delete-category/{id}','categorycontroller@deletecategory')->name('delete-category');
Route::get('/category/category-deleteajax/{id}','categorycontroller@categorydeleteajax')->name('category-deleteajax');
Route::get('/category/edit-category/{id}','categorycontroller@editcategory')->name('edit-category');
Route::post('/category/update-category','categorycontroller@updatecategory')->name('update-category');

//// Group_Item_controller
Route::get('/group/add-groupitem','groupitemcontroller@addgroupitem')->name('add-groupitem');

Route::post('/group/save-groupitem','groupitemcontroller@savegroupitem')->name('save-groupitem');
Route::get('/group/delete-groupitem/{id}','groupitemcontroller@deletegroupitem')->name('delete-groupitem');

Route::get('/group/manage-groupitem','groupitemcontroller@managegroupitem')->name('manage-groupitem');
Route::get('/group/groupitem-status/{id}/{groupitem_status}','groupitemcontroller@groupitemstatus')->name('groupitem-status');
Route::get('/group/edit-groupitem/{id}','groupitemcontroller@editgroupitem')->name('edit-groupitem');
Route::post('/group/update-groupitem','groupitemcontroller@updategroupitem')->name('update-groupitem');


///sub group item controller

Route::get('/group/add-subgroupitem','subgroupitemcontroller@add_sub_groupitem')->name('add-subgroupitem');
Route::post('/group/save-subgroupitem','subgroupitemcontroller@save_sub_groupitem')->name('save-subgroupitem');
Route::get('/group/edit-subgroupitem/{id}','subgroupitemcontroller@edit_sub_groupitem')->name('edit-subgroupitem');
Route::post('/group/update-subgroupitem','subgroupitemcontroller@update_sub_groupitem')->name('update-subgroupitem');

Route::get('/group/manage-subgroupitem','subgroupitemcontroller@manage_sub_groupitem')->name('manage-subgroupitem');
