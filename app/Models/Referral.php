<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Referral extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'customerId',
        'referredCustomerId',
        'referralDate',
        'status',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customerId');
    }

    public function referredCustomer()
    {
        return $this->belongsTo(Customer::class, 'referredCustomerId');
    }
}
