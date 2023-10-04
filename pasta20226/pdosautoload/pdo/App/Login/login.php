<?php


require_once '..\Model\conexao.php';
require_once '..\Model\user.php';
require_once '..\Model\userDao.php';


$username = $password =  "";
$username_err = $password_err =  "";


if (isset($_POST["limpar"])){
    $username = $password = "";
}


$user = new \App\Model\User();
$usuario = new \App\Model\User();
$userDao = new \App\Model\UserDao();
   
if(isset($_POST['email'])){


    if(empty(trim($_POST["email"])) || !filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
        $username_err = "Por favor coloque um email válido para o nome de usuário.";
        $username = $_POST["email"];
    } elseif(empty(trim($_POST["senha"])) || strlen($_POST["senha"])<8){  
        $password_err = "A senha precisa ser preenchida com no mínimo 8 caracteres.";
    } else {
        $username = $_POST["email"];
        $senha = $_POST['senha'];


        $user->setUsername($username);
        $user->setPassword($senha);
       
        $userDao->localizar($user);
        if ($userDao->localizar($user)) {
            //iniciando a sessão
            if(!isset($_SESSION)) session_start();
            // capiturando o username do usuário para a session
            $_SESSION['usuario'] = $user->getUsername();
            header('Location: ../Form/read_produto.php');
        } else {
            $password_err = "usuário ou e-mail incorretos";
        }
    }
 }


?>
   
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
  <div class="container">
        <h2>Login</h2>
        <p>Por favor, preencha os campos para fazer o login.</p>      
         <form action="" method="post">
            <div class="form-group">
                <label>Email para acesso</label>
                <input type="text" name="email" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <p></p>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Realizar Login" name="gravar">
                <input type="submit" class="btn btn-secondary ml-2" value="Apagar Dados" name="limpar">
            </div>
            <p>Não tem uma conta? <a href="create_user.php">Cadastre-se.</a>.</p>
        </form>
    </div>    
</body>
</html>
