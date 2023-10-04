<?php
$nome  = $_POST["nome"];
$senha = $_POST["senha"]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php

if (strlen($senha)>="8") {
    echo "Senha Válida<br>";
} else {
    echo "Senha Inválida<br>";
}

if (str_word_count($nome)>=2) {
    echo "Nome OK";
} else {
    echo "Nome Inválido";
}

?>
</body>
</html>


