<?php
// https://drive.google.com/drive/folders/1uYFpOT_04mT0rA7aUie4h4tN4lwUXfE1

error_reporting(E_ERROR | E_PARSE);

$serverName = "";
$connectionInfo = array( "Database"=>"", "UID"=>"", "PWD"=>"");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
			//echo "<br />";
		}
else  {
		echo "Connection could not be established.<br />";
		die( print_r( sqlsrv_errors(), true));
	}

	
?>