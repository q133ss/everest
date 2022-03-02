<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', function (){
        return view('admin.index');
    })->name('index');

    Route::resource('section_cat', App\Http\Controllers\Admin\SectionCatController::class);
    Route::resource('section', App\Http\Controllers\Admin\SectionController::class);

});
