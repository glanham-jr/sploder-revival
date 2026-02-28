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

    public function ban()
    {
        require __DIR__ . '/../core/games/moderation/php/ban.php';
    }

    public function unban()
    {
        require __DIR__ . '/../core/games/moderation/php/unban.php';
    }

    public function delete()
    {
        require __DIR__ . '/../core/games/moderation/php/delete.php';
    }

    public function getbp()
    {
        require __DIR__ . '/../core/games/moderation/php/getbp.php';
    }

    public function setbp()
    {
        require __DIR__ . '/../core/games/moderation/php/setbp.php';
    }
}
