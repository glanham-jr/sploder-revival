<?php

namespace app\controllers;

class AccountsController
{
    public function account()
    {
        require __DIR__ . '/../core/accounts/account.php';
    }

    public function avatar()
    {
        require __DIR__ . '/../core/accounts/avatar.php';
    }

    public function check()
    {
        require __DIR__ . '/../core/accounts/check.php';
    }

    public function checkmigrationownership()
    {
        require __DIR__ . '/../core/accounts/checkmigrationownership.php';
    }

    public function discord()
    {
        require __DIR__ . '/../core/accounts/discord.php';
    }

    public function login()
    {
        require __DIR__ . '/../core/accounts/login.php';
    }

    public function logout()
    {
        require __DIR__ . '/../core/accounts/logout.php';
    }

    public function migrationcheck()
    {
        require __DIR__ . '/../core/accounts/migrationcheck.php';
    }

    public function register()
    {
        require __DIR__ . '/../core/accounts/register.php';
    }

    public function registerdatabase()
    {
        require __DIR__ . '/../core/accounts/registerdatabase.php';
    }

    public function registerpassword()
    {
        require __DIR__ . '/../core/accounts/registerpassword.php';
    }

    public function registersuccess()
    {
        require __DIR__ . '/../core/accounts/registersuccess.php';
    }
}
