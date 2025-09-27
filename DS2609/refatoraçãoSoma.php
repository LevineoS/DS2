<?php

// Função para somar dois valores
function somarItens($valor1, $valor2) {

    return $valor1 + $valor2;

}

// Na página do carrinho de compras

$item1 = 45;
$item2 = 25;
$totalCarrinho = somarItens($item1, $item2);
echo " Seu total é: " . $totalCarrinho . "<br>";

//Na página de checkout

$item3 = 45;
$item4 = 25;
$totalCheckout = somarItens($item3, $item4);
echo" O total no checkout é: " . $totalCheckout;