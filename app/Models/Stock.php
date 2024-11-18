<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = ['stockName', 'location_id'];

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }
}
