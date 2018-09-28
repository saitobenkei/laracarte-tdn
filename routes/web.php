<?php

Route::get('/', [
    'as' => 'home',
    'uses' => 'PageController@home'
]);

Route::get('/about', [
    'as' => 'about',
    'uses' => 'PageController@about'
]);
