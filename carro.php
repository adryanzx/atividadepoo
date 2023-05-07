<?php


class Carro{


    //ATRIBUTOS
    
    private $modelo;
    private $cor;
    private $placa;
    private $numeroPortas;

  
    //CONSTRUTORES

    function __construct($modelo,$cor,$placa,$numeroPortas){

        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->placa = $placa;
        $this->numeroPortas =  $numeroPortas;
    }

    //get e st

    function set_modelo($modelo){
        $this->modelo = $modelo;
    }

    function get_modelo(){
        return ($this->modelo);
    }
    function set_cor($cor){
        $this->modelo = $cor;
    }

    function get_cor(){
        return ($this->cor);
    }
    function set_placa($placa){
        $this->placa = $placa;
    }

    function get_placa(){
        return ($this->placa);
    }
    function set_numeroPortas($numeroPortas){
        $this->numeroPortas = $numeroPortas;
    }

    function get_numeroPortas(){
        return ($this->numeroPortas);
    }
    
    
    //metodos
 
    function ligar(){

        echo"O carro " . $this->modelo . " está ligado!";
    }

    
    function acelerar(){

        echo"O carro " . $this->modelo . " está acelerando...";
    }

    
    function frear(){

        echo"O carro " . $this->modelo . " está parando....";
    }

    
    function acionarSeta($orientacao){
        if($orientacao == "esquerda") {
         echo"O carro " . $this->modelo . " acionou seta esquerda!";

        }
        else if($orientacao == "direita"){

            echo"O carro " . $this->modelo . " acionou seta direita!";
        }
        else{
            echo"O carro " . $this->modelo . "é prudentino";
        }
    
    
    }
}







?>