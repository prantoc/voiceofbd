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

/*
|--------------------------------------------------------------------------
| Frontend Web Routes
|--------------------------------------------------------------------------
|
|
*/
Route::get('/', 'HomeController@index')->name('home');

Route::get('contact', 'HomeController@contact')->name('contact');
Route::get('terms-of-use', 'HomeController@termsOfUse')->name('terms-of-use');
Route::get('archive', 'HomeController@archive')->name('archive');

Route::group(['prefix' => 'post'], function () {
    Route::get('{slug}', 'HomeController@posts')->name('post');
    Route::get('single-post/{slug}', 'HomeController@singlePost')->name('single-post');
    Route::get('topic/{slug}', 'HomeController@tag')->name('tag');
});
Route::get('latest-news', 'HomeController@latestNews')->name('latest-news');

Route::get('/search/', 'HomeController@search')->name('search');

Route::get('page/{slug}', 'HomeController@singlePage')->name('single-page');

Route::get('country', 'HomeController@country')->name('country');
Route::get('/location-search/', 'HomeController@locationSearch')->name('location-search');
Route::get('country/{slug}', 'HomeController@location')->name('location');

Route::post('anothersubcat', 'HomeController@anotherSubCat')->name('anothersubcat');
Route::get('subcat/{id}', 'HomeController@subCat');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

