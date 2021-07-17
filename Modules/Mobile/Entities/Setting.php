<?php

namespace Modules\Mobile\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory;

    static $MOBILE_PREFIX = "MOBILE_";
    static $ABOUT_KEY = "MOBILE_ABOUT";
    static $CONTACT_PHONE_KEY = "MOBILE_CONTACT_PHONE";
    static $CONTACT_ADDRESS_KEY = "MOBILE_CONTACT_ADDRESS";
    static $CONTACT_EMAIL_KEY = "MOBILE_CONTACT_EMAIL";
    static $CONTACT_WEBSITE_KEY = "MOBILE_CONTACT_WEBSITE";


    protected $table = "settings";
    protected $fillable = [
        'name',    'value',    'company_id'
    ];


}
