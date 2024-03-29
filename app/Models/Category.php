<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'label_1',
        'label_2',
        'label_3',
        'label_4',
        'label_5',
        'label_6',
        'label_7',
        'label_8',
        'label_9',
        'label_10',
        'label_11',
        'label_12',
    ];
}
