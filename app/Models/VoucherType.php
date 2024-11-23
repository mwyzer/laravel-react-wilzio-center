<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VoucherType extends Model
{
    //
    use HasFactory;

    protected $fillable = ['name'];

    public function voucherProfiles()
    {
        return $this->hasMany(VoucherProfile::class, 'voucherTypeId');
    }
}
