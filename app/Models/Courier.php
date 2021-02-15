<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','photo','phone',	'email','address','notes','active','company_id',
        'branch_id','department_id'
    ];


    public function company()
    {
        return $this->belongsTo('App\Models\Company','company_id');
    }

    public function branch()
    {
        return $this->belongsTo('App\Models\Branch','branch_id');
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Department','department_id');
    }

    public function sheets()
    {
        return $this->hasMany('App\Models\CourierSheet','courier_id');
    }

    public function pickupInfo()
    {
        return $this->hasMany('App\Models\Pickup','courier_id');
    }
}
