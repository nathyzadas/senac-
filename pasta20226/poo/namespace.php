<?php
/*** require 'classes/produto.php';
   require 'models/produto.php';


   $produto = new \classes\Produto();
   $produto->mostrardetalhes();

   echo "<br><br>";

   $produto = new \models\Produto();
   $produto->mostrardetalhes();
***/

/***require 'classes/produto.php';
   require 'models/produto.php';


   use models\Produto;
  
   $produto = new Produto();
   $produto->mostrardetalhes();

// Essa parte não está pegando //

   use classes\Produto;
   echo "<br>";
  
   $produto = new Produto();
   $produto->mostrardetalhes();
***/

require 'classes/produto.php';
   require 'models/produto.php';


   use models\Produto as productModel;
   use classes\Produto as productClasse;
  
   $produto = new productModel();
   $produto->mostrardetalhes();


   echo "<br>";


   $produto2 = new productClasse();
   $produto2->mostrardetalhes();


?>






