<?php

use App\Models\Evrak;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/evraklar', function (){
    return Evrak::all();
});

Route::get('/evraklar/{id}', function($id){
    return Evrak::find($id);
})->where('id', '[0-9]+');

Route::get('/evraklar/{keyword}', function($keyword){
    return Evrak::where('evrak_adi', 'like', "%{$keyword}%")->get();
})->where('keyword', '[A-Za-z]+');