<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Platform;

class PlatformSeeder extends Seeder
{
    public function run()
    {
        Platform::create([
            'name' => 'TikTok',
            'fee_percentage' => 10.00,
        ]);

        Platform::create([
            'name' => 'Shopee',
            'fee_percentage' => 15.00,
        ]);

        Platform::create([
            'name' => 'Walk-in',
            'fee_percentage' => 0.00,
        ]);
    }
}