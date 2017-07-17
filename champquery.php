<?php


$serverName = "leaguetimer.database.windows.net";
$connectionOptions = array(
    "Database" => "leaguechamps",
    "Uid" => "league",
    "PWD" => "Assass69"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
$tsql= "SELECT * FROM leaguechamps";
$getResults= sqlsrv_query($conn, $tsql);
if ($getResults == FALSE)
    echo (sqlsrv_errors());
while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
 echo ($row['ChampID'] . " " . $row['Name'] . PHP_EOL);
}
sqlsrv_free_stmt($getResults);

?>