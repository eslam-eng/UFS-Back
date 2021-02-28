<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','logo','ceo','address','phone','fax','email'	,'active','notes',
        'commercial_number','commercial_photo','type','city_id','area_id', 'show_dashboard'
    ];

    public function city()
    {
        return $this->belongsTo('App\Models\City','city_id');
    }

    public function area()
    {
        return $this->belongsTo('App\Models\Area','area_id');
    }

    public function branches()
    {
        return $this->hasMany('App\Models\Branch','company_id');
    }

    public function Couriers()
    {
        return $this->hasMany('App\Models\Courier','company_id');
    }

    public function pickupInfo()
    {
        return $this->hasMany('App\Models\Pickup','company_id');
    }

    public function recivers()
    {
        return $this->hasMany('App\Models\Receiver','company_id');
    }

    public function setting()
    {
        return $this->hasMany('App\Models\Setting','company_id');
    }

    public function users()
    {
        return $this->hasMany('App\Models\User','company_id');
    }

    public function awb()
    {
        return $this->hasMany('App\Models\Awb','company_id');
    }
}
