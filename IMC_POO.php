<?php

class Pessoa 
{
    public string $nome;
    public float $peso;
    public float $altura;
    public float $imc;

    function __construct($nome, $peso, $altura)
    {
        $this->nome = $nome;
        $this->peso = $peso;   
        $this->altura = $altura /100 ;   
        $this->imc = $this->calcularIMC();
    }

    function calcularIMC()
    {
       return ($this->peso) / ($this->altura * $this->altura);
    }

    function mostrar(){
        echo "o IMC do(a) {$this -> nome} é igual a {$this->imc} <br>";
    }

}

$joao = new Pessoa("João Silva",100 , 200);

echo $joao -> mostrar();

$maria = new Pessoa("Maria Ruth",100 , 200);

echo $maria -> mostrar()



?>