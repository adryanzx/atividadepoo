<?php

require "carro.php";

//INSTACIANDO OBJETO CARRO 1
$carro1 = new Carro("Classic", "Cinza" , "CPF-7521", 4);

$carro1->ligar();
$carro1->acelerar();
$carro1->frear();
$carro1->acionarSeta("esquerda");

$carro1->set_cor ("Amarela");
$carro1->get_cor();

?>