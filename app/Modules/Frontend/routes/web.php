<?php


Route::group(['module' => 'Frontend', 'middleware' => ['web'], 'namespace' => 'App\Modules\Frontend\Controllers'], function() {
    Route::get('/', 'HomeController@index');
    Route::get('/market/{id}', 'HomeController@marketShops')->name('market.shops');
    Route::get('/markets', 'HomeController@markets')->name('markets');
    Route::get('/shops', 'HomeController@shops')->name('shops');
});
