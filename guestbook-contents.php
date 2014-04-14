<?php

$dbConn = Database::connect();
$query = $dbConn->prepare("SELECT name, message, date FROM guestbook");
$query->execute();

foreach ($query as $row)
{
	echo "Name:"
	echo $row;
}