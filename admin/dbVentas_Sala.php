<?php
$serverName = "172.29.185.108"; //serverName\instanceName
$connectionInfo = array( "Database"=>"Sistema_Cine", "UID"=>"sa", "PWD"=>"Password1.");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$Query = "SELECT Id_Sala, SUM(Precio)AS Precio FROM Ticket GROUP BY Id_Sala";



if ($conn)
{
	if (($result = sqlsrv_query($conn, $Query)) !== false) 
	{
		while ($obj = sqlsrv_fetch_object( $result )) {
			echo '<form>';
				echo'<tr>';
				 echo '<td><input style="border: none" name="name"type="text" readonly value="'.$obj->Id_Sala.'" ></td>';	
            echo '<td><input style="border: none" name="name"type="text" readonly value="'.$obj->Precio.'" ></td>';
           
               
				echo '</tr>';
			echo '</form>';
		}
	}
}
else
{
	die(print_r(sqlsrv_errors(), true));
}
sqlsrv_close($conn);
?>