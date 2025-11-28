<?php

namespace app\controllers;

class FeedsController
{
    public function featured()
    {
        require __DIR__ . '/../core/feeds/featured/index.php';
    }
}
