<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    // Table Name
    protected $table = 'food_items';

    public function orders() {
        return $this->belongsToMany(Order::class);
    }
}