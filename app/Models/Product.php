<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Casts\PriceCast;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price'];    

    protected $casts = [
        'price' => PriceCast::class,
    ];
}
