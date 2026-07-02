<?php
function mascararCpf($cpf, $quantidade) {
    $mascara = str_repeat('*', $quantidade);
    return substr_replace($cpf, $mascara, -$quantidade);
}

$cpf = "123.456.789-00";
echo "CPF: " . $cpf . "<br>";
echo substr_replace("123.456.789-00", '***.***', 0, -5) . "<br>";
?>
