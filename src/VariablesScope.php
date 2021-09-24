<?php
     //vaiablesScope

    function estudiante(){
        $edad = 25;
        echo $edad;
    }

    estudiante();
    echo '<br>';
    echo '<br>';
    //majera variables externas en una funcuion con la palabra reservada global
    global $años;
    function edad(){
        //priosiza el valor que está dentro de la function si tiene la palabra reservada global
        $años= 27;
        echo $años;
    }
    edad();

?>