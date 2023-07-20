<?php
    /*Debemos realizar un script que indique cual es el mayor de 4 números, es decir,
     nos pasan cuatro numeros enteros y debemos mostrar un mensaje con el mayor de los cuatro.
     Las variables con los cuatro numeros serán $a, $b, $c y $d.*/
        $a = readline("Ingrese dato : \n");
        $b = readline("Ingrese dato : \n");
        $c = readline("Ingrese dato : \n");
        $d = readline("Ingrese dato : \n");

        if ($a > $b && $a > $c && $a > $d ) {
            echo " el valor de $a es el mayor de todos \n";
                }
        if ($b > $a && $b > $c && $b > $d ) {
            echo " el valor de $b es el mayor de todos \n";
        }
        if ($c > $a && $c > $b && $c > $d ) {
            echo " el valor de $c es el mayor de todos \n";
        }
        if ($d > $a && $d > $b && $d > $c ) {
            echo " el valor de $d es el mayor de todos \n";
        }

