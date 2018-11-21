<?php

namespace App;

class Cart {

    public $items;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart) {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        } else {
            $this->items = null;
        }
    }

    public function add($item, $id) {
        $storedItem = ['qty' => 0, 'price' => $item->last_price()->unit_price,
            'image' => $item->image()->url, 'item_price' => $item->last_price()->unit_price,
            'promotion_price' => $item->last_price()->promotion_price, 'item' => $item];

        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty'] ++;
        $storedItem['price'] = ($storedItem['item_price'] * $storedItem['qty']) - ($storedItem['promotion_price'] * $storedItem['qty']);
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += ($storedItem['item_price'] - $storedItem['promotion_price']);
    }

    public function deductByOne($id) {
        if ($this->items[$id]['qty'] > 1) {
            $this->items[$id]['qty'] --;
            $this->items[$id]['price'] -= ($this->items[$id]['item_price']-$this->items[$id]['promotion_price']);
            $this->totalQty--;
            $this->totalPrice -= ($this->items[$id]['item_price']-$this->items[$id]['promotion_price']);
        }

        if ($this->items[$id]['qty'] <= 0) {
            unset($this->items[$id]);
        }
    }

    public function removeItem($id) {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }

}
