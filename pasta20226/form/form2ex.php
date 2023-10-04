<?php
$nome  = $_POST["nome"];
$email = $_POST["email"];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php
   echo "Nome: " . $nome . "<br>";
   echo "Seu e-mail: $email";
   ?>
</body>
</html>
