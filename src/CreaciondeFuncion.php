<?php
     //palabra reservada function
    //la funcion puede tener uno o más parametros

     function estudiante($nombre){

        echo "el nombre es: $nombre<br>";
     }

     estudiante('Camilo');
     estudiante('Andres');
     estudiante('Ramirez');
     echo '<br>';   
     echo '<br>';
     function estudiante2(
         $nombre1  = 'Lorena',
         $Apellido = 'Rojas',
         $Edad = 20
    )
    {

        echo "el nombre es: $nombre1<br> el apellido es: $Apellido<br> la edad es:  $Edad";
    }
        estudiante2('angie','ramirez',21);
        echo '<br>';   
        echo '<br>';
    function suma($a,$b){

        $r= $a+$b;
        echo $r;
    }

    suma(5,6);
    echo '<br>';   
    echo '<br>';
    function suma2($d,$c){

        return $d+$c;
       
    }

     $res = suma(5,2);
     echo $res;

?>