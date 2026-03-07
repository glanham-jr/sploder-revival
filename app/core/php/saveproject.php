<?php
require_once __DIR__ . '/../content/initialize.php';
$xml = file_get_contents('php://input');
$_POST['xml'] = $xml;
require(__DIR__ . '/includes/saveproject.php');
$id = saveProject(1);
require(__DIR__ . '/thumbnails/thumb.php');
$image_path = $_SERVER['DOCUMENT_ROOT'] . "/users/user" . $_SESSION['userid'] . "/images/proj" . $id . "/";
generateImageFromXML($xml, $image_path);