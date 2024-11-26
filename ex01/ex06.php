<?php
//Questão: Crie uma função que receba um array e remova todos os valores duplicados, retornando o array resultante.

$num = [1,2,3,3,4,5,5,6];

function removaElementos($num){
    return array_values(array_unique($num));

}
print_r(removaElementos($num)); 
echo "<br>";
//Questão: Escreva uma função que receba um array e um valor, e verifique se o valor existe no array.

$arr = [2,4,5,6];

function buscandoElemento($arr){
    return in_array(6, $arr);
}

echo buscandoElemento($arr);

