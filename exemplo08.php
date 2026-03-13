<?php
class Calculadora{
    public $valor;


    function __construct($valor)
    {
        $this->valor = $valor;
    }
    function somar($operador1, $operador2){
    $this->valor = $operador1 + $operador2;
    }
}

// endereço de referencia $calc

$calc = new Calculadora(0);

echo "valor = $calc->valor <br>";

$calc ->somar(1, 2);

echo "valor = $calc->valor <br>"

?>