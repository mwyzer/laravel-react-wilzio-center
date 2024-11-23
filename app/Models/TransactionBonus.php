<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionBonus extends Model
{
    use HasFactory;

    protected $fillable = [
        'levelId',
        'bonusEnabled',
        'bonusPoints',
        'nominalTransaction',
        'berlakuTiap',
    ];

    public function membershipLevel()
    {
        return $this->belongsTo(MembershipLevel::class, 'levelId');
    }
}
