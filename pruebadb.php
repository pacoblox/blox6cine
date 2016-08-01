<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP BOOK MANAGER</title>
	<link href='https://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/custom.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="js/phpbooker.js"></script>
	<script src="js/blox.js"></script>

</head>
<body>
	
	<?php
$serverName = "localhost"; //serverName\instanceName
$connectionInfo = array( "Database"=>"Sistema_Cine", "UID"=>"sa", "PWD"=>"Password1.");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>


</body>
</html>