<?php
session_start();
include_once "db.php";
include_once "user.php";

$db = new Database();
$conn = $db->getConnection();
$user = new User($conn);

$user->logout();

header("Location: login.php");
exit;
?>