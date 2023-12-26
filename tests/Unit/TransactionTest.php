<?php

namespace Tests\Unit;

use App\Models\Transaction;
use PHPUnit\Framework\TestCase;

class TransactionTest extends TestCase
{
    private Transaction $transaction;

    protected function setUp(): void
    {
        parent::setUp();
        $this->transaction = new Transaction(1, 1, time(), 1, 100);
    }

    public function test_get_id()
    {
        $this->assertEquals(1, $this->transaction->getId());
    }

    public function test_set_id()
    {
        $this->transaction->setId(2);
        $this->assertEquals(2, $this->transaction->getId());
    }

    public function test_get_user_id()
    {
        $this->assertEquals(1, $this->transaction->getUserId());
    }

    public function test_set_user_id()
    {
        $this->transaction->setUserId(2);
        $this->assertEquals(2, $this->transaction->getUserId());
    }

    public function test_get_item_id()
    {
        $this->assertEquals(1, $this->transaction->getItemId());
    }

    public function test_set_item_id()
    {
        $this->transaction->setItemId(2);
        $this->assertEquals(2, $this->transaction->getItemId());
    }

    public function test_get_price()
    {
        $this->assertEquals(100, $this->transaction->getPrice());
    }

    public function test_set_price()
    {
        $this->transaction->setPrice(200);
        $this->assertEquals(200, $this->transaction->getPrice());
    }
}
