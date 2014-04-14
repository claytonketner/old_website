<?php
require_once("database.php");


$dbConn = Database::connect();
$query = $dbConn->prepare("SELECT name, message, date 
						   FROM guestbook
						   ORDER BY date");
$query->execute();

foreach ($query as $row)
{
	echo "<tr>";
	echo "<td>" . $row["date"] . "</td>";
	echo "<td>" . $row["name"] . "</td>";
	echo "<td>" . $row["message"] . "</td>";
	echo "</tr>";
}