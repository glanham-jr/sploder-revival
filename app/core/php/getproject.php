<?php
require_once __DIR__ . '/../content/initialize.php';

if ($_GET['PHPSESSID'] != "demo") {
    session_id($_GET['PHPSESSID']);
    session_start();
    $user_id = $_SESSION['userid'];
    $g_id = (int)filter_var($_GET['p'], FILTER_SANITIZE_NUMBER_INT);
    $path = $_SERVER['DOCUMENT_ROOT'] . "/users/user" . $user_id . "/projects/proj" . $g_id . "/unpublished.xml";
    if (file_exists($path)) {
        echo file_get_contents($path);
    } else {
        http_response_code(404);
        echo '<message result="failed" message="Project file not found."/>';
    }
} else {
    http_response_code(404);
}
