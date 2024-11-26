<?php

//Escreva uma função que receba um array de números e o ordene em ordem crescente.

$arr = [1,7,3,2,0];

function OrdemNumerica($arr){
  sort($arr);
  foreach($arr as $ordem){
    echo $ordem;
  }
}
OrdemNumerica($arr);