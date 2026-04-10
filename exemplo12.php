<?php
class Conta
{
    public $numero;
    public $saldo;

    function __construct($numero, $saldo)
    {
        $this->$numero = $numero;
        $this->$saldo = $saldo;
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

    public $juros = 0.05;

    function atualizaJuros()
    {

    $this->saldo = $this->saldo * (1+ $this->juros) ;
    }




}

$conta = new Conta( 1, 150);
$conta -> creditar(50);
$conta -> debitar(50);
echo "Saldo da conta $conta->numero é igual a: $conta->saldo";




