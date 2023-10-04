<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Php página única</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

   <form action="" method="get">
       <h1>Dados cadastrais</h1>
       <label for="nome">Nome:</label>
       <input type="text" id="nome" name="nome" size="30"><span class="error">*</span><p>
       <label for="email">E-mail:</label>
       <input type="text" id="email" name="email" size="50"><span class="error">*</span><p>
       <label for="website">URL:</label>
       <input type="text" id="website" name="website" size="50"><p>
       <label for="sexo">Sexo:</label>
       <input type="radio" name="sexo" value="masculino"> Masculino
       <input type="radio" name="sexo" value="feminino"> Feminino
       <p><button name="cadastrar" type="submit">Enviar</button>
       <button type="reset">Limpar</button>
       
   </form>
</body>
</html>

<?php

/*
         if(isset($_GET['cadastrar'])){
 
           $nome  = $_GET["nome"];
           $email = $_GET["email"];
           $website   = $_GET["website"];
           $sexo = $_GET["sexo"];
          
           echo("<h1>Dados inseridos</h1>
           Nome: $nome <p>
           Email: $email <p>
           Site: $website <p>
           Sexo: $sexo <p>
        
           ");
         }
*/


if(isset($_GET['cadastrar'])){

   if (empty($_GET["nome"]) || strlen($_GET["nome"])<3) {
       echo '<p> nome inválido </p>';
       die(); // poderia usar um else
   }  
   if (empty($_GET["email"]) || !filter_var($_GET["email"],FILTER_VALIDATE_EMAIL)) {
       echo '<p class="error"> informe o email </p>';
       die();
   }
   if (!empty($_GET["website"]) && !filter_var($_GET["website"],FILTER_VALIDATE_URL)) {
       echo '<p class="error"> informe o site </p>';
       die();
   }
   $sexo = "indefinido";
   if (isset($_GET["sexo"])){
       $sexo = $_GET["sexo"];
       if ($sexo != 'masculino' && $sexo != 'feminino'){
           echo '<p class="error"> informe o sexo  </p>';
           die();    
       }
   }
   $nome  = $_GET["nome"];
   $email = $_GET["email"];
   $website   = $_GET["website"];
   
   echo("<h1>Dados inseridos</h1>
       Nome: $nome <p>
       Email: $email <p>
       Site: $website <p>
       Sexo: $sexo <p>
");
}




?>
