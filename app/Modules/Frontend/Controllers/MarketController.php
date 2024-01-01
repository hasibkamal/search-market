<?php

namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;

class MarketController extends Controller
{
    public function index()
    {
        $data['specialOffers'] = SpecialOffer::where('is_archive',0)
            ->orderBy('id','ASC')
            ->paginate(9);
        return view("Frontend::special-offers",$data);
    }


}
