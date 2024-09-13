<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            'Makita',
            'Bosch',
            'DeWalt',
            'Milwaukee',
            'Black & Decker',
            'Stanley',
            'Hitachi',
            'Craftsman',
            'Hilti',
            'Ryobi',
            'Festool',
            'Metabo',
            'Ridgid',
            'Skil',
        ];

        foreach ($brands as $brand) {
            DB::table('brands')->insert([
                'brand_name' => $brand,
                'slug' => Str::slug($brand),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
