<?php
/***

   class Login{
       # criação de um atributo estático
       public static $user;


       public static function verificaLogin() {
           echo " O usuário " .self::$user. " está logado <br>";
           // $this não funciona na linha acima porque a classe
           // não foi instanciada
       }
   }


   /* quando você trabalha com método estático
      não precisa mais instanciar a classe */

   //"::" carrega uma função estática ou atributo

/****   Login::verificaLogin();


   // passando um valor para o atributo estático
   Login::$user = "admin";
 

   Login::verificaLogin();

*/
  
   class Login{
       # criação de um atributo estático
       public static $user;


       public static function verificaLogin() {
           echo "<br> O usuário " .self::$user. " está logado ";
           // $this não funciona na linha acima porque a classe
           // não foi instanciada
       }


       public function sairsistema(){
           echo "<br> O usuário deslogou";
       }
   }


   /* quando você trabalha com método estático
      não precisa mais instanciar a classe */


   Login::verificaLogin();


   // passando um valor para o atributo estático
   Login::$user = "admin";
   Login::verificaLogin();




   // acessando o método não estático(pode ser usado para senha)
   $login = new Login();
   $login->sairSistema();


 
?>

