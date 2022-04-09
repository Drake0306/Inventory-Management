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
Route::get('/master/category','categoryController@catagoryMaster'); //category
Route::post('/master/category/create','categoryController@catagoryMasterCreate'); //category
Route::post('/master/category/update/{id}','categoryController@catagoryMasterUpdate'); //category

Route::get('/master/sub-category','subCategoryController@subCatagoryMaster'); //sub-category
Route::post('/master/sub-category/create','subCategoryController@subCatagoryMasterCreate'); //sub-category
Route::post('/master/sub-category/update/{id}','subCategoryController@subCatagoryMasterUpdate'); //sub-category

Route::get('/master/material','materialController@materialMaster'); //material
Route::post('/master/material/create','materialController@materialMasterCreate'); //material
Route::post('/master/material/update/{id}','materialController@materialMasterUpdate'); //material

Route::get('/master/vendor','vendorController@vendorMaster'); //vendor
Route::post('/master/vendor/create','vendorController@vendorMasterCreate'); //vendor
Route::post('/master/vendor/update/{id}','vendorController@vendorMasterUpdate'); //vendor

Route::get('/master/units','unitsController@unitsMaster'); //units
Route::post('/master/units/create','unitsController@unitsMasterCreate'); //units
Route::post('/master/units/update/{id}','unitsController@unitsMasterUpdate'); //units

Route::get('/master/type','typeController@typeMaster'); //type
Route::post('/master/type/create','typeController@typeMasterCreate'); //type
Route::post('/master/type/update/{id}','typeController@typeMasterUpdate'); //type

Route::get('/master/type-of-seller','typeOfSellerController@typeofSellerMaster'); //type-of-seller
Route::post('/master/type-of-seller/create','typeOfSellerController@typeofSellerMasterCreate'); //type-of-seller
Route::post('/master/type-of-seller/update/{id}','typeOfSellerController@typeofSellerMasterUpdate'); //type-of-seller

Route::get('/master/work-spots','workSpotController@workSpotsMaster'); //work-spots
Route::post('/master/work-spots/create','workSpotController@workSpotsMasterCreate'); //work-spots
Route::post('/master/work-spots/update/{id}','workSpotController@workSpotsMasterUpdate'); //work-spots
