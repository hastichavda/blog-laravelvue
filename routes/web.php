<?php

Route::get('/',function () {
    return view ('welcome');
   
});

Route::get('/post/get-data','PostController@getPosts');

Auth::routes();

Route::get('/home','HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin']],function(){
    Route::resource('/adminhome', 'PostController');
    Route::resource('/category', 'CategoryController');
});



