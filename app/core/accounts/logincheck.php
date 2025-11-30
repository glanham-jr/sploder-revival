<?php
require_once __DIR__ . '/../content/initialize.php';

session_start();
if (isset($_SESSION['loggedin'])) {
    header("Location: /");
    exit();
}
