 <?php
 
$q = intval($_GET['q']);

$serverName = "172.29.185.108"; //serverName\instanceName

$connectionInfo = array( "Database"=>"Sistema_Cine", "UID"=>"sa", "PWD"=>"Password1.");
$conn = sqlsrv_connect( $serverName, $connectionInfo);


if ($conn){
    
    echo'<select name="ciudad" onchange="showCine(this.value)">';
    if(($result = sqlsrv_query($conn,"SELECT Id_Ciudad,Nombre_Ciudad FROM Ciudad where Id_Pais ='".$q."'" )) !== false){
        
             echo '<option value="" data-cine="">Elige una Ciudad</option>';       
        while( $obj = sqlsrv_fetch_object( $result )) {
            
            echo '<option value="'.$obj->Id_Ciudad.'" data-ciudad="'.$obj->Nombre_Ciudad.'">'.$obj->Nombre_Ciudad.'</option>';   
        }
    }

    echo'</select>';
}else{
    die(print_r(sqlsrv_errors(), true));
	
}
sqlsrv_close( $conn );
?>