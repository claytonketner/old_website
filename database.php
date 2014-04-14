<?php

class Database
{
	public static function connect()
	{
		$dbConn = new PDO("mysql:dbname=db523992810;host=db523992810.db.1and1.com;charset=utf8", "dbo523992810", 
			"aguestbookpassword90!");

		$dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $dbConn;
	}
}