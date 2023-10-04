<?php

//app/form/create_produto.php

if(count($_POST) > 0) {

    //require_once '../../vendor/autoload.php';

    require_once '..\Model\conexao.php';
    require_once '..\Model\produto.php';
    require_once '..\Model\produtoDao.php';

    
    $erro = false;
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    
    if(empty($nome)) {
        $erro = "Preencha o nome do produto";
    } else if(empty($descricao)) {
        $erro = "Preencha a descrição do produto";
    }

    if($erro) {
        echo '<script>alert("'.$erro.'")</script>';
    } else {
        $produto = new \App\Model\produto();
        $produto->setNome($nome);
        $produto->setDescricao($descricao);
        $produtoDao = new \App\Model\produtoDao();
        $produtoDao->create($produto);
        unset($_POST); //limpa o histório do POST
        echo '<script>alert("Produto salvo com sucesso!!")</script>';
       
    } 
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
    <title>Cadastrar Produto</title>
</head>
<body>
    <div class="container">
        <div class="display-3">Cadastro de Produto</div>
        <form method="POST" action="">
        <p class="lead">
            <label>Nome:</label>
            <input name="nome" type="text" size="50">
        </p>
        <p class="lead">
            <label>Descrição:</label>
            <input name="descricao" type="text" size="50">
        </p>
        
        <p>
            <button type="submit" class="btn btn-light" title="Gravar">Salvar Produto</button>
            <a href="read_produto.php"><button type="button" class="btn btn-light" title="Produtos">Voltar para a lista</button></a>

        </p>
        </form>
    </div>
</body>
</html>