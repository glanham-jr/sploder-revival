<?php

namespace app\controllers;

class CommentsController
{
    public function includejs()
    {
        require __DIR__ . '/../core/comments/include.js.php';
    }

    public function index()
    {
        require __DIR__ . '/../core/comments/index.php';
    }
}
