<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::post('/registration/store', 'App\Http\Controllers\Api\UserApiController@store');

Route::group(['middleware' => ['api'],'namespace' => 'App\Http\Controllers\Api'], function() {
    Route::post('user/register','UserApiController@register');
    Route::post('user/login','UserApiController@login');
    Route::post('user/forget-password','UserApiController@foregetPassword');

    Route::post('features','FeatureApiController@index');
    Route::post('features/details','FeatureApiController@details');
});


Route::group(['middleware' => ['auth:api'],'namespace' => 'App\Http\Controllers\Api'], function() {
    Route::post('user/details','UserApiController@details');
    Route::post('user/change-password','UserApiController@changePassword');

    Route::post('profile/details','ProfileApiController@details');
    Route::post('profile/update','ProfileApiController@update');
    Route::post('profile/history','ProfileApiController@history');

    Route::post('branches','BranchApiController@index');
    Route::post('branch-services','BranchServiceApiController@index');

    Route::post('services','ServiceApiController@index');
    Route::post('services/details','ServiceApiController@details');

    Route::post('service-requests','ServiceRequestApiController@index');
    Route::post('service-requests/store','ServiceRequestApiController@store');
    Route::post('service-requests/details','ServiceRequestApiController@details');

    Route::post('doctors','DoctorApiController@index');
    Route::post('doctors/details','DoctorApiController@details');

    Route::post('consultation-services','ConsultationServiceApiController@index');
    Route::post('consultation-services/online-services','ConsultationServiceApiController@onlineServices');
    Route::post('consultation-services/branch-services','ConsultationServiceApiController@branchServices');
    Route::post('consultation-services/details','ConsultationServiceApiController@details');

    Route::post('doctor-appointment-requests','DoctorAppointmentRequestApiController@index');
    Route::post('doctor-assigned-appointment-requests','DoctorAppointmentRequestApiController@assignedAppointments');
    Route::post('doctor-appointment-requests/store','DoctorAppointmentRequestApiController@store');
    Route::post('doctor-appointment-requests/details','DoctorAppointmentRequestApiController@details');
    Route::post('doctor-appointment-requests/payment','DoctorAppointmentRequestApiController@payment');

    Route::post('prescriptions','PrescriptionApiController@index');
    Route::post('prescriptions/store','PrescriptionApiController@store');
    Route::post('prescriptions/details','PrescriptionApiController@details');

    Route::post('products','ProductApiController@index');
    Route::post('products/details','ProductApiController@details');

    Route::post('product-categories','ProductCategoryApiController@index');
    Route::post('product-categories/details','ProductCategoryApiController@details');

    Route::post('orders','OrderApiController@index');
    Route::post('orders/store','OrderApiController@store');
    Route::post('orders/details','OrderApiController@details');
    Route::post('orders/payment','OrderApiController@payment');
    Route::post('orders/payment-later','OrderApiController@paymentLater');

    Route::post('promo-codes/apply','PromoCodeApiController@apply');
});

