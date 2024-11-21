<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerDataAccessPermission extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['partner_type_id', 'customer_data_category_id', 'access_level_id'];

    public function partnerType()
    {
        return $this->belongsTo(PartnerType::class);
    }

    public function customerDataCategory()
    {
        return $this->belongsTo(CustomerDataCategory::class);
    }

    public function accessLevel()
    {
        return $this->belongsTo(AccessLevel::class);
    }
}
