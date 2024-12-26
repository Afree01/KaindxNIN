<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Master\ProductDetail;

class Color extends Model
{
    use HasFactory;

    protected $table = 'colors';

    protected $fillable = [
        'color_code',
        'color_name',
        'hex_code',
    ];

    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class, 'color_id');
    }
}
