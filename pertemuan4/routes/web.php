<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ["title" => 'Home']);
}); 

Route::get('/mahasiswa', function () {
    return view('mahasiswa', ["title" => 'Mahasiswa']);
});

Route::get('/kampus', function () {
    return view('kampus', ["title" => 'Kampus']); 
});