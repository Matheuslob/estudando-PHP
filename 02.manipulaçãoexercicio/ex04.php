<?php
//exercicio : crie uma function denomidana ordenar numeros,coloque um array númerico no parametro e ordene em ordem crescente.

$arr = [5, 1 , 0 ,3 ,4 ,2 ];

function ordenarNumeros($arr){
    sort($arr );
    foreach($arr as $ordem){
        echo $ordem;
    }
}
echo ordenarNumeros($arr);