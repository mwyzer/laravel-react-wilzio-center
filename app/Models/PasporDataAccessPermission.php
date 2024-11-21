<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasporDataAccessPermission extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'partner_type_id',
        'paspor_data_category_id',
        'access_level_id',
    ];

    // Relationship with the PartnerType model
    public function partnerType()
    {
        return $this->belongsTo(PartnerType::class);
    }

    // Relationship with the PasporDataCategory model
    public function pasporDataCategory()
    {
        return $this->belongsTo(PasporDataCategory::class);
    }

    // Relationship with the AccessLevel model
    public function accessLevel()
    {
        return $this->belongsTo(AccessLevel::class);
    }
}
