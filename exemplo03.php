<?php


function calcularDescontos($salario, $previdencia) {
    return number_format($salario*0.275 + $previdencia, 2, "," , ".");
}

$funcionarios = array(3);
$funcionarios [0] = array('joao filho', 1000, 100);
$funcionarios [1] = array('Maria Rute', 2000, 200);
$funcionarios [2] = array('Jose salgado', 3000, 300);


for($i=0; $i < 3; $i++){
    $nome = $funcionarios[$i][0];
    $desconto = calcularDescontos($funcionarios[$i][1], $funcionarios[$i][2]);
    echo "o funcionario $nome recebera $desconto de desconto. <br>";



}