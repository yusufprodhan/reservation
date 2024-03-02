<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
            'service_name',
        'comments',
        'qty',
        'price',
        'single_discount',
        'row_sub_total',
        'sub_total',
        'discount',
        'grand_total'
    ];
}
