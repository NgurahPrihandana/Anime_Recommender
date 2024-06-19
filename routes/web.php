<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

Route::get('/docs', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/dummy', function () {
    return view('index_copy');
});

Route::get('/favorit', function () {
    return view('favorit');
})->name('favorit');

Route::get('/analitik', function () {
    return view('analitik');
})->name('analitik');

Route::get('/telusuri', function () {
    return view('telusuri');
})->name('telusuri');
