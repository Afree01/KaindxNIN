<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Master\ProductDetail;
use App\Models\Master\Location;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'product_detail_id',
        'location_id',
        'transaction_type',
        'quantity',
        'transaction_date',
        'remarks',
    ];

    protected $casts = [
        'transaction_date' => 'date',
        'quantity' => 'integer',
    ];

    public function productDetail()
    {
        return $this->belongsTo(\App\Models\Master\ProductDetail::class, 'product_detail_id');
    }

    public function location()
    {
        return $this->belongsTo(\App\Models\Master\Location::class, 'location_id');
    }
}
