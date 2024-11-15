<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        "title" => "Dashboard"
    ]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/tables', function () {
    return view('tables',[
    "title" => "Tables"
    ]);
});
Route::get('/tabel', function () {
    return view('tabel');
});
Route::get('/data_tables', function () {
    return view('data_tables',[
        "title" => "Data Tables"
    ]);
});
