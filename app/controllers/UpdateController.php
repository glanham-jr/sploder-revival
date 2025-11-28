<?php

namespace app\controllers;

class UpdateController
{
    public function index()
    {
        require __DIR__ . '/../core/update/index.php';
    }

    public function upload()
    {
        require __DIR__ . '/../core/update/upload.php';
    }
}
