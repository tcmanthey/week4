<?php


Route::get('/', function(){
    return '/ route';
});
Route::get('/hotels', 'HotelController@index');

Route::group(['prefix' => 'dashboard'], function() {
    Route::get('/', function(){
        return '/dashboard route';
    });
    Route::get('reservations/create/{id}', 'ReservationController@create');
    Route::resource('reservations', 'ReservationController')->except('create');
});




