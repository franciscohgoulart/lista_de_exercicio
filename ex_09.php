<?php
function analisarNumero($numero) {
    $parOuImpar = ($numero % 2 == 0) ? "par" : "ímpar";

    $ehPrimo = true;
    if ($numero <= 1) {
        $ehPrimo = false;
    } else {
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i === 0) {
                $ehPrimo = false;
                break;
            }
        }
    }
    $primoOuNao = $ehPrimo ? "Primo" : "Não Primo";

    $somaDivisores = 0;
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $somaDivisores += $i;
        }
    }
    $perfeitoTexto = ($somaDivisores == $numero && $numero > 0) ? "perfeito" : "não perfeito";

    return "O número $numero é $parOuImpar, $primoOuNao e $perfeitoTexto.";
}

echo analisarNumero(6);
?>