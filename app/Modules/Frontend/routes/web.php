<?php


Route::group(['module' => 'Frontend', 'middleware' => ['web'], 'namespace' => 'App\Modules\Frontend\Controllers'], function() {

    Route::get('/', 'HomeController@index');

    Route::get('/products', 'ProductController@index')->name('products.index');
    Route::get('/products/{id}', 'ProductController@details')->name('products.details');
    Route::post('/products/cart/add', 'ProductController@addCart')->name('products.add-cart');
    Route::get('/products/cart/remove/{productId}', 'ProductController@removeCart')->name('products.remove-cart');
    Route::get('/products/cart/view', 'ProductController@viewCart')->name('products.view-cart');
    Route::get('/products/cart/checkout', 'ProductController@checkout')->name('products.checkout-cart');

    Route::get('/services', 'ServiceController@index')->name('services.index');
    Route::get('/services/{id}', 'ServiceController@details')->name('services.details');
    Route::post('/services/request', 'ServiceController@request')->name('services.request');

    Route::get('/special-offers', 'SpecialOfferController@index')->name('special-offers.index');

    Route::get('/about-us', 'AboutController@index')->name('about-us.index');



    Route::get('/contact', 'ContactController@index')->name('contact.index');
    Route::post('/contact/store', 'ContactController@store')->name('contact.store');
});
