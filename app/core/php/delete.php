<?php
require_once __DIR__ . '/../content/initialize.php';

session_start();

$id = (int)filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT);

require_once(__DIR__ . '/../../database/connect.php');

$db = getDatabase();
$result2 = $db->query("SELECT author FROM games WHERE g_id=:id", [
    ':id' => $id
]);

if ($_SESSION["username"] == $result2[0]["author"]) {
    $db->execute("UPDATE games SET isdeleted=1, ispublished=0 WHERE g_id=:id", [
        ':id' => $id
    ]);
    header('Location: ../dashboard/my-games.php');
    exit();
} else {
    http_response_code(500);
    echo "There was an error while deleting your game.";
}
