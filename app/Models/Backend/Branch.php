<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'name',
    //     'address',
    //     'phone',
    //     'email',
    //     'about_text',
    //     'about_photo_1',
    //     'about_photo_2',
    //     'about_photo_3',
    //     'map',
    //     'video',
    //     'about_banner',
    //     'contact_banner',
    // ];
}
