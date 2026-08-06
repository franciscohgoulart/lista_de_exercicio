<?php

function analisarProdutos($produtos, $pesquisa){

    $maisCaro = $produtos[0];
    $maisBarato = $produtos[0];
    $soma = 0;
    $encontrado = false;

    foreach($produtos as $produto){

        $soma += $produto[1];

        if($produto[1] > $maisCaro[1]){
            $maisCaro = $produto;
        }

        if($produto[1] < $maisBarato[1]){
            $maisBarato = $produto;
        }

        if($produto[0] == $pesquisa){
            $encontrado = true;
        }
    }

    $media = $soma / count($produtos);

    return "Produto mais caro: " . $maisCaro[0] . " - R$ " . $maisCaro[1] . "<br>" .
           "Produto mais barato: " . $maisBarato[0] . " - R$ " . $maisBarato[1] . "<br>" .
           "Média dos preços: R$ " . $media . "<br>" .
           "Pesquisa: " . ($encontrado ? "Produto encontrado!" : "Produto não encontrado.");
}

$produtos = [
    ["Arroz", 25],
    ["Feijão", 10],
    ["Macarrão", 8],
    ["Batata", 12]
];


$pesquisa = "Batata";


echo analisarProdutos($produtos, $pesquisa);



