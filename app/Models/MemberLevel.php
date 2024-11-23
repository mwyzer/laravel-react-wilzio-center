<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MemberLevel extends Model
{
    //
    use HasFactory;

    protected $fillable = ['name'];

    public function voucherMemberPrices()
    {
        return $this->hasMany(VoucherMemberPrice::class, 'memberLevelId');
    }
}
