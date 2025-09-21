<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Casts\PriceCast;
use App\Enums\ProductStatusEnum;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'status'];    

    protected $casts = [
        'price' => PriceCast::class,
        'status' => ProductStatusEnum::class,
    ];
}
