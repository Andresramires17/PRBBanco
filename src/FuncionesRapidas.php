<?php
     $amigos = array('Carlos<br>','Camilo<br>','Sonia<br>','Pedro<br>','Pablo<br>','Jasinto<br>' );
     $dias = array('Lunes<br>','Martes<br>','Miercoles<br>','Jueves<br>','Viernes<br>');
     //array_chunk divide un vector, crea un arreglo dentro del arreglo, se divide en grupos segun el valor del segundo parametro


     $funcion = array_chunk($amigos,3);

     print_r($funcion);
     echo '<br>';
     echo '<br>';
     //array_slice elimina la cantidad de elementos neceasrios 
     $funcion2 = array_slice($amigos,3);
     print_r($funcion2);
     echo '<br>';
     echo '<br>';
    //array_merge une arreglos, crea un nuevo array combinado

    $funcion3 = array_merge($amigos,$dias);
    print_r ($funcion3);
    echo '<br>';
    echo '<br>';
    //Array_pop, último elemento

    array_pop($amigos);

    print_r($amigos);

    echo '<br>';
    echo '<br>';

    //Para buscar
    //la variable de arreglo que guarda dos arreglos en uno con la función array_marge
    //tambien es condiderada como un arreglo para la busqueda de función array_search

    $funcion4 = array_search('Miercoles<br>',$funcion3); // dato, array
    print_r($funcion4);

    //invertir arreglo 
    $funcion_revez = array_reverse($amigos);
    print_r($funcion_revez);

    
?>