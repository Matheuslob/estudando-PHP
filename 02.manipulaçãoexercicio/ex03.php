<?php
//somando todos os elementos de um array
$arr = [2,4,3,7];

function somaElementos($arr){
   $soma = array_sum($arr);
   echo $soma;
     
    
}
somaElementos($arr);