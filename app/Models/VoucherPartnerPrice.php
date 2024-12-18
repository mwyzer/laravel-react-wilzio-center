<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherPartnerPrice extends Model
{
    use HasFactory;

    protected $table = 'voucher_partner_prices'; // Define the table name (if different from the default)

    protected $fillable = [
        'voucher_profile_id',
        'partner_type_id',
        'price_points',
    ];

    // Optionally, define relationships if needed
    public function voucherProfile()
    {
        return $this->belongsTo(VoucherProfile::class, 'voucher_profile_id');
    }

    public function partnerType()
    {
        return $this->belongsTo(PartnerType::class, 'partner_type_id');
    }
}

