<?php

Route::group(['middleware' => 'guest'], function (){
    // Login Form
    Route::get('/login', 'UserController@login')->name('login');
    // Login
    Route::post('/login', 'UserController@login_post');
});

Route::group(['middleware' => 'auth'], function(){
    // Home
    Route::get('/', function () {
        return view('home');
    }) ->name('home');

    // Documents
    Route::prefix('documents')->group(function () {

        // Documents
        Route::get('/', 'EvrakController@index')->name('documents');

        // Add Document
        Route::get('/add', 'EvrakController@add')->name('add-document');

        // Add Document Post
        Route::post('/add', 'EvrakController@add_post');

        // Edit Document
        Route::get('/edit/{id}', 'EvrakController@edit')->name('edit-document');

        // Edit Document Post
        Route::post('/edit/{id}', 'EvrakController@edit_post');

        // Delete Document
        Route::get('/delete/{id}', 'EvrakController@delete')->name('delete-document');

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
        Route::post('/edit/{id}', 'EvrakKategoriController@edit_post');

        // Delete Document
        Route::get('/delete/{id}', 'EvrakKategoriController@delete')->name('delete-document-categories');

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
        // Edit User Post
        Route::post('/edit/{id}', 'UserController@edit_post');

        // Delete User
        Route::get('/delete/{id}', 'UserController@delete')->name('delete-user');
    });

    // Logout
    Route::post('/logout','UserController@logout')->name('logout');
});