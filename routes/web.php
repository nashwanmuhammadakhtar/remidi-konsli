<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    //ambil data dari database
    $profile = 'aku anak aris';
    return view('blog',['data' => $profile]);
});

// route::view('/blog', 'blog', ['data' => 'aris mania']);

// Route::get('/blog/1', function () {
//  return'saya adalah ida';
// });

// Route::get('/blog/2', function () {
//     return'saya adalah ana';
//    });

//    Route::get('/blog/{id}/{title}', function (Request $request) {
//   return 'saya adalah andis '.$request->title; 
//    });

// Route::get('/blog/{id}', function (Request $request) {
//     return 'saya adalah indah '.$request->id;
//    });

Route::get('/blog', [blogcontroller::class, 'index']);