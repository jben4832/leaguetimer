<?php


class DbConnect
{
// Database login vars
private $dbHostname = 'leaguetimer.database.windows.net';
private $dbDatabase = 'leaguechamps';
private $dbUsername = 'league';
private $dbPassword = 'Assass69';
public $db = null;

	public function connect()
	{

		try
		{
			$this->db = new PDO("mysql:host=".$this->dbHostname.";dbname=".$this->dbDatabase, $this->dbUsername, $this->dbPassword);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			echo "It seems there was an error.  Please refresh your browser and try again. ".$e->getMessage();
		}
	}
	
	public function query()
	{
			//Establishes the connection
		$conn = sqlsrv_connect($serverName, $connectionOptions);
		$tsql= "SELECT * FROM leaguechamps";
		$getResults= sqlsrv_query($conn, $tsql);
		if ($getResults == FALSE)
			echo (sqlsrv_errors());
		while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
		 echo ($row['ChampID'] . " " . $row['name'] . PHP_EOL);
		}
		sqlsrv_free_stmt($getResults);
	}
		
}
?>