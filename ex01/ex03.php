<?php
//Questão: Crie uma função que converta todos os caracteres de uma string para maiúsculas.
$altl = "tudo maiusculo";
function alterandoTamanho($altl){
    return strtoupper($altl);
}

echo alterandoTamanho($altl);