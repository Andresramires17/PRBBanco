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
         
        //echo $semana[$i];
        if ($semana[$i] == 'sabado<br>'&&'domingo<br>') {
           
         echo 'es fin de semana';
        }
     }
     echo '<br>';
     echo '<br>';
     $amigos = array('Carlos<br>','Camilo<br>','Sonia<br>','Pedro<br>','Pablo<br>','Jasinto<br>' );
     //Encontrar o mostrar la posición de un elementos
     $amigos[3] = 'Jose<br>';
     $posición = count($amigos)-3;
     echo '<br>';
     echo '<br>';

     echo 'la posición es : '.$amigos[$posición];
     echo '<br>';
     echo '<br>';

     //asort orden alfábetico desendente en un arreglo
     //rsort orden alfábetico asendente en un arreglo
     //arsort mantiene el indice de los elementos en el arreglo orden alfábetico asendente
     arsort($amigos);
     

     print_r($amigos);
     
?>