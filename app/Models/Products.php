<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_code',
        'product_name',
        'category_id',
        'product_brand',
        'description',
        'price',
        'stocks',
        'is_displayed',
        'is_available',
        'img_path',
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
