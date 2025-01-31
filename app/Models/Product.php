<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'image',
        'category_id',
        'is_active',
    ];

    //* Define the relationship with the Category model
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function cartItems()
    {
        return $this->hasMany(Cart::class);
    }
    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }
}
