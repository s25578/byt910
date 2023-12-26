<?php

namespace Tests\Unit;

use App\Models\Item;
use App\Services\ItemService;
use PHPUnit\Framework\TestCase;

class ItemServiceTest extends TestCase
{
    private ItemService $itemService;
    private Item $item1;
    private Item $item2;

    protected function setUp(): void
    {
        parent::setUp();
        $this->itemService = new ItemService();
        $this->item1 = new Item(1, 'Item Name', 10, false, true);;
        $this->item2 = new Item(2, 'Item Name', 10, false, true);;
    }

    public function test_add_item()
    {
        $this->itemService->addItem($this->item1);

        $items = $this->itemService->listItems();
        $this->assertCount(1, $items);
    }

    public function test_get_item()
    {
        $this->itemService->addItem($this->item1);
        $this->itemService->addItem($this->item2);

        $foundItem = $this->itemService->getItem(1);
        $this->assertEquals($this->item1, $foundItem);

        $notFoundItem = $this->itemService->getItem(3);
        $this->assertNull($notFoundItem);
    }

    public function test_delete_item()
    {
        $this->itemService->addItem($this->item1);
        $this->itemService->addItem($this->item2);

        $this->itemService->deleteItem(1);
        $items = $this->itemService->listItems();
        $this->assertCount(1, $items);
    }

    public function test_list_items()
    {
        $this->itemService->addItem($this->item1);
        $this->itemService->addItem($this->item2);

        $items = $this->itemService->listItems();
        $this->assertCount(2, $items);
    }
}
