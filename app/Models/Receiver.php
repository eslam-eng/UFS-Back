<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    use HasFactory;
    protected $fillable = ['name','address','phone','company_id','city_id','area_id'];

    public function company()
    {
        return $this->belongsTo('App\Models\Company','company_id');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City','city_id');
    }

    public function area()
    {
        return $this->belongsTo('App\Models\Area','area_id');
    }
}
