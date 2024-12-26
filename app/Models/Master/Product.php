<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Master\Type;
use App\Models\Master\ProductDetail;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'product_code',
        'product_name',
        'type_id',
        'price',
        'product_image',
        'description',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class, 'product_id');
    }
}
