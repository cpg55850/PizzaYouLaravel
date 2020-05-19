<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart) {
        if($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id, $qty) {
        // Create fresh item if doesn't exist
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];

        // If it already exists, overwrite fresh item
        if($this->items) {
            if(array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty'] += $qty;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty += $qty;
        $this->totalPrice += $item->price * $qty;
    }
}