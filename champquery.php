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
			 $conn->query($sql);
		}
		 catch(Exception $e)
		{
			 die(print_r($e));
		}
		 while ($query !empty)) 
		{
			echo ($row['ChampID'] . " " . $row['Name'] . PHP_EOL);
		}
?>