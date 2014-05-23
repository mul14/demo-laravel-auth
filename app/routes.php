<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@showWelcome']);

// User sessions
Route::get('login', ['as' => 'login', 'uses' => 'SessionController@create']);
Route::post('login', ['as' => 'auth', 'uses' => 'SessionController@store']);

// User Registration
Route::get('register', 'RegistrationController@create');
Route::resource('register', 'RegistrationController',
    [
        'only' => ['create', 'store']
    ]
);
