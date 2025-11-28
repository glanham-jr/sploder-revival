<?php

namespace app\controllers;

class LegalController
{
    public function privacypolicy()
    {
        require __DIR__ . '/../core/legal/privacypolicy.php';
    }

    public function termsofservice()
    {
        require __DIR__ . '/../core/legal/termsofservice.php';
    }
}
