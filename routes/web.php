<?php

use App\Http\Controllers\SSL_PaymentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Rap2hpoutre\LaravelLogViewer\LogViewerController;

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
Auth::routes();
Route::get('/login', function () {
    if(auth()->user()){
        return redirect('/admin/dashboard');
    }

    return view('auth.login');
});

Route::get('payments/history',[SSL_PaymentController::class, 'index']);
Route::group(['prefix' => 'ssl-wireless'], function () {
    Route::post('payment/success/{refId?}', [SSL_PaymentController::class, 'sslResponseSuccess']);
    Route::post('payment/fail/{refId?}', [SSL_PaymentController::class, 'sslResponseFail']);
    Route::post('payment/cancel/{refId?}', [SSL_PaymentController::class, 'sslResponseCancel']);
    Route::post('payment/ipn/{refId?}', [SSL_PaymentController::class, 'sslResponseIpn']);
});

Route::get('logs', [LogViewerController::class, 'index']);
