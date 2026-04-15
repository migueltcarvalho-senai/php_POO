<?php
class Conta
{
    private $numero;
    private $saldo;

        // metodos construtores
    function __construct($numero, $saldo)
    {
        $this->numero = $numero;
        $this->saldo = $saldo;
    }
        // metodos getters and setters

        public function getNumero(){
            return $this->numero;
        }
        public function getSaldo(){
            return $this->saldo;
        }
        protected function setSaldo($novoSaldo){
            $this->saldo = $novoSaldo;

        }
        // metodos
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

    protected $juros;

    function __construct($numero, $saldo, $juros)
    {
        parent::__construct($numero, $saldo);
        $this->juros = $juros;

    }
    function creditar($valor)
    {
        parent::creditar($valor);
        $this->atualizaJuros();

    }

    function atualizaJuros()
    {
    $novoSaldo = $this->getSaldo() * (1+ $this->juros);
    $this -> setSaldo($novoSaldo);
    }




}

$conta = new Conta( 1, 150);
$conta -> creditar(50);
$conta -> debitar(100);
echo "Saldo da conta {$conta->getNumero()} é igual a: {$conta->getSaldo()} <br>";

$poupanca = new Poupanca(2, 150, 0.10);
$poupanca -> creditar(50);
$poupanca -> debitar(100);
$poupanca-> atualizaJuros();

echo "Saldo da conta {$poupanca->getNumero()} é igual a: {$poupanca->getSaldo()}";





