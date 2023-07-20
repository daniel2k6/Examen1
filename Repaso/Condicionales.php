<?php
    $a = readline('Ingrese numero A:');
    $b = readline('Ingrese numero B:');

    if ($a < $b)
    {
        echo "A es menor que B \n";
    }
    else
    {
        echo "A es mayor que B \n";
    }
    //if ($a = $b) {
      //  echo "A es igual que B \n";
//}

$colores = readline("ingresa color : ");
switch($colores)
{
    case "rojo":
        echo "el color es rojo \n";
        break;
    case "azul":
        echo "el color es azul \n";
        break;
    default:
        echo "no existe color \n";
}