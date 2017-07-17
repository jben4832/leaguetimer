<?php

	
	function connect() {
		
		try {
			$conn = new PDO("sqlsrv:server = tcp:leaguetimer.database.windows.net,1433; Database = LeagueChamps", "league", "{Assass69}");
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e) {
			print("Error connecting to SQL Server.");
			die(print_r($e));
		}	
	}
	
	function close() {
		mysql_close();
		
	}
	
	function query(){
		$myData = mysql_query("SELECT * FROM leaguechampsdata");
		while($record = mysql_fetch_array($myData)){
		echo '<option value="' . $record['ChampID'] . '">' . $record[name] . '<option>';
			
		}
		
	}
?>