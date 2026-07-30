//Exercicio 6
<?php
function saudacao($nomeDaora) {
    echo"Olá $nomeDaora!\n";
}

saudacao("Carlos Johnson");

echo"\n----------------";
echo "\n";
//Exercicio 7

function calcularEFrase($num1, $num2){
    $soma = $num1 + $num2;
    $subtracao = $num1 - $num2;
    $fraseXD = "A Soma tem muita aura uff (emoji de fogo)";

    return [
        'soma' => $soma,
        'subtracao' => $subtracao,
        'fraseXD' => $fraseXD
    ];
}

$resultado = calcularEFrase(60, 7);
echo "Soma: " . $resultado['soma'] . "\n";
echo "Subtração: " . $resultado['subtracao'] . "\n";
echo "Frase: " . $resultado['fraseXD'] . "\n";
?>