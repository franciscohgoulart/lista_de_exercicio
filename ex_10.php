<?php
function calcularMedia($notas) {
    $soma = array_sum($notas);
    $quantidade = count($notas);
    $media = $soma / $quantidade;
    return $media;
}


?>