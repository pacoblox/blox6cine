<?php
$serverName = "172.29.185.108"; //serverName\instanceName
$connectionInfo = array( "Database"=>"Sistema_Cine", "UID"=>"sa", "PWD"=>"Password1.");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$Query = "SELECT Fecha, SUM(Vendido_VIP)AS Vendido_VIP, SUM(Vendido_Normal)AS Vendido_Normal FROM Tandas GROUP BY Fecha";



if ($conn)
{
	if (($result = sqlsrv_query($conn, $Query)) !== false) 
	{
		while ($obj = sqlsrv_fetch_object( $result )) {
			echo '<form>';
				echo'<tr>';
				 echo '<td><input style="border: none" name="name"type="text" readonly value="'.$obj->Fecha.'" ></td>';	
            echo '<td><input style="border: none" name="name"type="text" readonly value="'.$obj->Vendido_Normal.'" ></td>';
                 echo '<td><input style="border: none" name="name"type="text" readonly value="'.$obj->Vendido_VIP.'" ></td>';
           
               
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