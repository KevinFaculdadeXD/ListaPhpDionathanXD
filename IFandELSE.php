<?php
// 1. Crie uma variável $idade e mostre se é maior ou menor de idade
$idadeManeira = 18;

if ($idadeManeira >= 18) {
    echo"você pode jogar roblox :)";
} else {
    echo "você não pode jogar roblox :(";
}
echo"\n----------------";
echo "\n";

/*2. Crie uma variável $dinheiro.

Exiba:
Pobre
Classe Média
Riquinho
Ricão
Elon Musk */

$dinheiro = 500000000.00;

if ($dinheiro < 300) {
    echo "Pobre de m\n";
} elseif ($dinheiro < 1000) {
    echo "Classe Média\n";
} elseif ($dinheiro < 10000) {
    echo "Riquinho\n";
} elseif ($dinheiro < 100000) {
    echo "Podre de rico(Ou Ricão)\n";
} else {
    echo "Elon Musk\n";
}

echo"\n----------------";
echo "\n";


?>

