<?php
function ordenarNomes($nomes) {
    $Listanomes = explode(", ", $nomes);
   for($i = 0; $i < count($Listanomes); $i++){
        $Listanomes[$i] = trim($Listanomes[$i]);
    }
    
    sort($Listanomes);
    return implode(", ", $Listanomes);
}
echo "Nomes originais: Maria, João, Ana, Pedro, Lucas<br>";
echo "Nomes ordenados: " . ordenarNomes("Maria, João, Ana, Pedro, Lucas") . "<br>";


?>

