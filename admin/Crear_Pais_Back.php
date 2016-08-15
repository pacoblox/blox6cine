<?php 
	$serverName = "172.29.185.108"; //serverName\instanceName
	$connectionInfo = array( "Database"=>"Sistema_Cine", "UID"=>"sa", "PWD"=>"Password1.");
	$conn = sqlsrv_connect( $serverName, $connectionInfo);
	$phpName = $_POST["Nombre_Pais"];

	echo $phpName;
 ?>