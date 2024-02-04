<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Spec;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'producer',
        'price',
        'promo',
        'stock',
        'spec_id'
    ];

    public function Spec()
    {
        return $this->belongsTo(Spec::class);
    }
}
