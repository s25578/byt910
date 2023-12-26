<?php

namespace Tests\Unit;

use App\Models\Notification;
use App\Services\ItemService;
use App\Services\NotificationService;
use PHPUnit\Framework\TestCase;
use stdClass;

class NotificationServiceTest extends TestCase
{
    private $notificationService;
    private Notification $notification;

    protected function setUp(): void {
        $this->notificationService = new NotificationService();
        $this->notification = new Notification(1, 1, 'notification', time());
    }

    public function test_add_notification() {

        $this->notificationService->addNotification($this->notification);
        $this->assertCount(1, $this->notificationService->listNotifications());
    }

    public function test_get_notification() {

        $this->notificationService->addNotification($this->notification);
        $retrievedNotification = $this->notificationService->getNotification(1);

        $this->assertEquals($this->notification, $retrievedNotification);
    }

    public function test_delete_notification() {

        $this->notificationService->addNotification($this->notification);
        $this->notificationService->deleteNotification(1);

        $this->assertCount(0, $this->notificationService->listNotifications());
    }
}
