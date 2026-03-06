<?php



function calcularDescontos($salario, $previdencia) {
    return number_format($salario*0.275 + $previdencia, 2, "," , ".");
}

$joaoNome = "João Filho";
$joaoDescontos = calcularDescontos(1000, 100);

$mariaNome = "Maria Rute";
$mariaDescontos = calcularDescontos(2000, 200);

$joseNome = "Jose Salgado";
$joseDescontos = calcularDescontos(3000, 300);

echo "O valor do INSS do $joaoNome é igual a $joaoDescontos. <br>";
echo "O valor do INSS do $mariaNome é igual a $mariaDescontos. <br>";
echo "O valor do INSS do $joseNome é igual a $joseDescontos. <br>";






?>