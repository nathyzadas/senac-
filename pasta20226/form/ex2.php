<?php
$nome  = $_POST["nome"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php

if (str_word_count($nome)>=2) {
    echo "Nome OK";
} else {
    echo "Nome Inválido";
}

?>