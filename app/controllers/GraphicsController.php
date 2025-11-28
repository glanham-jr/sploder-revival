<?php

namespace app\controllers;

class GraphicsController
{
    public function addtag()
    {
        require __DIR__ . '/../core/graphics/add-tag.php';
    }

    public function feedback()
    {
        require __DIR__ . '/../core/graphics/feedback.php';
    }

    public function getlist()
    {
        require __DIR__ . '/../core/graphics/getlist.php';
    }

    public function graphictags()
    {
        require __DIR__ . '/../core/graphics/graphic-tags.php';
    }

    public function index()
    {
        require __DIR__ . '/../core/graphics/index.php';
    }

    public function put()
    {
        require __DIR__ . '/../core/graphics/put.php';
    }

    public function tags()
    {
        require __DIR__ . '/../core/graphics/tags.php';
    }

    public function verify()
    {
        require __DIR__ . '/../core/graphics/verify.php';
    }
}
