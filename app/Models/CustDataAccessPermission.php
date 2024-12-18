<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustDataAccessPermission extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'partner_type_id',
        'customer_data_category_id',
        'access_level_id',
    ];

    public function partnerType()
    {
        return $this->belongsTo(PartnerType::class, 'partner_type_id');
    }

    public function customerDataCategory()
    {
        return $this->belongsTo(CustomerDataCategory::class, 'customer_data_category_id');
    }

    public function accessLevel()
    {
        return $this->belongsTo(AccessLevel::class, 'access_level_id');
    }
}
