<?php
class Conta
{
    public $numero;
    public $saldo;

    function __construct($numero, $saldo)
    {
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    function creditar($credito)
    {
        $this->saldo = $this->saldo + $credito;;
    }



    function debitar($credito)
    {
        $this->saldo = $this->saldo - $credito;
    }

    function transferir($outraConta, $valor)
    {
        if ($this->saldo > $valor) {
            $this->debitar($valor);
            $outraConta->creditar($valor);
        }
    }




}

class Poupanca extends Conta
{

    public $juros;

    function __construct($numero, $saldo, $juros)
    {
        parent::__construct($numero, $saldo);
        $this->juros = $juros;

    }

    function atualizaJuros()
    {

    $this->saldo = $this->saldo * (1+ $this->juros) ;
    }




}

$conta = new Conta( 1, 150);
$conta -> creditar(50);
$conta -> debitar(50);
echo "Saldo da conta {$conta->numero} é igual a: {$conta->saldo}";

$poupanca = new Poupanca(2, 150, 0.10);
$poupanca -> creditar(50);
$poupanca -> creditar(100);
$poupanca-> atualizaJuros();

echo "Saldo da conta {$poupanca->numero} é igual a: {$poupanca->saldo}";





