<?php

require_once 'App\Model\conexao.php';
require_once 'App\Model\cliente.php';
require_once 'App\Model\clienteDao.php';


$cliente = new \App\Model\cliente();
$clienteDao = new \App\Model\clienteDao();

// incluir produto 
$cliente->setNome("juliana");
$cliente->setSobrenome("paula");
$cliente->setCpf("123.456.789-11");
$cliente->setCelular("(21)1234-9876");
$cliente->setEmail("juliana@gmail.com");

$clienteDao->create($cliente);

//----------------------------

// apagar cliente
// informar no parametro abaixo o matricula a ser apagado
//$clienteDao->delete(47);


// consultar cliente
$clienteDao->read();

foreach ($clienteDao->read() as $cliente):
    echo $cliente["matricula"]. ' - ' .$cliente['nome']. " " .$cliente["sobrenome"]. "<br>" .$cliente["cpf"]. "<br>" .$cliente["celular"]. "<br>" .$cliente["email"]."<hr>";
endforeach;



?>