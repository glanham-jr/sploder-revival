<?php

namespace app\controllers;

class AwardsController
{
    public function all()
    {
        require __DIR__ . '/../core/awards/all.php';
    }

    public function creator()
    {
        require __DIR__ . '/../core/awards/creator.php';
    }

    public function index()
    {
        require __DIR__ . '/../core/awards/index.php';
    }

    // PHP subdirectory methods
    public function accept()
    {
        require __DIR__ . '/../core/awards/php/accept.php';
    }

    public function decline()
    {
        require __DIR__ . '/../core/awards/php/decline.php';
    }

    public function materials()
    {
        require __DIR__ . '/../core/awards/php/materials.php';
    }

    public function revoke()
    {
        require __DIR__ . '/../core/awards/php/revoke.php';
    }

    public function send()
    {
        require __DIR__ . '/../core/awards/php/send.php';
    }
}
