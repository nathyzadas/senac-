<?php

//app/form/read_produto.php


    //require_once '../../vendor/autoload.php';

    require_once '..\Model\conexao.php';
    require_once '..\Model\produto.php';
    require_once '..\Model\produtoDao.php';

    $produto = new \App\Model\produto();
    $produtoDao = new \App\Model\produtoDao();
    $produtoDao->read();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
    <title>Consultar Produto</title>
</head>
<body>
 <div class="container">
    <div class="row h6 bg-secondary">
        <div class="col-1">ID</div>
        <div class="col-3">Nome</div>
        <div class="col-3">Descrição</div>
        <div class="col">Ações</div>
    </div>
    <?php
        foreach ($produtoDao->read() as $produto):
            echo ('<div class="row ">
                    <div class="col-3 col-sm-3 col-lg-3">'.$produto["id"].'</div>
                    <div class="col-3 col-sm-3 col-lg-3">'.$produto["nome"].'</div>
                    <div class="col-3 col-sm-3 col-lg-3">'.$produto["descricao"].'</div>
                    <div class="col">
                        <a href="update_produto.php?id='.$produto["id"].'"><button type="button" class="btn btn-light" title="Editar Produto">Editar</button></a>
                        <a href="delete_produto.php?id='.$produto["id"].'"><button type="button" class="btn btn-light" title="Excluir Produto">Excluir</button></a>
                    </div>
                   </div>'
                );          
        endforeach;
    ?>
 </div>                
</body>
</html>

<!--div class="col"><a href="editar_produtos.php?id="'.$produto["id"].'">Editar</a></div-->