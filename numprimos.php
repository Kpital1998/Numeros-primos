<?php 
//arreglo
$num= array(13,17,19,23);
//Foreach para atravesar el arreglo
foreach ($num as $ValPrimo) {
    //Se crea una condicion que limpie el arreglo para deducir los primeros numeros primos
    if ($ValPrimo!=2 && $ValPrimo!=3 && $ValPrimo!=5 && $ValPrimo!=7) {
        //Se crea segunda condicion para dar a conocer los numeros primos 
        if ($ValPrimo%2==0 || $ValPrimo%3==0 || $ValPrimo%5==0 || $ValPrimo%7==0) {
            echo $ValPrimo." no es un numero primo"."</br>";
        }else {
            echo $ValPrimo." es un numero primo"."</br>";
        }
    }else {
        echo $ValPrimo." es un numero primo"."</br>";
    }
}




?>