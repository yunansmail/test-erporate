<?php

namespace App;

class Cart
{
    public $items =  null; 
    public $totalQty = 0;
    public $totalPrice = 0;
    public $totalWeight = 0;

    public function __construct($oldCart)
    {
        if($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalWeight = $oldCart->totalWeight;
        } 
    }

    public function add($item, $id) 
    {
        $storedItem = ['qty' => 0, 'price' => $item->harga, 'item' => $item];
        if($this->items) {
            if(array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        
    }

    
}
