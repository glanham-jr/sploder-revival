<?php
require_once __DIR__ . '/../content/initialize.php';
session_start();
// If the user is not logged in, die
if (!isset($_SESSION['username'])) {
    die();
}

require_once(__DIR__ . '/../../repositories/repositorymanager.php');

$userRepository = RepositoryManager::get()->getUserRepository();

// Store events
$s = $_POST['s'] ?? '';
$e = $_POST['e'] ?? '';
$g = $_POST['g'] ?? '';

if ($s && $e && $g) {
    $userRepository->saveEvent($s, $e, $g);
}
