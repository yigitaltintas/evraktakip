<?php

// Home
Route::get('/', function () {
    return view('home');
}) ->name('home');

// Login Form
Route::get('/login', 'UserController@login')->name('login');
// Login
Route::post('/login', 'UserController@login_post');

// Documents
Route::prefix('documents')->group(function () {

    // Documents
    Route::get('/', function () {
        return view('documents.all');
    })->name('documents');

    // Add Document
    Route::get('/add', function () {
        return view('documents.add');
    })->name('add-document');


    // Edit Document
    Route::get('/edit/{id}', function () {
        return view('documents.edit');
    })->name('edit-document');

});

// Document Categories
Route::prefix('document-categories')->group(function () {

    // Documents
    Route::get('/', 'EvrakKategoriController@index')->name('document-categories');

    // Add Document
    Route::get('/add', 'EvrakKategoriController@add')->name('add-document-categories');
    Route::post('/add', 'EvrakKategoriController@add_post');

    // Edit Document
    Route::get('/edit/{id}', 'EvrakKategoriController@edit')->name('edit-document-categories');
    Route::get('/edit/{id}', 'EvrakKategoriController@edit_put');

});

// Users
Route::prefix('users')->group(function () {

    // Users
    Route::get('/', 'UserController@index')->name('users');

    // Add User Form
    Route::get('/add', 'UserController@add')->name('add-user');
    // Add User - POST
    Route::post('/add', 'UserController@add_post');

    // Edit User
    Route::get('/edit/{id}', 'UserController@edit')->name('edit-user');

});



