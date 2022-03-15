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

Route::get('/', [App\Http\Controllers\Front\IndexController::class, 'index']);

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
    //Настройки
    Route::get('/settings', [App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('settings.index');
    Route::post('/settings', [App\Http\Controllers\Admin\SettingsController::class, 'save'])->name('settings.save');
    Route::get('/account', [App\Http\Controllers\Admin\SettingsController::class, 'account'])->name('settings.account.index');
    Route::post('/account', [App\Http\Controllers\Admin\SettingsController::class, 'account_save'])->name('settings.account.save');
    //Абонименты
    Route::resource('subscribe', App\Http\Controllers\Admin\SubscribeController::class);
    //Вакансии
    Route::resource('vacancy', App\Http\Controllers\Admin\VacancyController::class);
    //Галлерея
    Route::resource('gallery', App\Http\Controllers\Admin\GalleryController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/news', [App\Http\Controllers\Front\NewsController::class, 'index'])->name('news.index');
Route::get('/about', [App\Http\Controllers\Front\AboutController::class, 'index'])->name('about.index');
Route::get('/trainers', [App\Http\Controllers\Front\TrainerController::class, 'index'])->name('trainer.index');
Route::get('/price', [App\Http\Controllers\Front\PriceController::class, 'index'])->name('price.index');
Route::get('/shop', [App\Http\Controllers\Front\ShopController::class, 'index'])->name('shop.index');
Route::get('/contact', [App\Http\Controllers\Front\ContactController::class, 'index'])->name('contact.index');
Route::post('/order/new/', [App\Http\Controllers\Admin\OrderController::class, 'new'])->name('orders.new');
Route::view('/single','solo')->name('solo');
Route::get('/sections/{id}', [App\Http\Controllers\Front\SectionController::class, 'index'])->name('section.index');
Route::view('/group','group')->name('group');
Route::get('/schedule', [App\Http\Controllers\Front\ScheduleController::class, 'index'])->name('schedule');
Route::get('/schedule/{trainer_id}', [App\Http\Controllers\Front\ScheduleController::class, 'trainer'])->name('schedule.trainer');
Route::view('/policy', 'policy')->name('policy');
Route::get('logout', function (){
        Auth::logout();
        return redirect('/login');
});
