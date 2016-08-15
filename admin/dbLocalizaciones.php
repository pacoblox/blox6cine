<?php
$serverName = "172.29.185.108"; //serverName\instanceName
$connectionInfo = array( "Database"=>"Sistema_Cine", "UID"=>"sa", "PWD"=>"Password1.");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$Query = "SELECT * FROM Pais P JOIN Ciudad C ON P.Id_Pais = C.Id_Pais";
if ($conn)
{
	if (($result = sqlsrv_query($conn, $Query)) !== false) 
	{
		while ($obj = sqlsrv_fetch_object( $result )) {
			echo '<form>';
				echo'<tr>';
					echo '<td><input style="border: none" name="name"type="text" readonly value="'.$obj->Nombre_Pais.'" ></td>';
					echo '<td><input style="border: none" name="name"type="text" readonly value="'.$obj->Nombre_Ciudad.'" ></td>';
					echo '<td><input style="border: none" name="name"type="text" readonly value="'.$obj->Zona_horaria.'" ></td>';
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