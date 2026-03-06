<?php
$joaoSalario = 1000;
$joaoPrevidência = 100;
$joaoNome = 'João Filho';
$joaoDescontos = number_format($joaoSalario*0.275 + $joaoPrevidência, 2, ",", ".");

echo "O Valor do desconto de $joaoNome é $joaoDescontos <br>";

$mariaSalario = 2000;
$mariaPrevidência = 200;
$mariaNome = 'Maria Rute';
$mariaDescontos = number_format($mariaSalario*0.275 + $mariaPrevidência, 2, ",", ".");

echo "O Valor do desconto de $mariaNome é $mariaDescontos. <br>";

$joseSalario = 3000;
$josePrevidência = 300;
$joseNome = 'Jose Salgado';
$joseDescontos = number_format($joseSalario*0.275 + $josePrevidência, 2, ",", ".");

echo "O Valor do desconto de $joseNome é $joseDescontos. <br>";














?>