<?php

//Print: sencillo, solo cadenas de texto
print 'Hola de nuevo';

//echo: Robusto, varias cadenas de texto
echo ' Hola x2',' Por 3 ';

//Variables

//Para variables de tipo string se usan comillas dobles o sencillas 
//Todo caracter dentro de comillas corresponde a una cadana
//Se declara con el prefijo $
$nombre = 'Camilo';
echo $nombre;
$numero = 7;
echo $numero;
//Las comillas simples, se usan solo para cadenas de texto 
echo 'el numero $numero';
//Para concatenar la cadena en comillas sencillas se usa el  punto (.) 
echo 'el número'.$numero;
//Las comillas dobles, pueden contener variables
echo "el número $numero";

//Constantes
$Constane1='Nombre';
echo $Constane1;
$Constane1='Apellido';
echo $Constane1;
//Toma el último valor de la variables
//El valor no puede cambiar
//Palabra reservada define ('Nombre de la variable','Valor de la variable')
//Sin el prefijo $
define('variable1','nombre completo');
echo variable1;
//no se le puede asignar otro valor a la variable que se define con la palabra reservada define();


?>