<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isp extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function locationIsps()
    {
        return $this->hasMany(LocationIsp::class, 'ispId');
    }
}
