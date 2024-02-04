<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Product;

class orderedProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'quantity',
        'product_id',
        'order_id'
    ];

    public function Order()
    {
        return $this->belongsTo(Order::class);
    }

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}
