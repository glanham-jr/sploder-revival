<?php

namespace app\controllers;

class GamesController
{
    public function challenges()
    {
        require __DIR__ . '/../core/games/challenges.php';
    }

    public function contest()
    {
        require __DIR__ . '/../core/games/contest.php';
    }

    public function featured()
    {
        require __DIR__ . '/../core/games/featured.php';
    }

    public function gametags()
    {
        require __DIR__ . '/../core/games/game-tags.php';
    }

    public function makereview()
    {
        require __DIR__ . '/../core/games/make-review.php';
    }

    public function members()
    {
        require __DIR__ . '/../core/games/members.php';
    }

    public function multiplayer()
    {
        require __DIR__ . '/../core/games/multiplayer.php';
    }

    public function newest()
    {
        require __DIR__ . '/../core/games/newest.php';
    }

    public function play()
    {
        require __DIR__ . '/../core/games/play.php';
    }

    public function reviews()
    {
        require __DIR__ . '/../core/games/reviews.php';
    }

    public function search()
    {
        require __DIR__ . '/../core/games/search.php';
    }

    public function tags()
    {
        require __DIR__ . '/../core/games/tags.php';
    }

    public function viewreview()
    {
        require __DIR__ . '/../core/games/view-review.php';
    }
}
