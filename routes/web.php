<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home
Route::get('/', function () {
    return view('home');
}) ->name('home');

// Login
Route::get('/login', function () {
    return view('login');
})->name('login');

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
    Route::get('/', function () {
        return view('document-categories.all');
    })->name('document-categories');

    // Add Document
    Route::get('/add', function () {
        return view('document-categories.add');
    })->name('add-document-categories');

    // Edit Document
    Route::get('/edit/{id}', function () {
        return view('document-categories.edit');
    })->name('edit-document-categories');

});

// Users
Route::prefix('users')->group(function () {

    // Users
    Route::get('/', function () {
        return view('users.all');
    })->name('users');

    // Add User
    Route::get('/add', function () {
        return view('users.add');
    })->name('add-user');


    // Edit User
    Route::get('/edit/{id}', function () {
        return view('users.edit');
    })->name('edit-user');

});



