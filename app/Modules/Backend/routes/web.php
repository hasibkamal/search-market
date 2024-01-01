<?php

Route::group(['prefix' => 'admin','module' => 'Backend', 'middleware' => ['web','auth','admin'], 'namespace' => 'App\Modules\Backend\Controllers'], function() {

    Route::get('dashboard','DashboardController@index')->name('admin.dashboard.index');

    Route::get('contact-us/{id}/delete','ContactUsController@delete');
    Route::resource('contact-us', 'ContactUsController', ['names' => [
        'index' => 'admin.contact-us.index',
    ]]);

    Route::get('markets/{id}/delete','MarketController@delete');
    Route::resource('markets', 'MarketController', ['names' => [
        'index' => 'admin.markets.index',
        'create' => 'admin.markets.create',
        'store' => 'admin.markets.store',
        'edit' => 'admin.markets.edit',
        'update' => 'admin.markets.update'
    ]]);

    Route::get('shops/{id}/delete','ShopController@delete');
    Route::resource('shops', 'ShopController', ['names' => [
        'index' => 'admin.shops.index',
        'create' => 'admin.shops.create',
        'store' => 'admin.shops.store',
        'edit' => 'admin.shops.edit',
        'update' => 'admin.shops.update'
    ]]);
});


