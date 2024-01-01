<?php

namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Modules\Backend\Models\BranchService;
use App\Modules\Backend\Models\Service;
use App\Modules\Backend\Models\ServiceRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ServiceController extends Controller
{
    public function index()
    {
        $data['services'] = Service::where('status',1)->orderBy('ordering','asc')->paginate(9);
        return view("Frontend::services.index",$data);
    }



    public function details($serviceId){
        $data['service'] = Service::find($serviceId);
        $data['branches'] = BranchService::join('branches','branches.id','=','branch_services.branch_id')
            ->where('branch_services.service_id',$serviceId)
            ->where('branch_services.is_archive',0)
            ->where('branch_services.status',1)
            ->pluck('branches.name','branches.id');
        return view("Frontend::services.details",$data);
    }

    public function request(Request $request)
    {
        $user = User::where('email',$request->input('email'))->first();
        if(!$user){
            $mobile = trim('+88'.substr($request->input('mobile'),-11,11));
            $user = User::where('mobile',$mobile)->first();
        }

        if(!$user){
            $user = new User();
            $user->user_type = config('misc.user_type.user');
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->mobile = $request->input('mobile');
            $user->password = Hash::make($request->input('email'));
            $user->status = 1;
            $user->save();
        }

        $serviceRequest = new ServiceRequest();
        $serviceRequest->service_id = $request->input('service_id');
        $serviceRequest->branch_id = $request->input('branch_id');
        $serviceRequest->user_id = $user->id;
        $serviceRequest->platform = config('misc.platform.web');
        $serviceRequest->requested_date_time = Carbon::now();
        $serviceRequest->request_status = config('misc.service_request_status.Submitted');
        $serviceRequest->status = 1;
        $serviceRequest->created_by = $user->id;
        $serviceRequest->updated_by = $user->id;
        $serviceRequest->save();

        return redirect(route('services.details',$request->input('service_id')))->with('flash_success', 'We have received your service request. Please wait for our call, we will contact you very soon.');
    }
}
