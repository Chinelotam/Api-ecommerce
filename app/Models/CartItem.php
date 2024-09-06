<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $table = 'cart_items';
    use HasFactory;

    protected $fillable = [
        'name',
        'product_id',
        'quantity',
        
    ];
}
