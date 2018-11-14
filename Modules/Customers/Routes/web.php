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

Route::group([
    'middleware' => ['web', 'auth'], 
    'prefix' => 'customers'], 
    function() 
    {
        Route::get('/', 'CustomersController@index')->name('customers');
        Route::get('/create', 'CustomersController@create')->name('createCustomer');
        Route::get('/create/save', 'CustomersController@update')->name('customerSave');
    }
);
/* old
Route::prefix('customers')->group(function() {
    Route::get('/', 'CustomersController@index')->name('customers');
});
 */

/*
Route::prefix('blog')->group(function() {
    Route::get('/', 'BlogController@index')->name('blog');
    Route::get('/page', 'BlogController@page');
    // Route::get('/article', 'BlogController@article');
    Route::get('/{post}', 'BlogController@show')->name('postShow');

    Route::group([
        'middleware' => ['web', 'auth'], 
        'prefix' => 'admin', 
        'namespace' => 'Admin'],
        function()
        {
            Route::get('/', 'PostsController@admin')->name('blogAdmin');
            Route::get('/post', 'PostsController@index')->name('allPosts');
            Route::get('/create', 'PostsController@create')->name('postCreate');
            Route::post('/', 'PostsController@store')->name('postStore');
            Route::get('posts/{post}', 'PostsController@edit')->name('postEdit');
            Route::put('posts/{post}', 'PostsController@update')->name('postUpdate');
            Route::post('posts/{post}/photos', 'PhotosController@store')->name('photosUpdate');
            // rotas do blog
        }
    );
});
*/