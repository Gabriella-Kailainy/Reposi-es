<?php

class Celular{
    private $marca;
    public $modelo;
    public $cor;

    public function Ligar(){
        return "Telefone ligado";
    }

    public function tirarFoto(){
        return "Foto tirada";
    }

    public function chamadaTelefonica(){
        return "Chamada efetuada";
    }

    public function setMarca($marcaRecebida){
        $this->marca = $marcaRecebida;
    }

    public function getMarca(){
        return $this->marca;
    }
}

$celular = new Celular();
//echo $celular->tirarFoto();

$celular-> setMarca("Motorola");
$celular-> modelo = "Moto G";
$celular-> cor = "Preto";

echo $celular-> getMarca();


?>