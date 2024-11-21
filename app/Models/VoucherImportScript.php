<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherImportScript extends Model
{
    use HasFactory;

    protected $table = 'voucher_import_scripts'; // Define the table name (if different from the default)

    protected $fillable = [
        'script',
        'profileName',
        'comment',
        'limitBytesTotal',
        'createdAt',
    ];

    // Optionally, define relationships if needed
}
