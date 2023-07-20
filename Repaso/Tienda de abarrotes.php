<?php

$n = readline("Ingrese su presupuesto \n");

$arroz = 4;
$papa  = 3;
$huevo = 6;
$pollo = 10;

print "//// Bienvenido a la tienda de abarrotes Don pedrito //// \n";
print "  1.  1 kg arroz    => S/4\n";
print "  2.  1 kg papa     => S/3\n";
print "  3.  1 kg de huevo => S/6\n";
print "  4.  1 kg de pollo => S/10\n";

$opciones   = readline(" Elija el producto que desea comprar : \n");
$cantidades = readline("Cuantos kilos desea comprar ? :\n");

switch ($opciones){
    case "arroz":
        $pagar    = $arroz * $cantidades;
        $vuelto   = $n - $pagar;
        $faltante = $pagar - $n;
        if ($n >$pagar ) {
            echo "su vuelo seria de S/$vuelto gracias por su compra\n";
        }
        if ($n < $pagar) {
            echo "no cuenta con suficiente dinero le falta S/$faltante para poder comprar 1 kg de arroz\n";
        }
        if ($n == $pagar) {
            echo "Ha comprado 1 kg de arroz gracias por su compra\n";
        }
        break;

    case "papa":
        $pagar    = $papa * $cantidades;
        $vuelto   = $n - $pagar;
        $faltante = $pagar - $n;
        if ($n > $pagar ) {
            echo "su vuelo seria de S/$vuelto gracias por su compra\n";
        }
        if ($n < $pagar) {
            echo "no cuenta con suficiente dinero le falta S/$faltante para poder comprar 1 kg de papa\n";
        }
        if ($n == $pagar) {
            echo "Ha comprado 1 kg de papa gracias por su compra\n";
        }
        break;

    case "huevo":
        $pagar    = $huevo * $cantidades;
        $vuelto   = $n - $pagar;
        $faltante = $pagar - $n;
        if ($n > $pagar ) {
            echo "su vuelo seria de S/$vuelto gracias por su compra\n";
        }
        if ($n < $pagar) {
            echo "no cuenta con suficiente dinero le falta S/$faltante para poder comprar 1 kg de huevo\n";
        }
        if ($n == $pagar) {
            echo "Ha comprado 1 kg de huevo gracias por su compra\n";
        }
        break;

    case "pollo":
        $pagar    = $pollo * $cantidades;
        $vuelto   = $n - $pagar;
        $faltante = $pagar - $n;
        if ($n > $pagar ) {
            echo "su vuelo seria de S/$vuelto gracias por su compra\n";
        }
        if ($n < $pagar) {
            echo "no cuenta con suficiente dinero le falta S/$faltante para poder comprar 1 kg de pollo\n";
        }
        if ($n == $pagar) {
            echo "Ha comprado 1 kg de pollo gracias por su compra\n";
        }
        break;
}

