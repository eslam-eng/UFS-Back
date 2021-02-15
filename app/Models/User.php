<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',	'username','email','password','phone','address','photo','active',
        'notes','company_id','branch_id','department_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
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
        return $this->hasMany('App\Models\CourierSheet','user_id');
    }

    public function loginHistory()
    {
        return $this->hasMany('App\Models\LoginHistory','user_id');
    }

    public function notifications()
    {
        return $this->hasMany('App\Models\Notification','user_id');
    }

    public function pickupInfo()
    {
        return $this->hasMany('App\Models\Pickup','user_id');
    }

}
