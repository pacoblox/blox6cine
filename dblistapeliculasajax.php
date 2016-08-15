 <?php
 
$q = intval($_GET['q']);

$serverName = "172.29.185.108"; //serverName\instanceName

$connectionInfo = array( "Database"=>"Sistema_Cine", "UID"=>"sa", "PWD"=>"Password1.");
$conn = sqlsrv_connect( $serverName, $connectionInfo);


if ($conn){
    
    echo'<select  onchange="showTandas(this.value)">';
    if(($result = sqlsrv_query($conn,"SELECT Id_UbiCine,Ubicacion_Nombre FROM Ubicacion_Cine where Id_Ciudad ='".$q."'" )) !== false){
        
   
        while( $obj = sqlsrv_fetch_object( $result )) {
            
            echo '<option value="'.$obj->Id_Pelicula.'" data-cine="'.$obj->Nombre_Pelicula.'">'.$obj->Nombre_Pelicula.'</option>';   
        }
    }

    echo'</select>';
}else{
    die(print_r(sqlsrv_errors(), true));
	
}
sqlsrv_close( $conn );
?>