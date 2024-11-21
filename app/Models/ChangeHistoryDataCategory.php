<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangeHistoryDataCategory extends Model
{
    //
    use HasFactory;

    protected $fillable = ['name'];

    // Relationship with ChangeHistoryDataAccessPermission
    public function changeHistoryDataAccessPermissions()
    {
        return $this->hasMany(ChangeHistoryDataAccessPermission::class);
    }
}
