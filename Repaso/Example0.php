<?php
/* $n = readline("ingrese dato : \n"); {
 if ($n <= 20) {
     echo " la suma pertenece al numero 20 \n";
 }else {
     echo " la suma no pertenece al numero 20 \n";
 }
     for($i=0 ; $i <= 10; $i++ ){
         $s = $i + $n;
     echo " : la suma es  \n" .$s;
     }
}*/

 /*La tienda online tienda.srcodigofuente.es nos ha pedido una mejora para su web. Necesita un tratamiento de
 la información de la cesta de los clientes que cumpla los siguientes requisitos:

 Si la compra del cliente es inferior a 19 euros podrán requerir 2 cosas:
 si los productos son de mascotas se mostrará un mensaje         : "No se puede realizar el envío".
 si los productos son de ropa se le mostrará el siguiente mensaje: "Los gastos de envío son 9 euros"*/

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*Si la compra tiene un importe entre 19 y 40 euros se le indicará el mensaje: "Los gastos de envío son 9 euros".
Si la compra supera los 40 euros deberemos indicar un mensaje de que los portes de envío son gratis.
Si la compra supera los 200 euros deberemos mostrar un mensaje con un código de descuento: CODIGODESC33.
Para este problema disponemos de los siguientes datos:

El importe total de la cesta de la compra viene en una variable $total_compra con un número decimal positivo. Ejemplo: 33.55.*/

 $presupuesto = readline("Ingrese su presupuesto : \n");

    if ($presupuesto < 19 ) {
    $productos = readline("Ingrese su producto a comprar : \n ");
        switch ($productos) {
            case "mascotas":
                echo "No se puede realizar el envío \n";
            break;

            case "ropa":
                echo "Los gastos de envío son 9 euros \n";
            break;

            default :
                echo "no hay inconveninete en su comprar \n";
        }
    }
    if ( $presupuesto >= 19 && $presupuesto < 40) {
        echo "Loa gastos de envio son 9 euros \n";
    }
    if ( $presupuesto >= 40) {
        echo "El envio es gratis \n";
    }
    if ($presupuesto >= 200){
        echo "Recibistes un código de descuento: CODIGODESC33 \n";
    }




