<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PagesController@home');

// Route::get('/', function () {

//     $tasks = [
//      'Go to the store',
     
//      'Go to the market',
 
//      'Go to work',
//      'Go to concert'
//     ];



//     return view('welcome', [
//      'tasks' => $tasks

//     ]);
// });



Route::get('/stuff', function() {
    return view('mytest');
});

Route::get('/contact', function(){

return view('contact');
});