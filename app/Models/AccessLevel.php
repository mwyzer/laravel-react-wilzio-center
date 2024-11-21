<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessLevel extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function changeHistoryDataAccessPermissions()
    {
        return $this->hasMany(ChangeHistoryDataAccessPermission::class);
    }

    public function customerDataAccessPermissions()
    {
        return $this->hasMany(CustomerDataAccessPermission::class);
    }

    public function ktpDataAccessPermissions()
    {
        return $this->hasMany(KtpDataAccessPermission::class);
    }

    public function pasporDataAccessPermissions()
    {
        return $this->hasMany(PasporDataAccessPermission::class);
    }

    public function dataAccessPermissions()
    {
        return $this->hasMany(DataAccessPermission::class);
    }
}