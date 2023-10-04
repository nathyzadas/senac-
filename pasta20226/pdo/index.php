<?php

require_once 'vendor/autoload.php';

$produto = new \App\Model\produto();
$produto->setNome('Teclado Logitech');
$produto->setDescricao('sem fio, bluetooth, 3 dispositivos');


$produtoDao = new \App\Model\produtoDao();
$produtoDao->create($produto);



// instanciar a classe
$produtoDao = new \App\Model\produtoDao();
// carregar o método
$produtoDao->read();
// ler o return do método read, separando os registros por linha
foreach ($produtoDao->read() as $produto):
    echo $produto['nome']. "<br>" .$produto["descricao"]."<hr>";
endforeach;


/*
require_once 'vendor/autoload.php';


$produto = new \App\Model\produto();
// Estamos alterando o produto de id igual a 1
$produto->setId(3);
$produto->setNome('Cadeira Sensacional');
$produto->setDescricao('cadeira doida vendida baratinho');


$produtoDao = new \App\Model\produtoDao();
$produtoDao->update($produto);


$produtoDao->read();


foreach ($produtoDao->read() as $produto):
    echo $produto['nome']. "<br>" .$produto["descricao"]."<hr>";
endforeach;

*/
?>
