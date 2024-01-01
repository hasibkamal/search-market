<?php

return [

    /*
     * 'sslwireless'   =>   'payment-gateway/sslwireless',
    'cash'   =>   'cash/cash',
    */

    'gateway-url' => [
        'ssl-wireless'   =>   [
            'view'                  =>'payment-gateway/sslwireless',
            'base_url'              =>env('SSL_GATEWAY_URL','https://securepay.sslcommerz.com/gwprocess/v4/api.php'),
            'order_validate_url'    =>env('SSL_ORDER_VALIDATE_URL','https://securepay.sslcommerz.com/validator/api/validationserverAPI.php'),
            'success_url'           =>env('SSL_COMMERZ_SUCCESS_URL','ssl-wireless/payment/success'),
            'fail_url'              =>env('SSL_COMMERZ_FAIL_URL','ssl-wireless/payment/fail'),
            'cancel_url'            =>env('SSL_COMMERZ_CANCEL_URL','ssl-wireless/payment/cancel'),
            'ipn_url'               =>env('SSL_COMMERZ_IPN_URL','ssl-wireless/payment/ipn'),
        ],
    ],
    'gateway-cred'  =>  [
        'ssl-wireless' => [
            'store_id'              =>  env('SSL_STORE_ID','exsaacscorglive'), //TODO::Ssl-wireless provided STORE_ID
            'store_pass'            =>  env('SSL_STORE_PASSWORD','62569E7E1133F59286'), //TODO::Ssl-wireless provided STORE_PASSWORD
        ],
    ],

    'redirect_url' => env('PAYMENT_REDIRECT_URL','/payments/history')

];
