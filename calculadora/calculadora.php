<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtendo os valores do formulário
    $n1 = isset($_POST['numero1']) ? $_POST['numero1'] : 0;
    $n2 = isset($_POST['numero2']) ? $_POST['numero2'] : 0;
    $operacao = isset($_POST['operacao']) ? $_POST['operacao'] : '';

    // Validando se os valores são números
    if (!is_numeric($n1) || !is_numeric($n2)) {
        echo "Por favor, insira valores numéricos válidos.";
        exit();
    }

   

    // Realizando a operação com base na seleção
    switch ($operacao) {
        case 'soma':
            echo "A soma é: " . $n1 + $n2;
            break;
        case 'subtracao':
            echo "A subtração é: " . ($n1 - $n2);
            break;
        case 'multiplicacao':
            echo "A multiplicação é: " . ($n1 * $n2);
            break;
        case 'divisao':
            if ($n2 != 0) {
                echo "A divisão é: " . ($n1 / $n2);
            } else {
                echo "Não é possível dividir por zero.";
            }
            break;
        default:
            echo "Operação não selecionada.";
            break;
    }
} else {
    echo "Método de requisição inválido.";
}
?>
