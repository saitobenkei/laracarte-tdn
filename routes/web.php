<?php

use App\Mail\ContactMessageCreated;

Route::get('/', [
    'as' => 'home',
    'uses' => 'PageController@home'
]);

Route::get('/about', [
    'as' => 'about',
    'uses' => 'PageController@about'
]);

Route::get('/contact', [
    'as' => 'contact',
    'uses' => 'MessageController@create'
]);

Route::post('/contact', [
    'as' => 'contact.store',
    'uses' => 'MessageController@store'
]);
Route::get('/test-email', function () {
    return new ContactMessageCreated('OULD CHIKH Karim', 'ouldchikh_karim@hotmail.fr', 'Exemple de message');
});
