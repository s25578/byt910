<?php

namespace App\Services;

class NotificationService {
    private $notifications;

    public function __construct() {
        $this->notifications = [];
    }

    public function addNotification($notification) {
        $this->notifications[] = $notification;
    }

    public function getNotification($notificationId) {
        foreach ($this->notifications as $notification) {
            if ($notification->getId() == $notificationId) {
                return $notification;
            }
        }
        return null;
    }

    public function deleteNotification($notificationId) {
        $this->notifications = array_filter($this->notifications, function($notification) use ($notificationId) {
            return $notification->getId() != $notificationId;
        });
    }

    public function listNotifications() {
        return $this->notifications;
    }
}
