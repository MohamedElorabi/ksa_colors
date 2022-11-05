<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenralSetting extends Model
{
    use HasFactory;


    protected $fillable = [
        'name_site',
        'address',
        'phone_1',
        'phone_2',
        'phone_3',
        'phone_4',
        'whats_num',
        'logo',
        'face_url',
        'twitter_url',
        'snap_url',
        'logo_bottom'
    ];
}
