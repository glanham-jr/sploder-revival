<?php

namespace app\controllers;

class FriendsController
{
    public function all()
    {
        require __DIR__ . '/../core/friends/all.php';
    }

    public function index()
    {
        require __DIR__ . '/../core/friends/index.php';
    }

    // PHP subdirectory methods
    public function accept()
    {
        require __DIR__ . '/../core/friends/php/accept.php';
    }

    public function best()
    {
        require __DIR__ . '/../core/friends/php/best.php';
    }

    public function ignore()
    {
        require __DIR__ . '/../core/friends/php/ignore.php';
    }

    public function request()
    {
        require __DIR__ . '/../core/friends/php/request.php';
    }

    public function revoke()
    {
        require __DIR__ . '/../core/friends/php/revoke.php';
    }

    public function unbest()
    {
        require __DIR__ . '/../core/friends/php/unbest.php';
    }

    public function unfriend()
    {
        require __DIR__ . '/../core/friends/php/unfriend.php';
    }
}
