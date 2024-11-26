<?php
//Questão: Escreva uma função que receba uma string como argumento e retorne a string invertida.
function inverterNome($str){
    return strrev($str);
}

echo inverterNome("Olá,meu nome é matheus");