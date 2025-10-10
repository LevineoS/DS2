<?php

$preco = 150.00;
$imposto = 0.10;

//O valor final é o preço mais 10% de imposto

$valorFinal = $preco + ($preco + $imposto);
echo'O valor final com imposto é: R$ ' . $valorFinal;

?>