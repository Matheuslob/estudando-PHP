
<?php
//Questão: Crie uma função que conte o número de palavras em uma string.

function contarPalavras($arr){
    return str_word_count($arr);
}

echo contarPalavras("Oi,eu sou o goku! ");
echo "<br>";
//Questão: Escreva uma função que substitua todas as ocorrências de uma substring dentro de uma string por outra substring.

$str = "O meu céu está azul";
$busca = "azul";
$substituir = "vermelho";
//str_replace substitui da esquerda para a diretia
function susbstituirSubstring($str, $busca , $substituir){
    return str_replace($busca, $substituir, $str);
}

echo susbstituirSubstring($str,$busca, $substituir);