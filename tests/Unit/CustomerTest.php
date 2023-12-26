<?php

namespace Tests\Unit;

use App\Models\Administrator;
use App\Models\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->user = new Customer(1, 'name', '123', 'test@test.com', []);
    }

    public function test_get_book_owned()
    {
        $this->assertEquals([], $this->user->getBookOwned());
    }

    public function test_set_book_owned()
    {
        $this->user->setBookOwned([1,2,3]);
        $this->assertEquals([1,2,3], $this->user->getBookOwned());
    }
}
