<?php

// Classe responsavel por fazer operações básicas;
class Matematica
{


    /*Soma dois números;
    
    @param float || int $a Primeiro Número;
    @param float || int $b Segundo Número;
    @return float || int Resultado da soma;
    
    */
    

    public function soma($a, $b)
    {
        return $a + $b;
    }

    /*Multiplica dois números;
    
    @param float || int $a Primeiro Número;
    @param float || int $b Segundo Número;
    @return float || int Resultado da Multiplicação;
    
    */

    public function multiplicacao($a, $b)
    {
        return $a * $b;
    }
}

//Um exemplo de uso:
//$operacoes = new Matematica();
//echo $operacoes->soma(50, 10);

?>