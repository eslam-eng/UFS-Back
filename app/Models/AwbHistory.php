<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwbHistory extends Model
{
    use HasFactory;
    protected $fillable = ['awb_id','user_id','status_id'];
}
