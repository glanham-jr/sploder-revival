<?php

namespace app\controllers;

class DashboardController
{
    public function index()
    {
        require __DIR__ . '/../core/dashboard/index.php';
    }

    public function mygames()
    {
        require __DIR__ . '/../core/dashboard/my-games.php';
    }

    public function mygraphics()
    {
        require __DIR__ . '/../core/dashboard/my-graphics.php';
    }

    public function profileedit()
    {
        require __DIR__ . '/../core/dashboard/profile-edit.php';
    }

    public function profileupdate()
    {
        require __DIR__ . '/../core/dashboard/profile-update.php';
    }

    public function taggraphic()
    {
        require __DIR__ . '/../core/dashboard/tag-graphic.php';
    }

    public function trash()
    {
        require __DIR__ . '/../core/dashboard/trash.php';
    }
}
