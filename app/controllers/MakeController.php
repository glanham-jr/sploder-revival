<?php

namespace app\controllers;

class MakeController
{
    public function algo()
    {
        require __DIR__ . '/../core/make/algo.php';
    }

    public function arcade()
    {
        require __DIR__ . '/../core/make/arcade.php';
    }

    public function description()
    {
        require __DIR__ . '/../core/make/description.php';
    }

    public function graphics()
    {
        require __DIR__ . '/../core/make/graphics.php';
    }

    public function helpinline()
    {
        require __DIR__ . '/../core/make/help_inline.php';
    }

    public function index()
    {
        require __DIR__ . '/../core/make/index.php';
    }

    public function plat()
    {
        require __DIR__ . '/../core/make/plat.php';
    }

    public function ppg()
    {
        require __DIR__ . '/../core/make/ppg.php';
    }

    public function publish()
    {
        require __DIR__ . '/../core/make/publish.php';
    }

    public function shooter()
    {
        require __DIR__ . '/../core/make/shooter.php';
    }

    public function tags()
    {
        require __DIR__ . '/../core/make/tags.php';
    }
}
