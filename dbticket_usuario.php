<?php
$serverName = "172.29.185.108"; //serverName\instanceName
$connectionInfo = array( "Database"=>"Sistema_Cine", "UID"=>"sa", "PWD"=>"Password1.");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$Query = "SELECT t.Id_Ticket, t.Id_Sala, p.id_Pelicula, t.Precio, t.Numero_tarjeta,t.Fecha, p.Nombre_Pelicula FROM Ticket  t JOIN Pelicula p ON p.Id_Pelicula = t.Id_Pelicula";
if ($conn)
{
	if (($result = sqlsrv_query($conn, $Query)) !== false) 
	{
		while ($obj = sqlsrv_fetch_object( $result )) {
			echo '<form>';
				echo'<tr>';
            	echo '<td><input style="border: none" name="name"type="text" readonly value="'.$obj->Id_Ticket.'" ></td>';
            	echo '<td><input style="border: none" name="name"type="text" readonly value="'.$obj->Id_Sala.'" ></td>';
					echo '<td><input style="border: none" name="name"type="text" readonly value="'.$obj->Nombre_Pelicula.'" ></td>';
					echo '<td><input style="border: none" name="name"type="text" readonly value="'.$obj->Precio.'" ></td>';
					echo '<td><input style="border: none" name="name"type="text" readonly value="'.$obj->Numero_tarjeta.'" ></td>';
            echo '<td><input style="border: none" name="name"type="text" readonly value="'.$obj->Fecha.'" ></td>';
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