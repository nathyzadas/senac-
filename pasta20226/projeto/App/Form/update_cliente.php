<?php

//app/form/update_cliente.php

    //require_once '../../vendor/autoload.php';

    require_once '..\Model\conexao.php';
    require_once '..\Model\cliente.php';
    require_once '..\Model\clienteDao.php';
   
    $matricula = intval($_GET['matricula']);
    $cliente = new \App\Model\cliente();
    $clienteDao = new \App\Model\clienteDao();
   
 
    if(count($_POST) > 0) {

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
        }else if(empty($cpf)) {
            $erro = "Preencha o cpf do cliente";
        } else if(empty($celular)) {
            $erro = "Preencha o celular do cliente";
        } else if(empty($email)) {
            $erro = "Preencha o email do cliente";
        }

        



        if($erro) {
            echo "<p><b>ERRO: $erro</b></p>";
        } else {

            $produto = new \App\Model\cliente();
            $cliente->setMatricula($matricula);
            $cliente->setNome($nome);
            $cliente->setSobrenome($sobrenome);
            $cliente->setCpf($cpf);
            $cliente->setCelular($celular);
            $cliente->setEmail($email);
            
            $clienteDao = new \App\Model\clienteDao();
            $clienteDao->update($cliente);

            echo "<p><b>Cliente atualizado com sucesso!!!</b></p>";
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
    <title>Editar Cliente</title>
</head>
<body>
    <div class="container">
    <a href="read_cliente.php">Voltar para a tabela</a>
    <form method="POST" action="">
    <?php
       foreach ($clienteDao->readUpdate($matricula) as $cliente): ?>
        <p>
            <label>Nome:</label>
            <input value="<?php echo $cliente['nome']; ?>" name="nome" type="text">
        </p>
        <p>
            <label>Sobrenome:</label>
            <input value="<?php echo $cliente['sobrenome']; ?>" name="sobrenome" type="text">
        </p>
        <p>
            <label>CPF:</label>
            <input value="<?php echo $cliente['cpf']; ?>" name="cpf" type="text">
        </p>
        <p>
            <label>Celular:</label>
            <input value="<?php echo $cliente['celular']; ?>" name="celular" type="text">
        </p>
        <p>
            <label>Email:</label>
            <input value="<?php echo $cliente['email']; ?>" name="email" type="text">
        </p>

    <?php
        endforeach;
    ?>
        <button type="submit" class="btn btn-light" title="Gravar atualização">Salvar Cliente</button>
        </p>
    </form>
    </div>
</body>
</html>