<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\InfoController@index');
Route::post('/', 'App\Http\Controllers\InfoController@form_login');
Route::post('/sign', 'App\Http\Controllers\InfoController@form_signin');

Route::get('/profile', function(){
    if(session()->has('data')){
        return view('profile');
    }
    else{
        return redirect('/');
    }
});

Route::get('/logout', function(){
    session()->forget('data');
    return redirect('/');
});

Route::get('/admin', function(){
    if(session()->has('data')){
        return view('admin');
    }
    else{
        dd("error");
    }
});

Route::post('/profile', 'App\Http\Controllers\DetailController@app_form');
Route::post('/appointment', 'App\Http\Controllers\DetailController@getAppDate');
Route::get('/book-offline', 'App\Http\Controllers\DetailController@book_offline');
Route::post('/book-offline', 'App\Http\Controllers\DetailController@offline_app');
Route::get('/patient', 'App\Http\Controllers\DetailController@getPatientDetail');
Route::get('/edit', 'App\Http\Controllers\DetailController@editUser');
Route::put('/edit', 'App\Http\Controllers\DetailController@edit_handler');
Route::get('/delete', 'App\Http\Controllers\DetailController@edit_delete');
Route::get('/delete_r', 'App\Http\Controllers\DetailController@delete_r');
Route::get('/checkin', 'App\Http\Controllers\DetailController@checkin_b');
Route::post('/checkin', 'App\Http\Controllers\DetailController@store_checkin');
Route::get('/history', 'App\Http\Controllers\DetailController@user_history');
Route::post('/guestBooking', 'App\Http\Controllers\DetailController@guest_booking');
