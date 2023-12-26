<?php

namespace Tests\Unit;

use App\Models\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    private Item $item;

    protected function setUp(): void
    {
        parent::setUp();
        $this->item = new Item(1, 'Item Name', 10, false, true);
    }

    /**
     * Get item id and check
     */
    public function test_get_id()
    {
        $this->assertEquals(1, $this->item->getId());
    }

    /**
     * Set new id and check
     */
    public function test_set_id()
    {
        $this->item->setId(2);
        $this->assertEquals(2, $this->item->getId());
    }

    /**
     * Check item name
     */
    public function test_get_name()
    {
        $this->assertEquals('Item Name', $this->item->getName());
    }

    /**
     * Set and check new name
     */
    public function test_set_name()
    {
        $this->item->setName('New Item');
        $this->assertEquals('New Item', $this->item->getName());
    }

    /**
     * check item price
     */
    public function test_get_price()
    {
        $this->assertEquals(10, $this->item->getPrice());
    }

    /**
     * set new item price
     */
    public function test_set_price()
    {
        $this->item->setPrice(20);
        $this->assertEquals(20, $this->item->getPrice());
    }

    /**
     * check if item is borrowed
     */
    public function test_is_borrowed()
    {
        $this->assertFalse($this->item->isBorrowed());
    }

    /**
     * mark item as borrowed and check
     */
    public function test_set_is_borrowed()
    {
        $this->item->setIsBorrowed(true);
        $this->assertTrue($this->item->isBorrowed());
    }

    /**
     * check if item for sale
     */
    public function test_is_for_sale()
    {
        $this->assertTrue($this->item->isForSale());
    }

    /**
     * set item for sale and check the value
     */
    public function test_set_is_for_sale()
    {
        $this->item->setIsForSale(false);
        $this->assertFalse($this->item->isForSale());
    }
}
