 <?php
$serverName = "172.29.185.108"; //serverName\instanceName

$connectionInfo = array( "Database"=>"Sistema_Cine", "UID"=>"sa", "PWD"=>"Password1.");
$conn = sqlsrv_connect( $serverName, $connectionInfo);


if ($conn){
    
   echo'<select  name="pais" onchange="showCity(this.value)">';
    echo'<option value="">Seleccione un país:</option>';
    if(($result = sqlsrv_query($conn,"SELECT Id_Pais,Nombre_Pais FROM Pais")) !== false){
        
   
        while( $obj = sqlsrv_fetch_object( $result )) {
            
            echo '<option value="'.$obj->Id_Pais.'" data-pais="'.$obj->Id_Pais.'">'.$obj->Nombre_Pais.'</option>';
        }
    }

    echo'</select>';
}else{
    die(print_r(sqlsrv_errors(), true));
	
}
sqlsrv_close( $conn );
?>