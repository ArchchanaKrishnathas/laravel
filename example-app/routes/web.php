<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});


Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

// Route::get('/about', function () {
//     return view('pages.about');
//    // return 'About page';
// });


// Route::view('/','welcome');

// Route::view('/home','home');
// Route::view('/gallery','layout.gallery');
// Route::view('/contact','layout.contact');
// Route::view('/about','layout.about');

// Dynamic Routes

Route::get('myPage/{name}',function($name){
    return $name;
});

// This works dynamically 
Route::get('pages/{page}',function($page){
   return view('pages/' . $page);
});

// Route::get('pages/about/{name}',function($name){
//     return view('pages/about',['my' => $name]);
// });

Route::get('pages/contact/{id}',function($id){
    return view('pages/contact',['pnNumber' => $id]);
});

Route::get('pages/about/{name}/{color}',function($name,$color){
    return view('pages/about',['my' => $name, 'bgColor' => $color]);
});