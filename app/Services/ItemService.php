<?php

namespace App\Services;

class ItemService {
    private $items;

    public function __construct() {
        $this->items = [];
    }

    public function addItem($item) {
        $this->items[] = $item;
    }

    public function getItem($itemId) {
        foreach ($this->items as $item) {
            if ($item->getId() == $itemId) {
                return $item;
            }
        }
        return null;
    }

    public function deleteItem($itemId) {
        $this->items = array_filter($this->items, function($item) use ($itemId) {
            return $item->getId() != $itemId;
        });
    }

    public function listItems() {
        return $this->items;
    }
}
