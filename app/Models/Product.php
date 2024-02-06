<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Spec;
use App\Models\Brand;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'price',
        'promo',
        'stock',
        'spec_id',
        'brand_id'
    ];

    public function spec()
    {
        return $this->belongsTo(Spec::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
