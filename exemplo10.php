<?php


Class Conta
{

    public $numero;
    public $saldo;


    function __construct($numero, $saldo)
    {
    $this->numero = $numero;
    
    $this->saldo = $saldo;
    }


    function creditar($valor)
    {
        $this->saldo = $this->saldo + $valor;
    }

    function debitar($valor){
        $this->saldo = $this->saldo - $valor;

    }

    function transferir ($outraConta, $valor){
        if($this->saldo >= $valor) {
            $this -> debitar($valor);
            $outraConta -> creditar($valor);
        }

    }
}

$contaRoberta = new Conta(1, 2000);
$contaDaniel = new Conta(2,300);

echo "Saldo da conta $contaRoberta->numero é $contaRoberta->saldo{<br>";
echo "Saldo da conta $contaRoberta->numero é $contaRoberta->saldo<br>";

$contaDaniel -> transferir($contaRoberta, 100);

echo "Saldo da conta {$contaDaniel -> saldo}"


?>