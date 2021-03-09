<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceTable extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_from', 'date_to', 'model_id', 'model_type', 'area_from',
        'area_to', 'city_from','city_to', 'country_from',
        'country_to', 'price', 'basic_kg', 'additional_kg_price'
    ];

    public function cityFrom()
    {
        return $this->belongsTo('App\Models\City','city_from');
    }

    public function cityTo()
    {
        return $this->belongsTo('App\Models\City','city_to');
    }

    public function areaFrom()
    {
        return $this->belongsTo('App\Models\Area','area_from');
    }

    public function areaTo()
    {
        return $this->belongsTo('App\Models\Area','area_to');
    }
}
