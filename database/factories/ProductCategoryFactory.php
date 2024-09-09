<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductCategoryFactory extends Factory
{
    protected $model = ProductCategory::class;

    public function definition()
    {
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
        ];

        // Pick a random category
        $category_name = $this->faker->unique()->randomElement($categories);

        return [
            'category_name' => $category_name,
            'slug' => Str::slug($category_name),
        ];
    }
}
