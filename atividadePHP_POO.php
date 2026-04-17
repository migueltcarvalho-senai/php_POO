<?php
class Carro
{
    // 🚩 RISCO: Atributo público permite valores ilegais
    private $modelo;
    private $velocidade;

    public function __construct($modelo, $velocidade)
    {
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }
    public function getVelocidade()
    {
        return $this->velocidade;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function SetVelocidade($novaVelocidade)
    {
        if ($novaVelocidade >= 0 && $novaVelocidade < 201) {
            $this->velocidade = $novaVelocidade;
        } else {
            $this->velocidade = 'ERRO: VELOCIDADE IMPRÓPRIA';
        }
    }
}

// --- TESTE DO VEÍCULO ---
$meuCarro = new Carro("Senai-Mobile", 0);

// O desastre: alteração direta sem validação
$meuCarro->SetVelocidade(190); // Carro andando no tempo?



echo "Modelo: " . $meuCarro->getModelo() . "<br>";
if ($meuCarro->getVelocidade() == "ERRO: VELOCIDADE IMPRÓPRIA") {
    echo'' . $meuCarro->getVelocidade();
} else {
   echo "Velocidade atual: " . $meuCarro->getVelocidade() . " km/h";
};
