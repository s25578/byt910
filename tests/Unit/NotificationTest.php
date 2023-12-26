<?php

namespace Tests\Unit;

use App\Models\Notification;
use PHPUnit\Framework\TestCase;

class NotificationTest extends TestCase
{
    private Notification $notification;

    protected function setUp(): void
    {
        parent::setUp();
        $this->notification = new Notification(1, 1, 'notification', time());
    }

    public function test_get_text()
    {
        $this->assertEquals('notification', $this->notification->getText());
    }

    public function test_set_text()
    {
        $this->notification->setText('new notification');
        $this->assertEquals('new notification', $this->notification->getText());
    }

    public function test_get_created_at()
    {
        $this->assertEquals(time(), $this->notification->getCreatedAt());
    }

    public function test_set_created_at()
    {
        $newCreatedAt = time() + 1111;
        $this->notification->setCreatedAt($newCreatedAt);
        $this->assertEquals($newCreatedAt, $this->notification->getCreatedAt());
    }
}
