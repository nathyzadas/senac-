<?php


// Definido variáveis e inicialize com valores vazios
$username = $password =  "";
$username_err = $password_err =  "";

// — acrescentei isso —
if (isset($_POST["limpar"])){
    $username = $password = "";
} 


if (isset($_POST["gravar"])){
    require_once '..\Model\conexao.php';
    require_once '..\Model\user.php';
    require_once '..\Model\userDao.php';
    
    if(empty(trim($_POST["email"])) || !filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
        $username_err = "Por favor coloque um email válido para o nome de usuário.";
        $username = $_POST["email"];

    } else if(empty(trim($_POST["senha"])) || strlen($_POST["senha"])<8){   
        $username = $_POST["email"];
        $password_err = "A senha precisa ser preenchida com no mínimo 8 caracteres.";

    }else {
       
        $username = $_POST['email'];
        $senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);
       
        $user = new \App\Model\User();
        $user->setUsername($username);
        $user->setPassword($senha);
        $userDao = new \App\Model\UserDao();
        if ($userDao->create($user)){
            $username_err = "Email já cadastrado no sistema.";
        } else{
            echo '<script>alert("Usuário cadastrado com sucesso!")</script>';
            $username = $password = "";
        }
    }

}


?>

<!--<style>
    .container{
        background-color: pink;
        hight: 100px;
        whith: 50%;
        margin-top:30%;
    }

</style>
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Cadastrar Senha</title>
</head>
<body>
  <div class="container">
    <h2>Cadastro</h2>
        <p>Por favor, preencha este formulário para criar uma conta.</p>
        <form action="" method="post">
            <div class="form-group">
                <label>Email para acesso</label>
                <input type="email" name="email" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <p></p>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Criar Conta" name="gravar">
                <input type="reset" class="btn btn-secondary ml-2" value="Apagar Dados" name="limpar">
            </div>
            <p>Já tem uma conta? <a href="login.php">Entre aqui</a>.</p>
        </form>
    </div>    
</body>
</html>

