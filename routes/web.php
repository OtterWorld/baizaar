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

// Main page
Route::get('/', 'MainController@index')
    ->name('main.page');

// Schedule page
Route::get('/schedule', 'ScheduleController@index')
    ->name('schedule.page');

Route::resource('/news', 'NewsController')
    ->except(['create','store','update', 'destroy'])
    ->names([
        'index' => 'news.all.page',
        'show' => 'news.one.page'
    ]);
Route::get('/news/{id1}/{id}','NewsController@execute')->name('news');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
