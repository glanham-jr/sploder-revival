<?php
require_once __DIR__ . '/../../content/initialize.php';

session_start();
include(__DIR__ . '/../../../database/connect.php');
$db = getDatabase();

$db->execute("DELETE FROM friend_requests
    WHERE sender_id=:sender_id
    AND receiver_username = :receiver_username", [
        ':receiver_username' => $_GET['u'],
        ':sender_id' => $_SESSION['userid']
    ]);


header('Location: ../index.php');
