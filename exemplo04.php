<?php


class Funcionario
{
    public $nome;
    public $salario;
    public $previdencia;
    public $desconto;
    function __construct($nome, $salario, $previdencia)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->previdencia = $previdencia;
        $this->desconto = $this-> calcularDescontos();
    }

    function calcularDescontos(){
        return number_format($this->salario * 0.275 + $this->previdencia, 2, ",", ".");
    }
}

$joao = new Funcionario('Joao Filho', 1000, 100);

$maria = new Funcionario('Maria Rute', 2000, 200);

$jose = new Funcionario('Jose Salgado', 3000, 300);

echo "O valor do INSS do $joao->nome é igual a $joao->desconto. <br>";
echo "O valor do INSS do $maria->nome é igual a $maria->desconto. <br>";
echo "O valor do INSS do $jose->nome é igual a $jose->desconto. <br>";


