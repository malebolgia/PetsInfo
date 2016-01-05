<?php

// Admin routes for pet
Route::group(array('prefix' =>'admin'), function ()
{
    Route::get('/pet/pet/list', 'Petfinder\Pet\Http\Controllers\PetAdminController@lists');
    Route::resource('/pet/pet', 'Petfinder\Pet\Http\Controllers\PetAdminController');
});

// User routes for pet
Route::group(array('prefix' =>'user'), function ()
{
    Route::get('/pet/pet/list', 'Petfinder\Pet\Http\Controllers\PetUserController@lists');
    Route::resource('/pet/pet', 'Petfinder\Pet\Http\Controllers\PetUserController');
});

// Public routes for pet
Route::get('pet/pet', 'Petfinder\Pet\Http\Controllers\PetPublicController@index');
Route::get('pet/pet/{slug?}', 'Petfinder\Pet\Http\Controllers\PetPublicController@show');
// Admin routes for petimage
Route::group(array('prefix' =>'admin'), function ()
{
    Route::get('/pet/petimage/list', 'Petfinder\Pet\Http\Controllers\PetimageAdminController@lists');
    Route::resource('/pet/petimage', 'Petfinder\Pet\Http\Controllers\PetimageAdminController');
});

// User routes for petimage
Route::group(array('prefix' =>'user'), function ()
{
    Route::get('/pet/petimage/list', 'Petfinder\Pet\Http\Controllers\PetimageUserController@lists');
    Route::resource('/pet/petimage', 'Petfinder\Pet\Http\Controllers\PetimageUserController');
});

// Public routes for petimage
Route::get('pet/petimage', 'Petfinder\Pet\Http\Controllers\PetimagePublicController@index');
Route::get('pet/petimage/{slug?}', 'Petfinder\Pet\Http\Controllers\PetimagePublicController@show');