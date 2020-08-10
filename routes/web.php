<?php

use Illuminate\Support\Facades\Route;
use App\Services\CodeService;

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
Route::get(
    'mail',
    function () {
        app(CodeService::class)->send('9739723@qq.com');
    }
);

Route::get(
    '/',
    function () {
        return view('home');
    }
)->name('home');

Route::group(
    ['namespace' => 'Account'],
    function () {
        Route::resource('login', 'LoginController')->only('index', 'store')->names(
            [
                'index' => 'login',
            ]
        );
        Route::get('logout', 'LoginController@logout')->name('logout');
        Route::resource('register', 'RegisterController')->only('index', 'store')->names(
            [
                'index' => 'register',
            ]
        );
        Route::post('register/code', 'RegisterController@code')->middleware(['throttle:1,1']);

    }
);

Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth'], 'namespace' => 'Admin', 'as' => 'admin.'],
    function () {
        Route::get('/', 'HomeController@index')->name('index');
        Route::get('setting', 'HomeController@setting')->name('setting');

        Route::get('module', 'ModuleController@index')->name('module.index');
        Route::get('module/install/{name}', 'ModuleController@install')->name('module.install');
        Route::delete('module/uninstall/{module:name}', 'ModuleController@uninstall')->name('module.uninstall');

        Route::resource('package','PackageController');
        Route::resource('group','GroupController');

    }
);

