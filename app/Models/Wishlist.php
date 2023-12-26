<?php

namespace App\Models;

// asso class
class Wishlist
{
    private Customer $customer;
    private array $items;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
        $this->items = [];
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem(Item $item): void
    {
        $this->items[] = $item;
    }

    public function removeItem(Item $item): void
    {
        $this->items = array_filter($this->items, function ($existingItem) use ($item) {
            return $existingItem->getName() !== $item->getName();
        });
    }
}
