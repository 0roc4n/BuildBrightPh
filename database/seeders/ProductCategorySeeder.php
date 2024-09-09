<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the categories to seed
        $categories = [
            'Concreting & Masonry',
            'Rebars & G.I Wires',
            'Steel',
            'Roofing & Insulation',
            'Waterproofing',
            'Sealant & Adhesives',
            'Glass Doors & Windows',
            'Wood Products',
            'Drywall & Ceiling',
            'Plumbing Pipes & Accessories',
            'Electrical Pipes & Accessories',
            'Wire & Cables',
            'Tiling Supplies',
            'Painting Supplies',
            'Doors & Jambs',
            'Door & Cabinet Hardwares',
            'Electrical Fixtures & Devices',
            'Plumbing Fixtures & accs',
            'Finishing Materials',
            'Tools & Equipments',
            'Nail, Tox & Screws'
        ];

        // Loop through the categories and create them
        foreach ($categories as $category) {
            ProductCategory::create([
                'category_name' => $category,
                'slug' => \Illuminate\Support\Str::slug($category)
            ]);
        }
    }
}
