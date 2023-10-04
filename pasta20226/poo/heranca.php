<?php


class Veiculo {
   private $modelo;
   private $cor;
   private $ano;


   public function getModelo(){
       return $this->modelo;
   }


   public function getCor(){
       return $this->cor;
   }


   public function getAno(){
       return $this->ano;
   }


   public function setModelo($m) {
       $this->modelo = $m;
   }
  
   public function setCor($c) {
       $this->cor = $c;
   }
  
   public function setAno($a) {
       $this->ano = $a;
   }


   public function Andar(){
       echo "Andou";
   }


   public function Parar(){
       echo "Parou";
   }


}


class Carro extends veiculo{


   public function ligarLimpador(){
       echo "Limpando em 321";
   }
 
}




class Moto extends veiculo {
   public function empinar(){
       echo "Empinando em 321";
   }
 
}




$carro = new Carro();
$carro->setModelo("Gol");
$carro->setCor("azul");
$carro->setAno(2018);
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
echo "<br>";


$moto = new Moto();
$moto->setModelo("Honda Biz");
$moto->setCor("vermelho");
$moto->setAno(2010);
$moto->Parar();
echo "<br>";
$moto->empinar();
?>

