<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Awb extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'code', 'company_id', 'department_id',
        'branch_id', 'receiver_id', 'payment_type_id', 'service_id', 'status_id', 'user_id', 'city_id',
        'area_id','receiver_name','receiver_title', 'date', 'weight', 'pieces', 'category_id', 'notes', 'is_return', 'collection', //now its temporary after it will calc automaticlly depends on city an area price
        'zprice', 'shiping_price', 'additional_kg_price', 'additional_price', 'net_price'
    ];

    public function details()
    {
        return $this->hasMany('App\Models\AwbDetail','awb_id');
    }

    public function courierSheet()
    {
        return $this->hasOne('App\Models\CourierSheetDetail','awb_id');
    }


    public function company()
    {
        return $this->belongsTo('App\Models\Company','company_id')->with(['city', 'area']);
    }

    public function branch()
    {
        return $this->belongsTo('App\Models\Branch','branch_id');
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Department','department_id')->select('id', 'name');
    }

    public function receiver()
    {
        return $this->belongsTo('App\Models\Receiver','receiver_id')->with(['city', 'area']);
    }

    public function paymentType()
    {
        return $this->belongsTo('App\Models\PaymentType','payment_type_id')->select('id', 'name');
    }

    public function service()
    {
        return $this->belongsTo('App\Models\Service','service_id')->select('id', 'name');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status','status_id');
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
        return $this->hasMany('App\Models\AwbHistory','awb_id')->with(['status', 'user']);
    }

    public function awbCategory()
    {
        return $this->belongsTo('App\Models\AwbCategory','category_id');
    }
}
