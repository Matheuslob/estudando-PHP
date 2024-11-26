<?php

$soma = [1, 2, 3, 4];

function somandoElementos($soma){
    return array_sum($soma);
}

echo somandoElementos($soma);