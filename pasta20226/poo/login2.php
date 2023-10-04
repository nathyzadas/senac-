<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="" method="get">
       <h3>Dados:</h3>
       <label for="nome">Nome:</label>
       <input type="text" id="nome" name="nome" size="30"><span class="error">*</span><p>
       <label for="email">Email:</label>
       <input type="text" id="email" name="email" size="50"><span class="error">*</span><p>
       <label for="senha">Senha:</label>
       <input type="number" id="senha" name="senha" size="10"><span class="error">*</span><p>

       <p><button name="cadastrar" type="submit">Enviar</button>
       <button type="reset">Limpar</button>


</body>
</html>



<?php

if(isset($_GET['cadastrar'])) {


    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $senha = $_GET["senha"];


class Login {
    private $nome;
    private $email;
    private $senha;


    public function __construct($email, $password, $nome){
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($password);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($n){
        $this->nome = $n;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setEmail($e){
        $password = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $password;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

    public function realizarLogin(){
        if ($this->email== "teste@teste.br" and $this->senha=="123456"):
        echo "Logado com sucesso!";
    else:
        echo "Login inválido!";
    endif;
}
}

$logar = new Login($nome, $email, $senha);
//----- escrever na classe
$logar->setNome($nome);
$logar->setEmail($email);
$logar->setSenha($senha);
$logar->realizarLogin();
//----- ler a classe


echo "<br> Nome: ".$logar->getNome();
echo "<br> Email: ".$logar->getEmail();
echo "<br> Senha: ".$logar->getSenha();

}




?>