<?php

namespace app\controllers;

class MembersController
{
    public function all()
    {
        require __DIR__ . '/../core/members/all.php';
    }

    public function index()
    {
        require __DIR__ . '/../core/members/index.php';
    }

    public function search()
    {
        require __DIR__ . '/../core/members/search.php';
    }
}
