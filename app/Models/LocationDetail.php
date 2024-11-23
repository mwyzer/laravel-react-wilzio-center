<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'locationId',
        'initialInstallationDate',
        'googleMapUrl',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class, 'locationId');
    }
}
