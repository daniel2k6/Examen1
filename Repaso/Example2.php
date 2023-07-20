<?php
/*La tienda online tienda.srcodigofuente.es quiere realizar una mejora en el código de su web. Necesita que la web,
según el importe de la cesta, muestre un mensaje u otro al usuario. En concreto quiere que:

Si la compra es inferior a 30 euros se le muestre un mensaje en negrita diciendo: 'Compra más o te cobraremos
los abusivos 30 euros de gastos de envío'.
Si la compra es superior a 30 euros pero inferior a 90 deberemos mostrar un número indicando cuanto le falta para llegar
 a 90 euros y tener gastos de envío gratuitos. Ejemplo: '¡¡¡Con solo 33.50€ más podrás tener gastos de envío gratis!!!'
Si la compra alcanza los 90€ indicaremos un mensaje en negrita: 'Gastos de envío incluidos'.
Para este problema disponemos de los siguientes datos:

El importe total de la cesta de la compra viene en una variable $total_compra con un número decimal positivo. Ejemplo: 33.55.*/

    $presupuesto = readline("Ingrese su presupuesto : \n");
    if ($presupuesto < 30){
        echo "Compra más o te cobraremos 
              los abusivos 30 euros de gastos de envío \n";
    }
    if ($presupuesto >=30 && $presupuesto < 90){
        $residuo = 90 - $presupuesto;
        echo "¡¡¡Con solo $residuo más podrás tener gastos de envío gratis!!! \n";
    }
    if ($presupuesto >= 90){
        echo "Gastos de envío incluidos \n";
    }



