<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    //
    use HasFactory;

    public function cartItems(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart_items')->withPivot('quantity')->withTimestamps();
    }
}
