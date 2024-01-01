<?php

namespace App\Modules\Backend\Models;

use App\Modules\User\Models\User;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model {

    protected $table = 'shops';
    protected $fillable = [
        'id',
        'market_id',
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
        $query = Shop::leftJoin('markets','markets.id','=','shops.market_id');
        return $query->where('shops.is_archive',0)->orderBy('shops.id', 'desc');
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
