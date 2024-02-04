<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\USer;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'review',
        'product_id',
        'user_id'
    ];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
