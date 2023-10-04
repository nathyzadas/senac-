<?php

namespace App\Model;

class UserDao {

    public function create(User $u){

       //testar se já existe um usuário com este username
       $sql = 'SELECT * FROM users WHERE username = ?';
       $stmt = Conexao::getConn()->prepare($sql);
       $stmt->bindValue(1,$u->getUsername());
   
       $stmt->execute();
   
       if($stmt->rowCount() == 1){  // se for encontrado
         $retorno = "ok";
         return $retorno;
       } else {
      
           $sql = 'INSERT INTO users (username, password) VALUES (?,?)';
      
           $stmt = Conexao::getConn()->prepare($sql); 
           $stmt->bindValue(1, $u->getUsername());
           $stmt->bindValue(2, $u->getPassword());
           $stmt->execute();
       }    
   }

    public function localizar(User $u){

    $sql = 'SELECT * FROM users WHERE username = ?';

    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->bindValue(1,$u->getUsername());

    $stmt->execute();

    if($stmt->rowCount() == 1){  // se for encontrado

        if($row = $stmt->fetch()){
           
            $hashed_password = $row["password"]; // pega a senha criptografada da tabela
            if(password_verify($u->getPassword(), $hashed_password)){ // testa se é igual a digitada pelo usuario
                $resultado = "ok";
                return $resultado;
            }
        }
    }
   }

}


?>
