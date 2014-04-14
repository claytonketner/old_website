<?php
require_once("database.php");

$name = $_POST["name"];
$message = $_POST["message"];

$dbConn = Database::connect();
$query = $dbConn->prepare("INSERT INTO guestbook (name, message, date) 
							VALUES (:name, :message, NOW())");
$query->bindParam(":name", $name, PDO::PARAM_STR, 30);
$query->bindParam(":message", $message, PDO::PARAM_STR);
$query->execute();