<?php

require_once 'App\Model\conexao.php';
require_once 'App\Model\produto.php';
require_once 'App\Model\produtoDao.php';


$produto = new \App\Model\produto();
$produtoDao = new \App\Model\produtoDao();

// incluir produto 
$produto->setNome("Cadeira suspensa");
$produto->setDescricao("rotaçao 360 ou 760 graus");
//$produtoDao->create($produto);
//----------------------------

// apagar produto
// informar no parametro abaixo o id a ser apagado
//$produtoDao->delete(47);


// consultar produto
$produtoDao->read();

foreach ($produtoDao->read() as $produto):
    echo $produto["id"]. ' - ' .$produto['nome']. "<br>" .$produto["descricao"]."<hr>";
endforeach;



?>
