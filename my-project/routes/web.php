<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $results = DB::table('TBL_User')->get();
    return $results;
});

Route::get('/welcome', function () {
    return view('welcome');
});
