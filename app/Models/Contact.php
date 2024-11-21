<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    use HasFactory;
    
    protected $fillable = [
        'method',
        'name',
        'link',
        'phoneNumber',
    ];

    // If you need any relationships, define them here.
}

