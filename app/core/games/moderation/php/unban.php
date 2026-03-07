<?php
require_once __DIR__ . '/../../../content/initialize.php';


include(__DIR__ . '/verify.php');
require_once(__DIR__ . "/../../../../database/connect.php");

$db = getDatabase();

$username = $_REQUEST['username'];

include(__DIR__ . '/../../../content/checkban.php');
if (!checkBan($username)) {
    header("Location: /games/moderation/index.php?err=User not banned");
    die();
}

if (
    $db->execute("DELETE FROM banned_members WHERE username=:username", [
      ':username' => $username,
    ])
) {
    include(__DIR__ . '/log.php');
    logModeration('unbanned', $username, 1);
    header("Location: /games/moderation/index.php?msg=User unbanned successfully");
    exit();
} else {
    header("Location: /games/moderation/index.php?err=There was an error while unbanning the user");
    exit();
}
