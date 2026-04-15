<?php

class Visibilidade
{

    public $varPublic;
    protected $varProtected;
    private $varPrivate;

    public function __construct($varPublic, $varProtected, $varPrivate)
    {
        $this->varPublic = $varPublic;
        $this->varProtected = $varProtected;
        $this->varPrivate = $varPrivate;
    }
    public function publicFunc(){
        echo "Metodo público";
    }
    protected function protectedFunc(){
        echo "Metodo protegido";
    }
    private function privateFunc(){
        echo "Metodo privado";
    }
}

$test = new Visibilidade('oi', 'ola', 'hi');

// echo "atributo public $test->varPublic";
// echo "atributo public $test->varProtected";
// echo "atributo public $test->varPrivate";
$test -> publicFunc();
$test -> protectedFunc();
$test -> privateFunc();