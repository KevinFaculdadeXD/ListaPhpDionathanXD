// Exercicio 1

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

// Exercicio 2

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

// Exercicio 3

$numero1 = 10;
$numero2 = 5;
$operacao = "multiplicar"; // somar, subtrair, multiplicar, dividir

switch ($operacao) {
    case "somar":
        echo "Resultado: " . ($numero1 + $numero2) . "\n";
        break;
    case "subtrair":
        echo "Resultado: " . ($numero1 - $numero2) . "\n";
        break;
    case "multiplicar":
        echo "Resultado: " . ($numero1 * $numero2) . "\n";
        break;
    case "dividir":
        if ($numero2 != 0) {
            echo "Resultado: " . ($numero1 / $numero2) . "\n";
        } else {
            echo "Erro: Divisão por zero!\n";
        }
        break;
    default:
        echo "Operação inválida!\n";
}
?>

