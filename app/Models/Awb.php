<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Awb extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'company_id',
        'department_id',
        'branch_id',
        'receiver_id',
        'Payment_type_id',
        'service_id',
        'status_id',
        'user_id',
        'city_id',
        'area_id',
        'date',
        'weight',
        'pieces',
        'collection' //now its temporary after it will calc automaticlly depends on city an area price
    ];

    public function details()
    {
        return $this->hasOne('App\Models\CourierSheetDetail','awb_id');
    }


    public function company()
    {
        return $this->belongsTo('App\Models\Company','company_id')->select('id', 'name', 'logo');
    }

    public function branch()
    {
        return $this->belongsTo('App\Models\Branch','branch_id')->select('id', 'name');
    }

    public function receiver()
    {
        return $this->belongsTo('App\Models\Receiver','receiver_id')->select('id', 'name');
    }

    public function payment()
    {
        return $this->belongsTo('App\Models\PaymentType','Payment_type_id')->select('id', 'name');
    }

    public function service()
    {
        return $this->belongsTo('App\Models\Service','service_id')->select('id', 'name');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status','status_id')->select('id', 'name');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id')->select('id', 'name');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City','city_id')->select('id', 'name');
    }

    public function area()
    {
        return $this->belongsTo('App\Models\Area','area_id')->select('id', 'name');
    }

    public function awbHistory()
    {
        return $this->hasMany('App\Models\AwbHistory','awb_id')->select('id', 'name');
    }
}
