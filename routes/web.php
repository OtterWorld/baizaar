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

// About page
Route::get('/about', 'AboutsController@index')
    ->name('about.page');

// Info page
Route::get('/info', 'InfosController@index')
    ->name('info.page');

// Info page
Route::get('/search', 'SearchController@index')
    ->name('search.page');

// Schedule page
Route::get('/schedule', 'ScheduleController@index')
    ->name('schedule.page');

// Sales page
Route::resource('/sales', 'SalesController')
    ->only(['index', 'show'])
    ->names([
        'index' => 'sales.page',
        'show' => 'sales.show.page'
    ]);

// Contacts page
Route::get('/contacts', 'ContactsController@index')
    ->name('contacts.page');

// Contacts page
Route::get('/cooperations', 'CooperationsController@index')
    ->name('cooperations.page');

// Advertsing post page
Route::post('/advertisings', 'AdvertisingsController@index')
    ->name('advertisings.page.post');

// Arendators post page
Route::post('/arendators', 'ArendatorsController@index')
    ->name('arendators.page.post');

// Jobs post page
Route::post('/jobs', 'JobsController@index')
    ->name('jobs.page.post');

// Shops page
Route::resource('/shops', 'ShopsController')
    ->only('show')
    ->names([
        'show' => 'shop.show.page'
    ]);

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