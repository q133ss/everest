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
    //Секции
    Route::resource('section_cat', App\Http\Controllers\Admin\SectionCatController::class);
    Route::resource('section', App\Http\Controllers\Admin\SectionController::class);
    //Новости
    Route::resource('news', App\Http\Controllers\Admin\NewsController::class);
    //Заказы
    Route::get('/orders', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('orders');
    Route::get('/order/{id}', [App\Http\Controllers\Admin\OrderController::class, 'show'])->name('orders.show');
    //Тренеры
    Route::resource('trainer', App\Http\Controllers\Admin\TrainerController::class);
    //Недели
    Route::resource('week', App\Http\Controllers\Admin\WeekController::class);
    //Занятия
    Route::resource('occup', App\Http\Controllers\Admin\OccupController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/news', [App\Http\Controllers\Front\NewsController::class, 'index'])->name('news.index');
Route::get('/about', [App\Http\Controllers\Front\AboutController::class, 'index'])->name('about.index');
Route::get('/trainers', [App\Http\Controllers\Front\TrainerController::class, 'index'])->name('trainer.index');
Route::get('/price', [App\Http\Controllers\Front\PriceController::class, 'index'])->name('price.index');
Route::get('/shop', [App\Http\Controllers\Front\ShopController::class, 'index'])->name('shop.index');
Route::view('/contact', 'contact')->name('contact.index');
Route::post('/order/new/', [App\Http\Controllers\Admin\OrderController::class, 'new'])->name('orders.new');
Route::view('/single','solo')->name('solo');
Route::view('/group','group')->name('group');
Route::view('/schedule','schedule')->name('schedule');
Route::view('/policy', 'policy')->name('policy');
Route::get('logout', function (){
        Auth::logout();
        return redirect('/login');
});
