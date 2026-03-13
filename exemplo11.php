<?php
class AreaCalc
{
    public static $pi = 3.141517;
    static function areaCircunferência ($raio)
    {
        return $raio ** 2 * (AreaCalc::$pi);
    }
}

$raioAtual = 10;
$circunferenciaAtual = AreaCalc::areaCircunferência($raioAtual);

echo "$circunferenciaAtual";