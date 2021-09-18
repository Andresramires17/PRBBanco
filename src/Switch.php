<?php

$curso = 'ALGEBRA';

     switch ($curso) {
        case 'SGBD':
             echo "Los Miercoles";
             break;
        case 'ALGEBRA':
             echo "Los Martes";
             break;
        case 'Mat Discretas':
                echo "Los lunes";
                break;     
         default:
             # para cuadnono se cumple ninguna condición 
             echo "no existe $curso";
             break;
     }
?>