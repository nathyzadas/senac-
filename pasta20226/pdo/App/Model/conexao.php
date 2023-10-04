<?php
/*** namespace App\Model;


/* abaixo a classe responsável em estabelecer a conexão com o banco de dados /
class Conexao {
   /* uso do padrão Singleton para que    que a aplicação tenha apenas uma instância,
   deixando-a assim com uma melhor performance /
 
   private static $instance;


   public static function getConn(){

       /* este método verifica se há uma instância da nossa conexão, 
       se existir ele retorna a instância, mas se não existir ele cria uma /



       if(!isset(self::$instance)):
 		self::$instance = new \PDO('mysql:host=localhost;dbname=pdo;charset=utf8','root','');
       endif;
       return self::$instance;
    }
}
***/


namespace App\Model;


class Conexao {
 
   private static $instance;


   public static function getConn(){


       if(!isset(self::$instance)):
            define( 'MYSQL_HOST', 'localhost' );
            define( 'MYSQL_USER', 'root' );
            define( 'MYSQL_PASSWORD', '' );
            define( 'MYSQL_DB_NAME', 'pdo' );
            define( 'MYSQL_CHARSET', 'utf8' );
            self::$instance = new \PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME . ';charset=' . MYSQL_CHARSET, MYSQL_USER, MYSQL_PASSWORD );
       endif;
       return self::$instance;
    }
}


?>

