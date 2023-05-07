<?php

require "produto.php";

$produto1 = new Produto ("carro", "sedan", "veiculo" , 22000);

$produto1->fala();
$produto1->atualizarvalor(10);