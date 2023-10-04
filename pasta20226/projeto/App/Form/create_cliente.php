<?php

//app/form/create_cliente.php

if(count($_POST) > 0) {

    //require_once '../../vendor/autoload.php';

    require_once '..\Model\conexao.php';
    require_once '..\Model\cliente.php';
    require_once '..\Model\clienteDao.php';

    
    $erro = false;
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];


    if(empty($nome)) {
        $erro = "Preencha o nome do cliente";
    } else if(empty($sobrenome)) {
        $erro = "Preencha o sobrenome do cliente";
    } else if(empty($cpf)) {
        $erro = "Preencha o cpf do cliente";
    } else if(empty($celular)) {
        $erro = "Preencha o celular do cliente";
    } else if(empty($email)) {
        $erro = "Preencha o email do cliente";
    }


    if($erro) {
        echo '<script>alert("'.$erro.'")</script>';
    } else {
        $cliente = new \App\Model\cliente();
        $cliente->setNome($nome);
        $cliente->setSobrenome($sobrenome);
        $cliente->setCpf($cpf);
        $cliente->setCelular($celular);
        $cliente->setEmail($email);


        $clienteDao = new \App\Model\clienteDao();
        $clienteDao->create($cliente);
        unset($_POST); //limpa o histório do POST
        echo '<script>alert("Cliente salvo com sucesso!!")</script>';
       
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
    <title>Cadastrar Cliente</title>
</head>
<body>
    <div class="container">
        <div class="display-3">Cadastro de Cliente</div>
        <form method="POST" action="">
        <p class="lead">
            <label>Nome:</label>
            <input name="nome" type="text" size="50">
        </p>
        <p class="lead">
            <label>Sobrenome:</label>
            <input name="sobrenome" type="text" size="50">
        </p>
        <p class="lead">
            <label>CPF:</label>
            <input name="cpf" type="text" size="50">
        </p>
        <p class="lead">
            <label>Celular:</label>
            <input name="celular" type="text" size="50">
        </p>
        <p class="lead">
            <label>Email:</label>
            <input name="email" type="email" size="50">
        </p>
        
        <p>
            <button type="submit" class="btn btn-light" title="Gravar">Salvar Cliente</button>
            <a href="read_cliente.php"><button type="button" class="btn btn-light" title="cliente">Voltar para a tabela</button></a>

        </p>
        </form>
    </div>

</body>
</html>