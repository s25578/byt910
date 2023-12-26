<?php

namespace Tests\Unit;

use App\Models\Customer;
use App\Models\Item;
use App\Models\Wishlist;
use PHPUnit\Framework\TestCase;

class WishlistTest extends TestCase
{
    private Wishlist $wishlist;
    private Customer $customer;
    private Item $item1;
    private Item $item2;

    protected function setUp(): void
    {
        parent::setUp();
        $this->customer = new Customer(1, 'name', '123', 'test@test.com', []);
        $this->wishlist = new Wishlist($this->customer);
        $this->item1 = new Item(1, 'Item 1', 10, false, true);
        $this->item2 = new Item(2, 'Item 2', 20, false, true);
    }

    public function test_get_customer()
    {
        $this->assertEquals($this->customer, $this->wishlist->getCustomer());
    }

    public function test_set_customer()
    {
        $newCustomer = new Customer(2, 'name', '12334', 'test2@test.com', []);
        $this->wishlist->setCustomer($newCustomer);
        $this->assertEquals($newCustomer, $this->wishlist->getCustomer());
    }

    public function test_get_items()
    {
        $this->assertEquals([], $this->wishlist->getItems());
    }

    public function test_add_item()
    {
        $this->wishlist->addItem($this->item1);
        $this->assertEquals([$this->item1], $this->wishlist->getItems());
    }

    public function test_remove_item()
    {
        $this->wishlist->addItem($this->item1);
        $this->wishlist->addItem($this->item2);
        $this->wishlist->removeItem($this->item1);
        $this->wishlist->removeItem($this->item2);
        $this->assertEquals([], $this->wishlist->getItems());
    }
}
