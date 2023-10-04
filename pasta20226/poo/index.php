<?php

class Pessoa{
    public $nome;
    public $idade;

    public function falar(){
        echo ($this->nome." de idade ".$this->idade." falou");
    }
}

$elias = new Pessoa();
$elias->nome = "Elias Pereira Santos";
$elias->idade = 25;
$elias->falar();
echo "<br>";


/*var_dump($elias);*/

?>


