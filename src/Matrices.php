<?php
     $matriz = array(
         array('Nombre','Apellido','Edad'),
         array('luci','Rojas','8'),
         array('Lorena','Ramirez','20')
     );

     //primero fila y después columna
     echo $matriz[2][1];
     echo '<br>';
     print_r($matriz);
     echo '<br>';
     echo '<br>';
     // ciclo foreach: por cada
     $estudiante = array('Nombre: ' => 'Camilo<br>','Apellido: ' => 'Ramírez<br>','Edad: ' => '24<br>' );

     foreach ($estudiante as $dato => $valor) {
         
        echo $dato.$valor;
        echo '<br>';
        echo $dato.'<br>'.$valor;
     }
?>