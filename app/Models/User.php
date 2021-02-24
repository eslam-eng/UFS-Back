<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laratrust\Traits\LaratrustUserTrait;
use DB;

class User extends Model
{
    use LaratrustUserTrait;
    use HasFactory;

    protected $fillable = [
        'name',	'username','email','password','phone','address','photo','active',
        'notes','company_id','branch_id','department_id','api_token', 'role_id'
    ];
    
    protected $appends = [
        'role', 'permissions', 'photo_url'
    ];

    protected $hidden = [
       // 'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function getPhotoUrlAttribute() {
        return $this->photo? url($this->photo) : null;
    }

    public function getPermissionsAttribute() {
        $ids = DB::table('permission_role')->where('role_id', $this->role_id)->pluck('permission_id')->toArray();

        $permissions = Permission::whereIn('id', $ids)->pluck('id', 'name')->toArray();
        return $permissions;//$this->permissions()->pluck('id', 'name')->toArray();
    }
    
    public function getRoleAttribute() {
        return Role::find($this->role_id);
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
