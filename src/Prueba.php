<?php

//Print: sencillo, solo cadenas de texto
print 'Hola de nuevo';
echo '<br>';

//echo: Robusto, varias cadenas de texto
echo ' Hola x2',' Por 3 ';
echo '<br>';

//Variables
echo 'Variables';
echo '<br>';
//Para variables de tipo string se usan comillas dobles o sencillas 
//Todo caracter dentro de comillas corresponde a una cadana
//Se declara con el prefijo $
$nombre = 'Camilo';
echo '<br>';
echo $nombre;
$numero = 7;
echo '<br>';
echo $numero;
//Las comillas simples, se usan solo para cadenas de texto 
echo 'el numero $numero';
echo '<br>';
//Para concatenar la cadena en comillas sencillas se usa el  punto (.) 
echo 'el número'.$numero;
echo '<br>';
//Las comillas dobles, pueden contener variables
echo "el número $numero";
echo '<br>';
//Constantes
echo 'Constantes';
echo '<br>';
$Constane1='Nombre';
echo '<br>';
echo $Constane1;
echo '<br>';
$Constane1='Apellido';
echo '<br>';
echo $Constane1;
//Toma el último valor de la variables
//El valor no puede cambiar
//Palabra reservada define ('Nombre de la variable','Valor de la variable')
//Sin el prefijo $
define('variable2','nombre completo');
echo '<br>';
echo variable2;
//no se le puede asignar otro valor a la variable que se define con la palabra reservada define();


?>