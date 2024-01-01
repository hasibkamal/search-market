<?php

namespace App\Modules\Backend\Controllers;

use App\DataTables\Backend\MarketDataTable;
use App\Http\Controllers\Controller;
use App\Libraries\Encryption;
use App\Modules\Backend\Models\Market;
use Carbon\Carbon;
use Illuminate\Http\Request;


class MarketController extends Controller
{
    public function index(MarketDataTable $dataTable)
    {
        return $dataTable->render("Backend::markets.index");
    }

    public function create()
    {
        return view("Backend::markets.create");
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'status'        => 'required'
        ]);

        $market = new Market();
        $market->name = $request->input('name');
        $market->location = $request->input('location');
        $market->address = $request->input('address');
        $market->status = $request->input('status');
        if($request->hasFile('image')){
            $market->image     = storeFile('markets',$request->file('image'));
        }
        $market->save();
        return redirect(route('admin.markets.index'))->with('flash_success', 'Market created successfully.');
    }

    public function show($marketId)
    {
        $decodedId = Encryption::decodeId($marketId);
        $data['market'] = Market::find($decodedId);
        return view("Backend::markets.show", $data);
    }

    public function edit($marketId)
    {
        $decodedId = Encryption::decodeId($marketId);
        $data['market'] = Market::find($decodedId);
        return view("Backend::markets.edit", $data);
    }

    public function update(Request $request, $marketId)
    {
        $decodedId = Encryption::decodeId($marketId);
        $this->validate($request, [
            'name'          => 'required',
            'status'        => 'required'
        ]);

        $market                = Market::find($decodedId);
        $market->name          = $request->input('name');
        $market->location       = $request->input('location');
        $market->address       = $request->input('address');
        $market->status        = $request->input('status');
        if($request->hasFile('image')){
            $market->image     = storeFile('markets',$request->file('image'));
        }
        $market->save();

        return redirect(route('admin.markets.index'))->with('flash_success', 'Market updated successfully.');
    }

    public function delete($marketId)
    {
        $decodedId = Encryption::decodeId($marketId);
        $market = Market::find($decodedId);
        $market->is_archive = 1;
        $market->deleted_at = Carbon::now();
        $market->deleted_by = auth()->user()->id ?? null;
        $market->save();
        session()->flash('flash_success', 'Market deleted successfully!');
    }
}
