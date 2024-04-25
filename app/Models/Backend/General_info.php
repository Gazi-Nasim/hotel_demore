<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General_info extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'name',
    //     'logo',
    //     'about_short',
    //     'about_full',
    //     'reservation',
    //     'whatsapp',
    //     'fb',
    //     'youtube',
    //     'instagram',
    //     'twitter',
    //     'pinterest',
    // ];
}
