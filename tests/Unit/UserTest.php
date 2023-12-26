<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private User $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = new User(1, 'name', '123', 'test@test.com');
    }

    /**
     * check user id
     */
    public function test_get_id()
    {
        $this->assertEquals(1, $this->user->getId());
    }

    /**
     * set new user id
     */
    public function test_set_id()
    {
        $this->user->setId(2);
        $this->assertEquals(2, $this->user->getId());
    }

    /**
     * check user name
     */
    public function test_get_username()
    {
        $this->assertEquals('name', $this->user->getUsername());
    }

    /**
     * set new user name
     */
    public function test_set_username()
    {
        $this->user->setUsername('name2');
        $this->assertEquals('name2', $this->user->getUsername());
    }

    /**
     * check password
     */
    public function test_get_password()
    {
        $this->assertEquals('123', $this->user->getPassword());
    }

    /**
     check if possible set new password
     */
    public function test_set_password()
    {
        $this->user->setPassword('456');
        $this->assertEquals('456', $this->user->getPassword());
    }

    /**
     * check email
     */
    public function test_get_email()
    {
        $this->assertEquals('test@test.com', $this->user->getEmail());
    }

    /**
     * set new email
     */
    public function test_set_email()
    {
        $this->user->setEmail('new_email@test.com');
        $this->assertEquals('new_email@test.com', $this->user->getEmail());
    }
}
