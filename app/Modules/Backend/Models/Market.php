<?php

namespace App\Modules\Backend\Models;

use Illuminate\Database\Eloquent\Model;

class Market extends Model {

    protected $table = 'markets';
    protected $fillable = [
        'id',
        'name',
        'image',
        'address',
        'status',
        'is_archive',
        'created_by',
        'updated_by',
        'deleted_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public static function getData()
    {
        return Market::where('is_archive',0)->orderBy('id', 'desc');
    }

    public static function boot() {
        parent::boot();
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
