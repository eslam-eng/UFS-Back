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

    public function sheetDetails()
    {
        return $this->hasOne('App\Models\CourierSheetDetail','awb_id');
    }


    public function company()
    {
        return $this->belongsTo('App\Models\Company','company_id');
    }

    public function branch()
    {
        return $this->belongsTo('App\Models\Branch','branch_id');
    }

    public function receiver()
    {
        return $this->belongsTo('App\Models\Receiver','receiver_id');
    }

    public function payment()
    {
        return $this->belongsTo('App\Models\PaymentType','Payment_type_id');
    }

    public function service()
    {
        return $this->belongsTo('App\Models\Service','service_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status','status_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City','city_id');
    }

    public function area()
    {
        return $this->belongsTo('App\Models\Area','area_id');
    }

    public function awbHistory()
    {
        return $this->hasMany('App\Models\AwbHistory','awb_id');
    }
}
