<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomphoto extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }
}
