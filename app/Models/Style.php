<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    use HasFactory;

    // Define the relationship with Product
    public function products()
    {
        return $this->hasMany(Product::class, 'style_id', 'id');
    }
}
