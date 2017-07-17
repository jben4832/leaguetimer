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
	
	function InsertData()  
    {  
        try  
        {  
            $conn = connect();  

            $tsql = "SELECT * FROM LeagueChamps.leaguechampsdata";  
            //Insert query  
            $insertReview = sqlsrv_query($conn, $tsql);  
            if($insertReview == FALSE)  
                die(FormatErrors( sqlsrv_errors()));  
              
            while($row = sqlsrv_fetch_array($insertReview, SQLSRV_FETCH_ASSOC))  
            {     
                echo($row['ChampID']);  
            }  
            sqlsrv_free_stmt($insertReview);  
            sqlsrv_close($conn);  
        }  
        catch(Exception $e)  
        {  
            echo("Error!");  
        }  
    }  
?>