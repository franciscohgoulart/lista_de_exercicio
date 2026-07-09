<?php
function calcularMedia($notas) {
   
    if (empty($notas)) {
        return "Erro: nenhum nota informada.";
    }

    $maiorNota = max($notas);
    $menorNota = min($notas);
    $media = array_sum($notas) / count($notas);

    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    return [
        "maior_nota" => $maiorNota,
        "menor_nota" => $menorNota,
        "media"      => round($media, 2),
        "situacao"   => $situacao
    ];
}


$notasAluno = [7.5, 8.0, 6.5, 9.0];
$resultado = calcularMedia($notasAluno);

echo "Maior nota: " . $resultado["maior_nota"] . "\n";
echo "Menor nota: " . $resultado["menor_nota"] . "\n";
echo "Média: " . $resultado["media"] . "\n";
echo "Situação: " . $resultado["situacao"] . "\n";
?>