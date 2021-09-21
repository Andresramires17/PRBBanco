<?php
     //while , do while, for + cilo especial
     //while:mientras

     $vala = 1;
     $valb = 2;
     while ($vala <= 10) {
         # mientras que $vala sea menor o igual a 10, imprime $vala
        echo $vala;
        $vala = $vala + 2;
        //$vala = $vala++;

     }
//do while: haga, hasta que
     do {
         
          echo $valb = $valb +2;

     } while ($valb <= 20);

//For:      
     for ($vala=0; $vala < 10; $vala++) { 
          echo $vala;
     }

?>