<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipLevel extends Model
{
    //
    use HasFactory;

    protected $fillable = ['levelName', 'description', 'minSpending'];

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
