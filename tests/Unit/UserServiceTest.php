<?php

namespace Tests\Unit;

use App\Models\User;
use App\Services\UserService;
use PHPUnit\Framework\TestCase;
use stdClass;

class UserServiceTest extends TestCase
{
    private $userService;
    private User $user;

    protected function setUp(): void {
        $this->userService = new UserService();
        $this->user = new User(1, 'name', '123', 'test@test.com');
    }

    /**
     * add and check new user
     */
    public function test_add_user() {
        $this->userService->addUser($this->user);
        $this->assertCount(1, $this->userService->listUsers());
    }

    /**
     * check user
     */
    public function test_get_user() {
        $this->userService->addUser($this->user);
        $retrievedUser = $this->userService->getUser(1);
        $this->assertEquals($this->user, $retrievedUser);
    }

    /**
     * remove user
     */
    public function test_delete_user() {

        $this->userService->addUser($this->user);
        $this->userService->deleteUser(1);

        $this->assertCount(0, $this->userService->listUsers());
    }
}
