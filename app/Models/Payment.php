<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'amount',
        'invoiceId',
        'customerId',
    ];

    // Relationship with the Invoice model
    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'invoiceId');
    }

    // Relationship with the Customer model
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customerId');
    }
}
