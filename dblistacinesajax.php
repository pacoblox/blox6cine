 <?php
 
$q = intval($_GET['q']);

$serverName = "172.29.185.108"; //serverName\instanceName

$connectionInfo = array( "Database"=>"Sistema_Cine", "UID"=>"sa", "PWD"=>"Password1.");
$conn = sqlsrv_connect( $serverName, $connectionInfo);


if ($conn){
    
    echo'<select name="cine" onchange="showTandas(this.value)">';
    if(($result = sqlsrv_query($conn,"SELECT Id_UbiCine,Ubicacion_Nombre FROM Ubicacion_Cine where Id_Ciudad ='".$q."'" )) !== false){
        
            echo '<option value="" data-cine="">Elige un Cine</option>';
        while( $obj = sqlsrv_fetch_object( $result )) {
            
            echo '<option value="'.$obj->Id_UbiCine.'" data-cine="'.$obj->Ubicacion_Nombre.'">'.$obj->Ubicacion_Nombre.'</option>';   
        }
    }

    echo'</select>';
}else{
    die(print_r(sqlsrv_errors(), true));
	
}
sqlsrv_close( $conn );
?>