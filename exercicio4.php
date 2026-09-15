<?php

$valor_original = 100;
$possui_desconto = false;

$percentual = ($valor_original >= 150 || $possui_desconto) ? 10 : 0;
$valor_desconto = $valor_original * ($percentual / 100);
$valor_final = $valor_original - $valor_desconto;

echo "Valor original: R$ " . $valor_original . "\n";
echo "Percentual de desconto: " . $percentual . "%\n";
echo "Valor final: R$ " . $valor_final . "\n";

?>