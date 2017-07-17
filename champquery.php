<?php

	include_once 'connect.php';
	
	function connect() {
		
		$conn = sqlsrv_connect($serverName, $connectionOptions);or die('Couldnt not connect' . mysql_error());
			
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