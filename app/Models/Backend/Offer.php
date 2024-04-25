<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }
}
