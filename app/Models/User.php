<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Model
{
    use LaratrustUserTrait;
    use HasFactory;

    protected $fillable = [
        'name',	'username','email','password','phone','address','photo','active',
        'notes','company_id','branch_id','department_id','api_token'
    ];
    
    protected $appends = [
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRoleAttribute() {
        $role = UserRole::where('user_id', $this->id)->first(); 
        return Role::find(optional($role)->role_id);
    }
    
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

    public function awb()
    {
        return $this->hasMany('App\Models\Awb','user_id');
    }

    public function awbHistory()
    {
        return $this->hasMany('App\Models\AwbHistory','user_id');
    }
     
}
