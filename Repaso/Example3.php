<?php
/*Escribí un programa que solicite al usuario dos números y los almacene en dos variables.
   En otra variable,
  almacená el resultado de la suma de esos dos números y luego mostrá ese resultado en pantalla.

 A continuación, el programa debe solicitar al usuario que ingrese un tercer número, el cual se debe almacenar
 en una nueva variable. Por último, mostrá en pantalla el resultado de la multiplicación de este nuevo número
 por el resultado de la suma anterior*/

    $a = readline("Escriba su primera variable : \n");
    $b = readline("Escriba su segunda variable : \n");
    if ($a == void){
        echo "";
    }

    $s = $a + $b;
    print "El resultado es : $s \n";

    $c = readline("Escriba su tercer variable : \n");

    $sm = $s * $c;
    print "El resultado del producto del tercer digito y su tercera variable es : $sm \n";








