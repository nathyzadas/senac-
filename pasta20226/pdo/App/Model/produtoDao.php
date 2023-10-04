<?php


namespace App\Model;


# Dentro da classe a seguir, temos o nosso CRUD
# Create, Read, Update e Delete


class ProdutoDao {

   # função para criar um registro de produto
   public function create(Produto $p){
      // o campo id é auto-incremento, por isso não entrou abaixo
      $sql = 'INSERT INTO produtos (nome, descricao) VALUES (?,?)';
    
      $stmt = Conexao::getConn()->prepare($sql); //prepare, método da classe PDO
      $stmt->bindValue(1, $p->getNome());
      $stmt->bindValue(2, $p->getDescricao());


      $stmt->execute(); //execute, método da classe PDO
  }



   # função para ler os registros
    public function read(){
        $sql = 'SELECT * FROM produtos order by nome'; /*where id="1";*/
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();


        // verificar se a consulta retornou resultado
        if($stmt->rowCount() > 0):
        // Se existe pelo menos uma linha (registro)
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            // insere em resultado o conteúdo
            return $resultado;
            // retorna a variável resultado
        else:
            return [];
            // retorna um array vazio caso não encontre
        endif;    
   }



   # função para atualizar (alterar)
   public function update(Produto $p){


      $sql = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';
 
 
      $stmt = Conexao::getConn()->prepare($sql);
      $stmt->bindValue(1,$p->getNome());
      $stmt->bindValue(2,$p->getDescricao());
      $stmt->bindValue(3,$p->getId());
 
 
      $stmt->execute();
 
 
    }
 


   # função para apagar registro
   public function delete($id){


      $sql = 'DELETE FROM produtos WHERE id = ?';
      $stmt = Conexao::getConn()->prepare($sql);
      $stmt->bindValue(1,$id);
      $stmt->execute();
 }

}


?>
