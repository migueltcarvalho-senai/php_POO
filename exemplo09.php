<?php


Class Filme
{

    public $nome;
    public $saldo;


    function __construct($nome, $saldo)
    {
    $this->nome = $nome;
    
    $this->saldo = $saldo;
    }


    function incrementarSaldo($valor)
    {
        $this->saldo = $this->saldo + $valor;
    }
}

$filme = new Filme("joao", 1000);
$filme -> incrementarSaldo(100);

echo"{$filme -> saldo}"




?>