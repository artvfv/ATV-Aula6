<?php

$valor_original = 100;
$possui_desconto = true;
$valor_final = 0;

echo $valor_original >= 150 || $possui_desconto ? "Valor final com DESCONTO: R$ " . ($valor_final = $valor_original * 0.9) : "Valor final: R$ " . $valor_original;

?>