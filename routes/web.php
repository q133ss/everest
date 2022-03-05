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
    return view('index');
});

Route::get('/test', function (){
    $days = App\Models\Day::get();
    $times = App\Models\Time::get();
    return view('test', compact('days','times'));
});

Route::group(['prefix' => 'admin', 'as' => 'admin.' , 'middleware' => 'role:admin'], function () {
    Route::get('/', function (){
        return view('admin.index');
    })->name('index');

    Route::resource('section_cat', App\Http\Controllers\Admin\SectionCatController::class);
    Route::resource('section', App\Http\Controllers\Admin\SectionController::class);
    Route::resource('news', App\Http\Controllers\Admin\NewsController::class);

    Route::get('/orders', [App\Http\Controllers\admin\OrderController::class, 'index'])->name('orders');
    Route::get('/order/{id}', [App\Http\Controllers\admin\OrderController::class, 'show'])->name('orders.show');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/news', [App\Http\Controllers\front\NewsController::class, 'index'])->name('news.index');
Route::get('/about', [App\Http\Controllers\front\AboutController::class, 'index'])->name('about.index');
Route::get('/trainers', [App\Http\Controllers\front\TrainerController::class, 'index'])->name('trainer.index');
Route::get('/price', [App\Http\Controllers\front\PriceController::class, 'index'])->name('price.index');
Route::get('/shop', [App\Http\Controllers\front\ShopController::class, 'index'])->name('shop.index');
Route::view('/contact', 'contact')->name('contact.index');
Route::post('/order/new/', [App\Http\Controllers\admin\OrderController::class, 'new'])->name('orders.new');
Route::view('/single','solo')->name('solo');
Route::view('/group','group')->name('group');
Route::view('/schedule','schedule')->name('schedule');
