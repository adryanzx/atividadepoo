<?php

class Produto {

    private $nome;
    private $marca;
    private $descricao;
    private $valor;

    function __construct($nome,$marca,$descricao,$valor){

    $this->nome = $nome;
    $this->marca = $marca;
    $this->descricao = $descricao;
    $this->valor = $valor;

    }

    function set_nome($nome){
        $this->nome = $nome;
    }
    function get_nome($nome){
       return ($this->nome = $nome);
    }
    function set_marca($marca){
        $this->marca = $marca;
    }
    function get_marca($marca){
       return ($this->marca = $marca);
    }
    function set_descricao($descricao){
        $this->descricao = $descricao;
    }
    function get_descricao($descricao){
       return ($this->descricao = $descricao);
    }
    function set_valor($valor){
        $this->valor = $valor;
    }
    function get_valor($valor){
       return ($this->valor = $valor);
    }

    function fala(){
        echo "O " . $this->nome . " é muito BOM...";
    }
    function atualizarvalor($taxinha){
        echo " Este " . $this->nome . " está por " . ($this->valor/$taxinha) + $this->valor . "R$";
      
    }


}






?>