<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});
    
Route::get('admindashboard', function(){
    return view('admin.dashboard');
});