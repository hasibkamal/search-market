<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class User extends Model {

    use HasApiTokens;
    protected $table = 'users';
    protected $fillable = [
        'id',
        'user_type',
        'name',
        'email',
        'mobile',
        'gender',
        'date_of_birth',
        'photo',
        'signature',
        'nid',
        'passport',
        'nationality',
        'country',
        'division_id',
        'district_id',
        'post_code',
        'address',
        'present_address',
        'permanent_address',
        'company_name',
        'designation',
        'password',
        'activation_status',
        'verification_status',
        'approve_status',
        'user_hash',
        'login_token',
        'email_verified_at',
        'status',
        'is_archive',
        'created_by',
        'updated_by',
        'deleted_by',
        'created_at',
        'updated_at',
        'deleted_at',
        'remember_token'
    ];

    public static function getUserList()
    {
        $query = User::leftJoin('user_types','user_types.id','=','users.user_type')
            ->where('users.status', 1);
        return $query->orderBy('users.id', 'desc');
    }
    public static function getDoctors()
    {
        $query = User::leftJoin('user_types','user_types.id','=','users.user_type')
            ->leftJoin('doctor_consultation_services','doctor_consultation_services.doctor_id','=','users.id')
            ->leftJoin('consultation_services','consultation_services.id','=','doctor_consultation_services.consultation_service_id')
            ->where('users.status', 1)->where('users.is_archive',0)
            ->where('users.user_type',config('misc.user_type.doctor'))
            ->groupBy('users.id');
        return $query->orderBy('users.id', 'desc');
    }

    public static function boot() {
        parent::boot();
        if(auth()->user()){
           static::creating(function($user) {
               if(auth()->user()){
                   $user->created_by = auth()->user()->id ?? null;
                   $user->updated_by = auth()->user()->id ?? null;
               }
           });

           static::updating(function($user) {
               if(auth()->user())
                   $user->updated_by = auth()->user()->id ?? null;
           });
       }
    }
}
