<?php

namespace App\Modules\Backend\Controllers;

use App\DataTables\Backend\ShopDataTable;
use App\Http\Controllers\Controller;
use App\Libraries\Encryption;
use App\Modules\Backend\Models\Market;
use App\Modules\Backend\Models\Shop;
use Carbon\Carbon;
use Illuminate\Http\Request;


class ShopController extends Controller
{
    public function index(ShopDataTable $dataTable)
    {
        return $dataTable->render("Backend::shops.index");
    }

    public function create()
    {
        $data['markets'] = Market::where('is_archive',0)->where('status',1)->pluck('name','id');
        return view("Backend::shops.create",$data);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name'                  => 'required',
            'market_id'             => 'required'
        ]);

        $shop = new Shop();
        $shop->name = $request->input('name');
        $shop->market_id = $request->input('market_id');
        $shop->phone  = $request->input('phone');
        $shop->proprietor  = $request->input('proprietor');
        $shop->address  = $request->input('address');
        $shop->status = true;
        if($request->hasFile('image')){
            $shop->image     = storeFile('shops',$request->file('image'));
        }
        $shop->save();
        return redirect(route('admin.shops.index'))->with('flash_success', 'Shop created successfully.');
    }

    public function show($shopId)
    {
        $decodedId = Encryption::decodeId($shopId);
        $data['shop'] = Shop::find($decodedId);
        return view("Backend::shops.show", $data);
    }

    public function edit($shopId)
    {
        $decodedId = Encryption::decodeId($shopId);
        $data['shop'] = Shop::find($decodedId);
        $data['markets'] = Market::where('is_archive',0)->where('status',1)->pluck('name','id');
        return view("Backend::shops.edit", $data);
    }

    public function update(Request $request, $shopId)
    {
        $decodedId = Encryption::decodeId($shopId);
        $this->validate($request, [
            'name'                  => 'required',
            'market_id'             => 'required',
            'status'                => 'required'
        ]);

        $shop = Shop::find($decodedId);
        $shop->name = $request->input('name');
        $shop->market_id = $request->input('market_id');
        $shop->phone  = $request->input('phone');
        $shop->proprietor  = $request->input('proprietor');
        $shop->address  = $request->input('address');
        $shop->status  = $request->input('status');
        $shop->save();

        return redirect(route('admin.shops.index'))->with('flash_success', 'Shop updated successfully.');
    }

    public function delete($shopId)
    {
        $decodedId = Encryption::decodeId($shopId);
        $shop = Shop::find($decodedId);
        $shop->is_archive = 1;
        $shop->deleted_at = Carbon::now();
        $shop->deleted_by = auth()->user()->id ?? null;
        $shop->save();
        session()->flash('flash_success', 'Shop deleted successfully!');
    }
}
