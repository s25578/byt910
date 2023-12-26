<?php

namespace Tests\Unit;

use App\Models\Administrator;
use PHPUnit\Framework\TestCase;

class AdministratorTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->user = new Administrator(1, 'name', '123', 'test@test.com', 'senior seller');
    }

    /**
     * Check title
     */
    public function test_get_title()
    {
        $this->assertEquals('senior seller', $this->user->getTitle());
    }

    /**
     * Set and check title
     */
    public function test_set_title()
    {
        $this->user->setTitle('new title');
        $this->assertEquals('new title', $this->user->getTitle());
    }
}
