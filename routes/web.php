<?php

use Illuminate\Support\Facades\Route;

Route::view('/about', 'About');
Route::view('/contacts', 'Contacts');
Route::view('/', 'welcome', [
    'greetings' => 'Hello',
    'name' => request('name'),

]);