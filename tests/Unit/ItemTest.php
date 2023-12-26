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

    public function test_get_id()
    {
        $this->assertEquals(1, $this->item->getId());
    }

    public function test_set_id()
    {
        $this->item->setId(2);
        $this->assertEquals(2, $this->item->getId());
    }

    public function test_get_name()
    {
        $this->assertEquals('Item Name', $this->item->getName());
    }

    public function test_set_name()
    {
        $this->item->setName('New Item');
        $this->assertEquals('New Item', $this->item->getName());
    }

    public function test_get_price()
    {
        $this->assertEquals(10, $this->item->getPrice());
    }

    public function test_set_price()
    {
        $this->item->setPrice(20);
        $this->assertEquals(20, $this->item->getPrice());
    }

    public function test_is_borrowed()
    {
        $this->assertFalse($this->item->isBorrowed());
    }

    public function test_set_is_borrowed()
    {
        $this->item->setIsBorrowed(true);
        $this->assertTrue($this->item->isBorrowed());
    }

    public function test_is_for_sale()
    {
        $this->assertTrue($this->item->isForSale());
    }

    public function test_set_is_for_sale()
    {
        $this->item->setIsForSale(false);
        $this->assertFalse($this->item->isForSale());
    }
}
