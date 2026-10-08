<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='kookuproducts';

protected $fillable = [
    'image',
    'name',
    'quantity',
    'price',
    'cost',
    'tiktok_price',
    'shopee_price',
];

    public function sales()
{
    return $this->hasMany(Sale::class);
}
}
