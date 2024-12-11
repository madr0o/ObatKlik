<?php

namespace App\Models;

use GuzzleHttp\ClientTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CartItem extends Model
{
    //
    use HasFactory;

    protected $fillable = ['cart_id', 'item_id', 'quantity'];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
