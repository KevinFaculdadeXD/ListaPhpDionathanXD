// Exercicio 4

<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i %2== 0) {
        echo $i ."";
    }
}
echo"\n----------------";
echo "\n";

// Exercicio 5

$numerosManeiros = [4, 7, 12879.5];

foreach ($numerosManeiros as $num) {
    echo "---Tabuada do $num---\n";
        for ($i = 1; $i <= 10; $i++) {
            $resultadoDaora = $num * $i;
            echo "$num x $i = " . number_format($resultadoDaora,2, ',','.') ."\n";
        }
        echo"\n----------------";
echo "\n";
}
?>