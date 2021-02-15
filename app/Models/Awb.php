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
    ];

    public function sheetDetails()
    {
        return $this->hasOne('App\Models\CourierSheetDetail','awb_id');
    }
}
