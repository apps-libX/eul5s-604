<?php

// php artisan make:controller AboutController

Route::get('/', function () {
    return view('welcome');
});

Route::resource('about', 'AboutController', ['only' => ['index']]);