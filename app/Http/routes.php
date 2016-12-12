<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('tags', 'TagController@index');