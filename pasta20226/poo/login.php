<?php

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
        if ($this->email=="teste@senac.br" and $this->senha=="123456"):
        echo "Logado com sucesso!";
    else:
        echo "Login inválido!";
    endif;
}
}

$logar = new Login("teste@senac.br", "123456", "Elias Santos");
//----- escrever na classe
$logar->setEmail("teste@senac.br");
$logar->setSenha("123456");
$logar->realizarLogin();
//----- ler a classe

echo "<br> Nome: ".$logar->getNome();
echo "<br> E-mail: ".$logar->getEmail();
echo "<br> Senha: ".$logar->getSenha();




?>