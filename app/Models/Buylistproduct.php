<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buylist;
use App\Models\Product;

class Buylistproduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'buylist_id',
        'product_id',
        'quantity'
    ];

    public function buylist()
    {
        return $this->belongsTo(Buylist::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
