<?php
// Next -- 
//https://www.youtube.com/watch?v=Gx93Bz62AII&list=PLB4AdipoHpxaHDLIaMdtro1eXnQtl_UvE&index=6
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->na