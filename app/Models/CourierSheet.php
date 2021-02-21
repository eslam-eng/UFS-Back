<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourierSheet extends Model
{
    use HasFactory;

    protected $fillable = ['courier_id','user_id','date'];
    
    protected $appends = [
        'awb_number'
    ];

    public function courier()
    {
        return $this->belongsTo('App\Models\Courier','courier_id');
    }
    public  function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function sheetDetails()
    {
        return $this->hasMany('App\Models\CourierSheetDetail','sheet_id');
    }
}
