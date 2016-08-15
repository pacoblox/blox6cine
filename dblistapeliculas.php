 <?php
$serverName = "172.29.185.108"; //serverName\instanceName

$connectionInfo = array( "Database"=>"Sistema_Cine", "UID"=>"sa", "PWD"=>"Password1.");
$conn = sqlsrv_connect( $serverName, $connectionInfo);


if ($conn){
    
    if(($result = sqlsrv_query($conn,"SELECT * FROM Pelicula")) !== false){
        
       echo' <table>';
        echo'     <tr>';
        echo'     <th>Imagen</th>';
         echo'    <th>Pelicula</th>';
         echo'    <th>Duracion</th>';
         echo'    <th>Categoria</th>';
        echo'     <th>Descripcion</th>';
         echo'    <th>Censura</th>';
          echo'    <th>Precio</th>';
          echo'    <th>Cantidad</th>';

          echo'   </tr>';
        while( $obj = sqlsrv_fetch_object( $result )) {
            
            
			
			 echo '<tr>';
            
            
             echo '<td><img src="moviesimg/'.$obj->Imagen.'.jpg" height="60" width="60" ></td>';
			 echo '<td><input style="border: none" name="name"type="text" readonly value="'.$obj->Nombre_Pelicula.'" ></td>';
			 echo '<td><input size="8" style="border: none" name="name"type="text" readonly value="'.$obj->Duracion.'" ></td>';			 
			 echo '<td><input size="8" style="border: none" name="name"type="text" readonly value="'.$obj->Categoria.'" ></td>';
             echo '<td><input size="30" style="border: none" name="name"type="text" readonly value="'.$obj->Descripcion.'" ></td>';
             echo '<td><input size="8" style="border: none" name="name"type="text" readonly value="'.$obj->Tipo_Censura.'" ></td>';
            echo '<td><input size="8" style="border: none" name="name"type="text" readonly data-precio="'.$obj->Precio.'" value="$'.$obj->Precio.'" ></td>';

             echo ' <td><select>
                    <option value="0" data-cantidad="0">0</option>
                    <option value="1" data-cantidad="1">1</option>
                    <option value="2" data-cantidad="2">2</option>
                    <option value="3" data-cantidad="3">3</option>
                    <option value="4" data-cantidad="4">4</option>
                    <option value="5" data-cantidad="5">5</option>
                    <option value="6" data-cantidad="6">6</option>
                    <option value="7" data-cantidad="7">7</option>
                    <option value="8" data-cantidad="8">8</option>
                    <option value="9" data-cantidad="9">9</option>
                    <option value="10" data-cantidad="10">10</option
                    </select></td>';
			

			 
			 echo '<td><label><button class="btn btn-default elegir" type=submit>Elegir<i class="glyphicon glyphicon-ok" style="color:  #2ECC71">
			 </button></i></label></td>';
			 echo '</tr>';
            echo '<div >';
            echo '<tr class="panel">';
            echo '<td>1</td>';
            echo '<td>2</td>';
            echo '<td>3</td>';
            echo '<td>4</td>';
            echo '<td>5</td>';
            echo '<td>6</td>';
            echo '<td>7</td>';
            echo '</tr>';
            echo '</div>';
			
           
        }
    }
    echo '</table>';
}else{
    die(print_r(sqlsrv_errors(), true));
	
}
sqlsrv_close( $conn );
?>