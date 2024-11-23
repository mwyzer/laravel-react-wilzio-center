<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationIsp extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'locationId',
        'ispId',
        'ispType',
        'contactNumber',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class, 'locationId');
    }

    public function isp()
    {
        return $this->belongsTo(Isp::class, 'ispId');
    }
}
