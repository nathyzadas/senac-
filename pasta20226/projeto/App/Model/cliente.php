<?php

namespace App\Model;

class Cliente{
   # A classe terá os campos da tabela anteriormente criada
   private $matricula, $nome, $sobrenome, $cpf, $celular, $email;
 
   public function getMatricula(){
       return $this->matricula;
   }


   public function setMatricula($matricula){
       $this->matricula = $matricula;
   }


   public function getNome(){
       return $this->nome;
   }


   public function setNome($nome){
       $this->nome = $nome;
   }


   public function getSobrenome(){
       return $this->sobrenome;
   }


   public function setSobrenome($sobrenome){
       $this->sobrenome = $sobrenome;
   }



   public function getCpf(){
    return $this->cpf;
    }


    public function setCpf($cpf){
    $this->cpf = $cpf;
    }


    public function getCelular(){
        return $this->celular;
    }
 
 
    public function setCelular($celular){
        $this->celular = $celular;
    }


    public function getEmail(){
        return $this->email;
    }
 
 
    public function setEmail($email){
        $this->email = $email;
    }




}

?>