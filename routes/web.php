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


// Auth
Route::get('/','log_inController@log_in');
Route::post('/log_in','log_inController@log_in_config');

Route::get('/master/user','viewController@userMaster'); //user
Route::post('/master/user/create','viewController@userMasterCreate'); //user
Route::post('/master/user/update/{id}','viewController@userMasterUpdate'); //user

Route::get('/master/company','viewController@companyMaster'); //company
Route::post('/master/company/create','viewController@companyMasterCreate'); //company
Route::post('/master/company/update/{id}','viewController@companyMasterUpdate'); //company

// Content
Route::get('/dashboard','viewController@dashboardView');

//Master
Route::get('/master/category','viewController@catagoryMaster'); //category
Route::post('/master/category/create','viewController@catagoryMasterCreate'); //category
Route::post('/master/category/update/{id}','viewController@catagoryMasterUpdate'); //category

Route::get('/master/sub-category','viewController@subCatagoryMaster'); //sub-category
Route::post('/master/sub-category/create','viewController@subCatagoryMasterCreate'); //sub-category
Route::post('/master/sub-category/update/{id}','viewController@subCatagoryMasterUpdate'); //sub-category

Route::get('/master/material','viewController@materialMaster'); //material
Route::post('/master/material/create','viewController@materialMasterCreate'); //material
Route::post('/master/material/update/{id}','viewController@materialMasterUpdate'); //material

Route::get('/master/vendor','viewController@vendorMaster'); //vendor
Route::post('/master/vendor/create','viewController@vendorMasterCreate'); //vendor
Route::post('/master/vendor/update/{id}','viewController@vendorMasterUpdate'); //vendor

Route::get('/master/units','viewController@unitsMaster'); //units
Route::post('/master/units/create','viewController@unitsMasterCreate'); //units
Route::post('/master/units/update/{id}','viewController@unitsMasterUpdate'); //units

Route::get('/master/type-of-seller','viewController@typeofSellerMaster'); //type-of-seller
Route::post('/master/type-of-seller/create','viewController@typeofSellerMasterCreate'); //type-of-seller
Route::post('/master/type-of-seller/update/{id}','viewController@typeofSellerMasterUpdate'); //type-of-seller

Route::get('/master/work-spots','viewController@workSpotsMaster'); //work-spots
Route::post('/master/work-spots/create','viewController@workSpotsMasterCreate'); //work-spots
Route::post('/master/work-spots/update/{id}','viewController@workSpotsMasterUpdate'); //work-spots
