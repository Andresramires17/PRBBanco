<?php
     $cursos = array('sgbd<br>','mát<br>','inglés<br>','prog<br>');
     //var_dump ($cursos = [1]);
     //Reemplazar, o agregar una posición y datos de una posición
     echo '<br>';
     print_r($cursos);
     echo '<br>';
     $cursos[4] = 'PHP<br>';
     echo '<br>';
     echo $cursos[2];
     echo '<br>';
     print_r($cursos);
     echo '<br>';
     echo '<br>';
     //contar los elementos de un arreglo
     echo count($cursos);
     echo '<br>';
     echo '<br>';

     //Otra forma de definir un arreglo o un vector
     $semana[0]='lunes<br>';
     $semana[1]='martes<br>';
     $semana[2]='miercoles<br>';
     $semana[3]='jueves<br>';
     $semana[4]='viernes<br>';
     $semana[5]='sabado<br>';
     $semana[6]='domingo<br>';

    echo 'cantidad de elementos: '.count($semana);
    echo '<br>';
    echo '<br>';
     // se puede imprimir con un for, o trabajar con un ciclo for
    print_r($semana);
    echo '<br>';
    echo '<br>';
     for ($i=0; $i < count($semana) ; $i++) { 
         
        echo $semana[$i];
     }
     
?>