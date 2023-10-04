<?php

//app/form/update_produto.php

    //require_once '../../vendor/autoload.php';

    require_once '..\Model\conexao.php';
    require_once '..\Model\produto.php';
    require_once '..\Model\produtoDao.php';
   
    $id = intval($_GET['id']);
    $produto = new \App\Model\produto();
    $produtoDao = new \App\Model\produtoDao();
   
 
    if(count($_POST) > 0) {

        $erro = false;
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
    
        if(empty($nome)) {
            $erro = "Preencha o nome do produto";
        } else if(empty($descricao)) {
            $erro = "Preencha a descrição do produto";
        }

        if($erro) {
            echo "<p><b>ERRO: $erro</b></p>";
        } else {

            $produto = new \App\Model\produto();
            $produto->setId($id);
            $produto->setNome($nome);
            $produto->setDescricao($descricao);
            
            $produtoDao = new \App\Model\produtoDao();
            $produtoDao->update($produto);

            echo "<p><b>Produto atualizado com sucesso!!!</b></p>";
            unset($_POST);
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
    <title>Editar Produto</title>
</head>
<body>
    <div class="container">
    <a href="read_produto.php">Voltar para a lista</a>
    <form method="POST" action="">
    <?php
       foreach ($produtoDao->readUpdate($id) as $produto): ?>
        <p>
            <label>Nome:</label>
            <input value="<?php echo $produto['nome']; ?>" name="nome" type="text">
        </p>
        <p>
            <label>Descrição:</label>
            <input value="<?php echo $produto['descricao']; ?>" name="descricao" type="text">
        </p>
    <?php
        endforeach;
    ?>
        <button type="submit" class="btn btn-light" title="Gravar atualização">Salvar Produto</button>
        </p>
    </form>
    </div>
</body>
</html>