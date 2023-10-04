<?php

//app/form/read_cliente.php


    //require_once '../../vendor/autoload.php';

    require_once '..\Model\conexao.php';
    require_once '..\Model\cliente.php';
    require_once '..\Model\clienteDao.php';

    $cliente = new \App\Model\cliente();
    $clienteDao = new \App\Model\clienteDao();
    $clienteDao->read();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
    <title>Consultar Cliente</title>
</head>
<body>
 <div class="container-fluid">
    <div class="row h6 bg-secondary">
        <div class="col-1">Matricula</div>
        <div class="col-1">Nome</div>
        <div class="col-1">Sobrenome</div>
        <div class="col-2">CPF</div>
        <div class="col-2">Celular</div>
        <div class="col-2">Email</div>
        <div class="col-1">Ações</div>
    </div>
    <?php
        foreach ($clienteDao->read() as $cliente):
            echo ('<div class="row">
                    <div class="col-1">'.$cliente["matricula"].'</div>
                    <div class="col-1">'.$cliente["nome"].'</div>
                    <div class="col-1">'.$cliente["sobrenome"].'</div>
                    <div class="col-2">'.$cliente["cpf"].'</div>
                    <div class="col-2">'.$cliente["celular"].'</div>
                    <div class="col-2">'.$cliente["email"].'</div>

                    <div class="col">
                        <a href="update_cliente.php?matricula='.$cliente["matricula"].'"><button type="button" class="btn btn-light" title="Editar cliente">Editar</button></a>
                        <a href="delete_cliente.php?matricula='.$cliente["matricula"].'"><button type="button" class="btn btn-light" title="Excluir cliente">Excluir</button></a>
                    </div>
                   </div>'
                );          
        endforeach;
    ?>
 </div>                
</body>
</html>