<?php

namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Backend\Models\Market;

class HomeController extends Controller
{
    /**
     * @throws \Exception
     */
    public function index()
    {
        $data['markets'] = Market::where('is_archive',0)
            ->orderBy('id','ASC')
            ->limit(6)
            ->get();
        return view("Frontend::index",$data);
    }
}
