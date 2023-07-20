<?php
  #  $productos = ["arroz", "gaseosa", "papa", "huevo", "pollo"];
#
  #  forEach($productos as $product0){
  #      echo $product0."\n" ;
  #  }
  #  function TestNumberOne ($number){
#
  #  }
#

function sumaDeDosNumeros ($number1,$number2){
    $suma = $number1 + $number2;
    echo $suma. "\n";
}
$uno = readline("Ingrese Numero :\n");
$dos = readline("Ingrese Numero :\n");
$resultado = sumaDeDosNumeros($uno,$dos);


function sumaDeDosNumeros1 (){
    $a = readline("Ingrese un numero :\n");
    $b = readline("Ingrese un numero :\n");
    $suma = $a + $b;
    echo $suma. "\n";
}
$resultado = sumaDeDosNumeros1();