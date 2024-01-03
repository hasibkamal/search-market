<?php

namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Backend\Models\Market;
use App\Modules\Backend\Models\Shop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @throws \Exception
     */
    public function index(Request $request)
    {


        $query = Market::where('is_archive',0);
        if($request->has('search')){
            $searchKeywords = $request->input('search');
            $data['searchKeywords'] = $searchKeywords;
            $query->where('name','like','%'.$searchKeywords.'%');
        }
        $data['markets'] = $query->orderBy('id','ASC')
            ->limit(20)
            ->get();
        return view("Frontend::index",$data);
    }

    public function marketShops($marketId)
    {
        $data['market'] = Market::find($marketId);
        $data['shops'] = Shop::where('market_id',$marketId)
            ->where('is_archive',0)
            ->orderBy('id','ASC')
            ->limit(6)
            ->get();
        return view("Frontend::shop",$data);
    }

    public function shops()
    {
        return view('Frontend::shop-find');
    }
}
