<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    use HasFactory;
    protected $fillable = ['code','date','company_id','status_id','user_id','time_from','time_to', 'courier_id'];

    public function company()
    {
        return $this->belongsTo('App\Models\Company','company_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status','status_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function courier()
    {
        return $this->belongsTo('App\Models\Courier','courier_id');
    }
}
