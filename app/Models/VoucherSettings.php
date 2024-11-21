<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherSetting extends Model
{
    use HasFactory;

    protected $table = 'voucher_settings'; // Define the table name (if different from the default)

    protected $fillable = [
        'voucher_profile_id',
        'issueVoucher',
        'displayStock',
        'maxPurchasePerTx',
        'linkToGenerateVoucher',
    ];

    // Optionally, define relationships if needed
    public function voucherProfile()
    {
        return $this->belongsTo(VoucherProfile::class, 'voucher_profile_id');
    }
}
