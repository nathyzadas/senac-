<?php
class Veiculo { //classe pai
   private $modelo;
   public $cor;
   public $ano;
    public function Andar(){
       echo $this->modelo ." Andou";
   }


   public function Parar(){
       echo "Parou";
   }
}


//classe filha não consegue ter acesso as informações que estiverem private na classe mãe

class Carro extends veiculo{ //classe filha
   public function ligarLimpador(){
       echo "Limpando em 321";
   }


   public function setModelo($m){
       $this->modelo = $m;
   }


   public function getModelo(){
       return $this->modelo;
   }
}


$carro = new Carro();
$carro->setModelo("Gol");
$carro->cor="azul";
$carro->ano=2018;
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
echo "<br>";


?>
