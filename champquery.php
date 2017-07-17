<?php

	include_once 'connect.php';
	
	function connect() {
		
		mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('Couldnt not connect' . mysql_error());
		mysql_select_db(DB_NAME);		
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