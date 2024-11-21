<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KtpDataAccessPermission extends Model
{
    //
    use HasFactory;

    protected $fillable = ['partner_type_id', 'ktp_data_category_id', 'access_level_id'];

    // Define the relationship with PartnerType
    public function partnerType()
    {
        return $this->belongsTo(PartnerType::class);
    }

    // Define the relationship with KtpDataCategory
    public function ktpDataCategory()
    {
        return $this->belongsTo(KtpDataCategory::class);
    }

    // Define the relationship with AccessLevel
    public function accessLevel()
    {
        return $this->belongsTo(AccessLevel::class);
    }
}
