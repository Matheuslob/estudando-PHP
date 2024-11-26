<?php

//crie uma function com o nome maiorElemento  e um array númerico no parametro e chame o maior elemento

$arr = [2,5,10,14];

function maiorElemento($arr){
        $maior = $arr[0];
        foreach($arr as $elemento){
            if( $elemento > $maior){
                $maior = $elemento;
            }
        }   
        return $maior;
}
echo maiorElemento($arr);




