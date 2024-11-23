<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherMemberPrice extends Model
{
    use HasFactory;

    protected $fillable = ['voucherProfileId', 'memberLevelId', 'pricePoints'];

    public function memberLevel()
    {
        return $this->belongsTo(MemberLevel::class, 'memberLevelId');
    }

    public function voucherProfile()
    {
        return $this->belongsTo(VoucherProfile::class, 'voucherProfileId');
    }
}
