<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'quantity',
        'total_price',
        'gst',
        'total_with_gst',
        'payment_method'

    ];
}
