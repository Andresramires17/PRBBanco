<?php
     // array, arreglo, vector, contiene una lista de elementos
     //espacio de memoria, dividido en segmentos de 0 a la cantidad necesaria


    //estructura básica de un arreglo

    //$dias = array([7]);

    $dias = array('Lunes<br>','Martes<br>','Miercoles<br>','Jueves<br>','Viernes');

    //var_dump identifica el tipo de dato variables y el número de caracteres 
    //Contará el número de caracteres total dentro de las comillas
    var_dump($dias);
    echo '<br>';
    echo '<br>';
    print_r($dias);
    //print_r imprime el valor del array y la pocisión
    echo '<br>';
    echo '<br>';
    echo '<br>';
    //Array asociativo
    echo 'Array asociativo';
    echo '<br>';

    $estudiante = array('Nombre' => 'Camilo<br>','Apellido' => 'Ramírez<br>','Edad' => '24<br>' );
    echo '<br>';
    echo 'var_dump';
    echo '<br>';
    var_dump($estudiante);
    echo '<br>';
    echo '<br>';
    echo 'print_r';
    echo '<br>';
    print_r($estudiante);
    echo '<br>';
    echo "mi nombre es: ".$estudiante['Nombre'];
    echo '<br>';

    $estudiante2 = array('Nombre<br>','Camilo<br>','Apellido<br>','Ramírez<br>','Edad<br>','24<br>' );
    echo '<br>';
    echo 'var_dump';
    echo '<br>';
    var_dump($estudiante2);
    echo '<br>';
    echo '<br>';
    echo 'print_r';
    echo '<br>';
    print_r($estudiante2);
    echo '<br>';
    echo $estudiante2[3];
    

    
?>