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

Route::get('/', 'WelcomeController@index');
Route::resource('/', 'WelcomeController');
Route::resource('in_shopping_cart', 'InShoppingCartController');
Route::resource('shopping_cart', 'ShoppingCartController');
Route::get('product/{id}', 'WelcomeController@show')->name('show.pro'); //ruta de la vista de los productos

Route::get('img/sneajers/{filename}', function ($filename) {

    Auth::routes();

#Routs Brand

    Route::prefix('home')->group(function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::resource('brands', 'BrandController');
        Route::resource('sizes', 'SizeController');
        Route::resource('models', 'ShoeModelController');
        Route::resource('products', 'ProductController');

    });

    $path = "../public/img/sneakers/" . $filename;

    if (!\File::exists($path)) {
        abort(404);
    }

    $file = \File::get($path);

    $type = \File::mimeType($path);

    $response = Response::make($file, 200);

    $response->header("Content-Type", $type);

    return $response;
});
