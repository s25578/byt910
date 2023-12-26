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

    /**
     * check transaction id
     */
    public function test_get_id()
    {
        $this->assertEquals(1, $this->transaction->getId());
    }

    /**
     * set new transaction id and check
     */
    public function test_set_id()
    {
        $this->transaction->setId(2);
        $this->assertEquals(2, $this->transaction->getId());
    }

    /**
     * get and check user id
     */
    public function test_get_user_id()
    {
        $this->assertEquals(1, $this->transaction->getUserId());
    }

    /**
     * set and check new user id
     */
    public function test_set_user_id()
    {
        $this->transaction->setUserId(2);
        $this->assertEquals(2, $this->transaction->getUserId());
    }

    /**
     * check item id
     */
    public function test_get_item_id()
    {
        $this->assertEquals(1, $this->transaction->getItemId());
    }

    /**
     * set and check new id
     */
    public function test_set_item_id()
    {
        $this->transaction->setItemId(2);
        $this->assertEquals(2, $this->transaction->getItemId());
    }

    /**
     * get order price
     */
    public function test_get_price()
    {
        $this->assertEquals(100, $this->transaction->getPrice());
    }

    /**
     * set new price to hte order
     */
    public function test_set_price()
    {
        $this->transaction->setPrice(200);
        $this->assertEquals(200, $this->transaction->getPrice());
    }
}
