<?php
$dbHost     = "localhost:3307";
$dbUsername = "admin";
$dbPassword = "root";
$dbName     = "upload";

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>