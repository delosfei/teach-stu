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

Route::prefix('edu')->group(function() {
    Route::get('/', 'EduController@index');
});


Route::group(['prefix'=>'Edu/admin','middleware'=>['auth','admin'],'namespace'=>'Admin','as'=>'edu.admin.'],function() {
    Route::get('/', 'AdminController@index')->name('index');
    Route::resource('tag','TagController');
    Route::resource('lesson','LessonController');
    Route::post('lesson-search','LessonController@search')->name('lesson.search');
    Route::resource('system','SystemController');


});



