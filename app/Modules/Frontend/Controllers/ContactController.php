<?php

namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Backend\Models\Appearance;
use App\Modules\Backend\Models\ContactUs;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data['appearance'] = Appearance::find(1);
        return view("Frontend::contact-us",$data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'email'         => 'required',
            'message'       => 'required',
        ]);

        $contactUs = ContactUs::whereDate('created_at',Carbon::today()->toDateString())->firstOrNew(['email'=>$request->input('email')]);
        $contactUs->name = $request->input('name');
        $contactUs->email = $request->input('email');
        $contactUs->message = $request->input('message');
        $contactUs->status = 1;
        $contactUs->save();
        return redirect(route('contact.index'))->with('flash_success', 'Contact request received.');
    }
}
