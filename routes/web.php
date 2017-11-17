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

Route::resource('/','IndexController',[
    'only' =>['index'],
    'names' => [
        'index'=>'home'
    ]
]);

Route::resource('portfolios','PortfolioController',[

    'parameters' => [

        'portfolios' => 'alias'

    ]

]);

Route::resource('articles','ArticlesController',[

    'parameters'=>[

        'articles' => 'alias'

    ]

]);

Route::get('articles/cat/{cat_alias?}',['uses'=>'ArticlesController@index','as'=>'articlesCat'])->where('cat_alias','[\w-]+');

Route::resource('comment','CommentController',['only'=>['store']]);

Route::match(['get','post'],'/contacts',['uses'=>'ContactsController@index','as'=>'contacts']);


//php artisan make:auth
//php artisan make:auth


//Route::get('logout','Auth\AuthController@logout');






Route::get('login','Auth\AuthController@showLoginForm')->name("login");
Route::post('login','Auth\AuthController@login')->name("login");
Route::get('logout','Auth\AuthController@logout');


//admin



Route::get('/admin',['uses' => 'Admin\IndexController@index','as' => 'adminIndex']);


//Route::resource('/admin/articles','Admin\ArticlesController');
//Route::get('/admin/articles',    ['uses' => 'Admin\ArticlesController@index','as' => 'admin.articles', function(){}]);
//Route::resource('/admin/articles',    ['uses' => 'Admin\ArticlesController','as' => 'admin.articles', function(){}]);
//Route::get('/admin/articles',    ['uses' => 'Admin\ArticlesController@edit','as' => 'admin.articles', function(){}]);
Route::resource('/admin/articles', 'Admin\ArticlesController',
    ['names' => [
        'index' => 'admin.articles.index',
        'create' => 'admin.articles.create',
        'store' => 'admin.articles.store',
        'show' => 'admin.articles.show',
        'edit' => 'admin.articles.edit',
        'update' => 'admin.articles.update',
        'destroy' => 'admin.articles.destroy',
    ]]);


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
