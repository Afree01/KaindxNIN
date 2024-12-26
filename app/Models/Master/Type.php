<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Master\Category;

class Type extends Model
{
    use HasFactory;

    protected $table = 'types';

    protected $fillable = [
        'category_id',
        'type_name',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
