<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable = ['name','description', 'steper', 'is_final'];

    public function pickupInfo()
    {
        return $this->hasMany('App\Models\Pickup','status_id');
    }

    public function awb()
    {
        return $this->hasMany('App\Models\Awb','status_id');
    }

    public function awbHistory()
    {
        return $this->hasMany('App\Models\AwbHistory','status_id');
    }
}

