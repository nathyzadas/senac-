<?php


   /* Polimorfismo é a capacidade de substituir ou reescrever
   um método herdado da classe pai */


/***   class Animal {
       public function Andar(){
           echo "O animal andou";
       }
   }


   class Cavalo extends Animal{
       public function Andar(){
           echo "O cavalo andou";
       }
   }


   $animal = new Cavalo();
   $animal->Andar();

***/

   /* Polimorfismo é a capacidade de substituir ou reescrever
   um método herdado da classe pai ou superclasse */


   class Animal {
       public function Andar(){
           echo "O animal andou";
       }


       public function Correr(){
           echo "O animal correu";
       }
   }


   class Cavalo extends Animal{
       public function Andar(){
           $this->Correr();
       }
   }


   $animal = new Cavalo();
   $animal->Andar();


?>


