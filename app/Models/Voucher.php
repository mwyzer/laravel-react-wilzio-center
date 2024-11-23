<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'voucherProfileId',
        'code',
        'comment',
        'importDate',
        'status',
        'saleDate',
        'buyerName',
    ];

    public function voucherProfile()
    {
        return $this->belongsTo(VoucherProfile::class, 'voucherProfileId');
    }
}
