<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Spec extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
