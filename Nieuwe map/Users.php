<?php

require "Database.php";

class Users
{
	private $myDb;
	private $userName;
	
	function __construct()
	{
		
		$this->myDb = new Database();
		$this->myDb->connect();		
	}
	
	function Authorize($user,$pwd)
	{
		//indien 1 rij wil dit zeggen dat username en passwoord gevonden is!!!
		$sql = "select count(*) from Account where Name = '$user' and Password = '$pwd'";
		
		$result = $this->myDb->query($sql);	
		
		
		$line = $this->myDb->fetchArray($result);
		return $line[0];

		
	}
	
	function getUser($user,$pwd)
	{
		$sql = "SELECT Name FROM Account WHERE Name = '$user' AND Password = '$pwd'";
		
		$result = $this->myDb->query($sql);
		$line = $this->myDb->fetchArray($result);
		return $line['username'];
		
		}
}

?>