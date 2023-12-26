<?php

namespace App\Services;

class UserService {
    private $users;

    public function __construct() {
        $this->users = [];
    }

    public function addUser($user) {
        $this->users[] = $user;
    }

    public function getUser($userId) {
        foreach ($this->users as $user) {
            if ($user->getId() == $userId) {
                return $user;
            }
        }
        return null;
    }

    public function deleteUser($userId) {
        $this->users = array_filter($this->users, function($user) use ($userId) {
            return $user->getId() != $userId;
        });
    }

    public function listUsers() {
        return $this->users;
    }
}
