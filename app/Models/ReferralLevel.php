<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReferralLevel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'levelName',
        'membershipId',
    ];

    public function membership()
    {
        return $this->belongsTo(Membership::class, 'membershipId');
    }
}
