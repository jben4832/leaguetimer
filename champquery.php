<?php

		$host = "leaguetimer.database.windows.net";
		$user = "league";
		$pwd = "Assass69";
		$db = "LeagueChamps";
		
		try
		{
			$conn = new PDO("mysql:host=".$this->dbHostname.";dbname=".$this->dbDatabase, $this->dbUsername, $this->dbPassword);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		     $sql = "SELECT * FROM LeagueChamps;";
			 $stmt =$conn->query($sql);
			 $row = $stmt->fetch();
		}
		 catch(Exception $e)
		{
			 die(print_r($e));
		}

		echo "$row[0] $row[1]";

		$conn = NULL;
?>