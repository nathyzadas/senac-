<?php


namespace App\Model;


# Dentro da classe a seguir, temos o nosso CRUD
# Create, Read, Update e Delete


class ClienteDao {


   # função para criar um registro de produto
   public function create(Cliente $c){
       // não estamos inserindo o campo id abaixo, porque o mesmo é auto-incremento
       $sql = 'INSERT INTO cliente (nome, sobrenome, cpf, celular, email) VALUES (?,?,?,?,?)';
      
       $stmt = Conexao::getConn()->prepare($sql); //prepare é um método da classe PDO
       $stmt->bindValue(1, $c->getNome());
       $stmt->bindValue(2, $c->getSobrenome());
       $stmt->bindValue(3, $c->getCpf());
       $stmt->bindValue(4, $c->getCelular());
       $stmt->bindValue(5, $c->getEmail());   


       $stmt->execute();
   }


   # função para ler os registros
   public function read(){
        $sql = 'SELECT * FROM cliente';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        // verificar se a consulta retornou resulatdo
        if($stmt->rowCount() > 0): 
        // Se existe pelo menos uma linha (registro)
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC); 
            // insere em resultado o conteúdo
            return $resultado; 
            // retorna a variavel resultado
        else:
            return []; 
            // retorna um array vazio caso não encontre
        endif;    

   }


   # função para atualizar (alterar)
   public function update(Cliente $c){

     $sql = 'UPDATE cliente SET nome = ?, sobrenome = ?, cpf = ?, celular = ?, email = ? WHERE matricula = ?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $c->getNome());
        $stmt->bindValue(2, $c->getSobrenome());
        $stmt->bindValue(3, $c->getCpf());
        $stmt->bindValue(4, $c->getCelular());
        $stmt->bindValue(5, $c->getEmail()); 
        $stmt->bindValue(3,$c->getMatricula());

     $stmt->execute();

   }

   # função para ler os registros
   public function readUpdate($p){
    $sql = 'SELECT * FROM cliente WHERE ID = ?';
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->bindValue(1,$p);
    $stmt->execute();

    // verificar se a consulta retornou resulatdo
    if($stmt->rowCount() > 0): 
    // Se existe pelo menos uma linha (registro)
        $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC); 
        // insere em resultado o conteúdo
        return $resultado; 
        // retorna a variavel resultado
    else:
        return []; 
        // retorna um array vazio caso não encontre
    endif;    
}


   # função para apagar registro
   public function delete($matricula){

        $sql = 'DELETE FROM cliente WHERE matricula = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$matricula);
        $stmt->execute();
   }
   
}


?>
