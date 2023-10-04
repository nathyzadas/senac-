<?php

namespace App\Model;

class User {

private $id, $username, $password;
 
   public function getId(){
       return $this->id;
   }


   public function setId($id){
       $this->id = $id;
   }


   public function getUsername(){
       return $this->username;
   }


   public function setUsername($n){
       $this->username = $n;
   }


   public function getPassword(){
       return $this->password;
   }


   public function setPassword($p){
       $this->password = $p;
   }
   
}



?>