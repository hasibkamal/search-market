<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'ssl-wireless/payment/success',
        'ssl-wireless/payment/fail',
        'ssl-wireless/payment/cancel',
        'ssl-wireless/payment/ipn',
    ];
}
