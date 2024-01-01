<?php

namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Backend\Models\AboutUs;
use App\Modules\Backend\Models\Appearance;
use App\Modules\Backend\Models\Team;

class AboutController extends Controller
{
    public function index()
    {
        $data= [];
        return view("Frontend::about-us",$data);
    }
}
