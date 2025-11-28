<?php

namespace app\controllers;

class GamesModerationController
{
    public function admin()
    {
        require __DIR__ . '/../core/games/moderation/admin.php';
    }

    public function banned()
    {
        require __DIR__ . '/../core/games/moderation/banned.php';
    }

    public function index()
    {
        require __DIR__ . '/../core/games/moderation/index.php';
    }

    public function ipcheck()
    {
        require __DIR__ . '/../core/games/moderation/ipcheck.php';
    }

    public function logs()
    {
        require __DIR__ . '/../core/games/moderation/logs.php';
    }

    public function pending()
    {
        require __DIR__ . '/../core/games/moderation/pending.php';
    }
}
