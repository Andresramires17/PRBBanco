<?php
     $v1 = 10;
     $v2 = 5;

     function  suma(){
         $GLOBALS['res'] = $GLOBALS['v1']+$GLOBALS['v2'];
     }

     suma();
     echo $res;
    echo '<br>';
     //$_SERVER direccion del archivo en el que está ejecutado el código 

     echo $_SERVER['PHP_SELF'];
     echo '<br>';
     echo $_SERVER['SERVER_NAME'];
     echo '<br>';
    // echo $_SERVER['HTTP_REFERER']; da la ruta 

?>