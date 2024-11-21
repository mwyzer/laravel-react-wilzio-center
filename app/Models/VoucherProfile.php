<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherProfile extends Model
{
    use HasFactory;

    protected $table = 'voucher_profiles'; // Define the table name (if different from the default)

    protected $fillable = [
        'voucher_type_id',
        'name',
        'duration',
        'status',
        'import',
        'stock',
        'sold_today',
        'sold_this_month',
        'sold_total',
        'remaining_time',
        'warning_stock_low',
        'warning_stock_critical',
    ];

    // Optionally, define relationships if needed
    public function voucherType()
    {
        return $this->belongsTo(VoucherType::class, 'voucher_type_id');
    }
}
