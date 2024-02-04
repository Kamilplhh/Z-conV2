<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'status',
        'address',
        'street',
        'postal_code',
        'city',
        'price',
        'invoice',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
