<?php
//exercicio crie a function encontrarPares com o array númerico em parametros e retorne apenas números pares

$num = [1,2,4,7,10];

function encontrarPares($num){
    $x = count($num);
    for($i = 0;$i < $x; $i++){
        if($num[$i]%2 == 0){
            echo "Número $num[$i] é par <br>";
        }
    }
}
encontrarPares($num);