<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ComplaintHistory;

class ComplaintHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ComplaintHistory::create([
            'location_id' => 1,
            'user_id' => 1,
        ]);
    }
}
