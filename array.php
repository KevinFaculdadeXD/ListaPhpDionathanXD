// Exercicio 8

<?php
$BrasilianSkies = [
    "BELEZA PURA",
    "BRASILIAN SKIES",
    "NIGHTS",
    "I REMEMBER CLIFFORD",
    "STAR WARS SAMBA",
    "DISCO B",
    "FUNKY HOLO HOLO BIRD",
    "伊豆甘夏納豆売り"
];

foreach ($AlbumManeiroQueEscutavaEnquantoFaziaEssaAtividade as $BrasilianSkies){
    echo $frasesSuperFodas . "\n";
}

echo"\n----------------";
echo "\n";
// Exercicio 9

$racasPapagaioSuperFodas = [
    "Papagaio-verdadeiro",
    "Papagaio-do-mangue",
    "Papagaio-de-bochecha-azul "
];

$racasPapagaioSuperFodas[] = "Papagaio-moleiro";

print_r($racasPapagaioSuperFodas);

echo"\n----------------";
echo "\n";

// Exercicio 10

$pessoaSuperManeira = [
    "Nome" => "Gabriel",
    "Idade" => 24,
    "Cidade" => "Rolandia",
    "Tchola" => "Talvez"
];

foreach ($pessoa as $chave => $valor) {
    echo "$chave: $valor\n";
}
?>