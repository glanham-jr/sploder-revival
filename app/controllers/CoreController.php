<?php

namespace app\controllers;

class CoreController
{
    public function index()
    {
        require __DIR__ . '/../core/index.php';
    }

    public function credits()
    {
        require __DIR__ . '/../core/credits.php';
    }

    public function staff()
    {
        require __DIR__ . '/../core/staff.php';
    }
}
