<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KtpDataCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Define the relationship with KtpDataAccessPermission
    public function ktpDataAccessPermissions()
    {
        return $this->hasMany(KtpDataAccessPermission::class);
    }
}
