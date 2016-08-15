 <?php
$serverName = "172.29.185.108"; //serverName\instanceName

$connectionInfo = array( "Database"=>"Sistema_Cine", "UID"=>"sa", "PWD"=>"Password1.");
$conn = sqlsrv_connect( $serverName, $connectionInfo);


if ($conn){
    
    echo'<select required>';
    if(($result = sqlsrv_query($conn,"SELECT Nombre_Ciudad FROM Ciudad")) !== false){
        
   
        while( $obj = sqlsrv_fetch_object( $result )) {
            
            echo '<option value="'.$obj->Nombre_Ciudad.'" data-ciuda="'.$obj->Nombre_Ciudad.'">'.$obj->Nombre_Ciudad.'</option>';   
        }
    }

    echo'</select>';
}else{
    die(print_r(sqlsrv_errors(), true));
	
}
sqlsrv_close( $conn );
?>