 <?php
 
$q = intval($_GET['q']);

$serverName = "172.29.185.108"; //serverName\instanceName

$connectionInfo = array( "Database"=>"Sistema_Cine", "UID"=>"sa", "PWD"=>"Password1.");
$conn = sqlsrv_connect( $serverName, $connectionInfo);


if ($conn){
    
    echo'<select name="tanda" onchange="showTipos(this.value)">';
    if(($result = sqlsrv_query($conn,"SELECT p.Nombre_Pelicula,CAST(t.horario AS char(8)) AS hora,t.Fecha,t.Id_Tandas FROM Tandas t INNER JOIN Pelicula p ON t.Id_pelicula=p.Id_pelicula where t.Id_Ubicine ='".$q."'" )) !== false){
        
        echo '<option value="" data-tanda="">Elige una Tanda</option>'; 
        while( $obj = sqlsrv_fetch_object( $result )) {
            
    echo '<option value="'.$obj->Id_Tandas.'" data-tanda="'.$obj->Id_Tandas.'">'.$obj->Nombre_Pelicula.'-'.$obj->hora.'-'.$obj->Fecha.'</option>';   
        }
    }

    echo'</select>';
}else{
    die(print_r(sqlsrv_errors(), true));
	
}
sqlsrv_close( $conn );
?>
